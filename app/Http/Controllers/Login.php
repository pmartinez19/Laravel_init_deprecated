<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class Login extends Controller
{
    /**
     * Login functions
     */
    public function login()
    {
        return view('login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email','=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect('/home');
            }
        }
        return redirect('/login')->with('error', 'Wrong email or password');
    }
    public function logout_()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Register functions
     */

    public function register()
    {
        return view('register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $bien = $user->save();
        if ($bien) {
            return redirect('login');
        } else {
            return redirect('register');
        }

    }
}
