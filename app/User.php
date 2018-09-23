<?php

namespace App;


//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = array("id", "nom", "prenom", "email", "password");
    protected $hidden = array('password');
    public static $rules = array(
        "create" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'isAdmin' => 'boolean',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:2|confirmed'
        ),
        "update" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'string|min:2|confirmed'
        )
    );

    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = Hash::make($value);
    }

    public function getPasswordAttribute($value)
    {
        return $this->attributes["password"];
    }

    public function commentaires()
    {
        return $this->hasMany("App\Commentaire", "user_id", "id");
    }

    public function tags()
    {
        return $this->belongsToMany("App\Tag", "user_tag", "user_id", "tag_id");
    }
}
