<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CrudController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginConroller extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate(
            [
                'password' => 'required',
                'email' =>'required|exists:users,email'
            ],
            [
                "email.required"    => "Email is required",
                "email.exists"       => "This email doesnot exists.",
                "password.required"   => 'Password field can not be empty.',
            ]
        );
        $email = $request->input('email');
        $password =  $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = User::where('email', $email)->first();
            Auth::login($user);
            return app('App\Http\Controllers\CrudController')->index();
        } else {
            return back()->withErrors(['Invalid Email or Password']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed'
            ]
        );
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect('/login');
    }
}
