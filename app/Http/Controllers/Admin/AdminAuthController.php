<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    // login
    public function login() 
    {
        return view('cms.auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/cms/dashboard');
        } else {
            return redirect()->route('admin_login')->with('error', 'wrong credentials');
        }
    }

    // logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/cms/login');
    }

    // register
    public function register() 
    {
        return view('cms.auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:admins',
            'password' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Admin::create($validated);

        return redirect('/cms/login');
    }
}
