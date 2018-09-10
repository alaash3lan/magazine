<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashboardPilicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function author(User $user){
        return 'author' == $user->role->name;

    }


    public function admin(User $user){
        return 'admin' == $user->role->name;

    }
}



