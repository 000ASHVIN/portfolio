<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    public function index() {
        return view('admin.auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $password = Hash::make($request->password);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();

        return redirect('admin/login');

    }
}
