<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Index Methods
     *
     */
    public function index(){
        return view('signup');
    }

    /**
     * Register All Data From Users
     *
     * @UsersDetail Insert Data
     */
    public function StoreUsersData(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password'
        ]);

        if($validated == true){
            $user = new Users;
            $user->name = $request->name;
            $user->last_name = $request->lastName;
            $user->email = $request->email;
            $user->password = Crypt::encrypt($request->password);
            $user->save();
            return redirect('/signup');
        }
    }

    /** Login Method For All Users **/
    public function login(Request $request){
        $validate  = $request->validate([
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ]);
        if($validate == true){
            $user = Users::where('email', $request->input('email'))->get();
            if(Crypt::decrypt($user[0]->password) == $request->input('password')){
                session(['name' => $user[0]->name]);
                return redirect('/');
            }else{
                return "Invalid Password";
            }
        }
    }



}
