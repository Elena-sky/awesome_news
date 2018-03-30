<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile(Request $request){
        $user_id = $request->route('id');

        $user = User::find($user_id);

        return view('users.profile', compact('user'));
    }
}
