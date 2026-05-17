<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    // show register form
    public function create()
    {
        return view('auth.register');
    }

    // submit form
    // validate input
    public function store(Request $request)
    {
// dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:3'],
        ]);
        
        // Password::default()
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // dd($user->name);
        Auth::login($user);

        return redirect('/');
    }
}
