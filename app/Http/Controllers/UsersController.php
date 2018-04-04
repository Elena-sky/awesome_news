<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display page of user.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function profile(Request $request){
        $user_id = $request->route('id');
        $auth_id = Auth::user()->id;

        if($user_id == $auth_id){
            return \redirect(route('home'));
        }

        $user = User::find($user_id);

        return view('users.profile', compact('user'));
    }
}
