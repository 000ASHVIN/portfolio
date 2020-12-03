<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        $request = $request->only('email', 'password');
        
        if(Auth::attempt($request)) {
            return redirect('admin/home');
        }

        return back()->with('error', 'credentials wrong');
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }
}
