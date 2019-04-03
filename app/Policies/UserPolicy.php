<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    //用于用户更新时的权限验证
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
