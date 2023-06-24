<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $input = $request->validate([
            'name' => ['required', 'unique:users,name', 'min:3', 'max:10'],
            'email' => ['required', 'unique:users,email', 'email:dns'],
            'password' => ['required', 'min:6', 'alpha_num', 'max:200'],
        ]);
        $input['password'] = bcrypt($input['password']);
        // $request->validate(['agreement' => ['accepted']]);

        $user = User::create($input);
        auth()->login($user);
        return redirect('/');
    }

    public function login(Request $req)
    {
        $input = $req->validate([
            'login_mail' => 'required',
            'login_password' => 'required',
        ]);
        if (Auth()->attempt(['email' => $input['login_mail'], 'password' => $input['login_password']])) {
            request()->session()->regenerate();
        }
        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
