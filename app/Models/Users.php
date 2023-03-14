<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "user_id";

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function setEmailAttribute($value){
        $this->attributes['email'] = ucwords($value);
    }

    public function setLastNameAttribute($value){
        $this->attributes['last_name'] = ucwords($value);
    }

}