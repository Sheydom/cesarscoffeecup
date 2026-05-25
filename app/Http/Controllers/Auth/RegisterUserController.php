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

    //// submit form
    // validate input
    public function store(Request $request)
    {
// dd($request->all());
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'=>['required','string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone'=>['required','string','max:30'],
            'company_name'=>['required','string','max:255'],
            'business_name'=>['required','string','max:255'],
            'tax_number'=>['required','string','max:255'],
            'street_address'=>['required','string','max:255'],
            'state'=>['required','string','max:30'],
            'city'=>['required','string','max:255'],
            'postal_code'=>['required','string','max:30'],
            'country'=>['required','string','max:255'],
            'password' => ['required','confirmed', Password::default()->mixedCase()->numbers()->symbols()],
        ]);
        
        // Password::default()
        $user = User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'company_name'=>$request->company_name,
            'business_name'=>$request->business_name,
            'tax_number'=>$request->tax_number,
            'street_address'=>$request->street_address,
            'state'=>$request->state,
            'city'=>$request->city,
            'postal_code'=>$request->postal_code,
            'country'=>$request->country,
            'password'=>$request->password,
        ]);

        // dd($user->name);
        Auth::login($user);

        return redirect('/');
    }
}
