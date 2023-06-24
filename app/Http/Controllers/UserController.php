<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profileUpdate(Request $request)
    {
        $input = $request->validate([
            'name' => ['max:25'],
            'email' => ['email:dns', 'max:50', Rule::unique('users', 'email')],
            'phone' => [],
            'location' => [],
            'jabatan' => [],
            'about_me' => [],
        ]);

        Auth::user()->update($input);
        return Redirect('/dashboard');
    }
}
