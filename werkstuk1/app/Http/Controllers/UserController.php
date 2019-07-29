<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getUser(){
        $user = Auth::user();
        return view('content.profile', ['user' => $user]);
    }

    public function postUpdateUser(Request $request){
        $this ->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return redirect()->route('user');

    }
}
