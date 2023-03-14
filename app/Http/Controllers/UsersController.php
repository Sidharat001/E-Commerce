<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;

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
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect('/signup');
        }
    }

    /** Login Method For All Users **/
    public function login(Request $request){
        
    }


}
