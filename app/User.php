<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'role_id', 'photo_id',
    ];

    public function findForPassport($identifier)
    {
        return User::orWhere(‘email’, $identifier)->where(‘status’, 1)->first();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class)->latest();
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function isAdmin()
    {
        if ($this->role->name == 'admin') {
            return true;
        }

        return false;
    }

    public function isAuthor()
    {
        if ($this->role->name == 'author') {
            return true;
        }

        return false;
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
