<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    //个人页面的展示
     public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
