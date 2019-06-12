<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $username;

    public function __construct()
    {
        $this->username = $this->findUsername();
    }

    public function user_login()
    {
        return view('pages/auth/auth')->with('uri', 'user');
    }

    public function company_login()
    {
        return view('pages/auth/auth')->with('uri', 'company');
    }

    public function admin_login()
    {
        return view('pages/auth/auth')->with('uri', 'admin');
    }

    public function findUsername()
    {
        $login = request()->input('login_id');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }
    
    public function username()
    {
        return $this->username;
    }

    public function login(Request $request)
    {
        $request->validate([
            'login_id' => 'bail|required|max:255',
            'password' => 'required|max:255'
        ]);
        $credentials = $request->only($this->username, 'password');
        if (Auth::attempt($credentials)) {
            return response()->json(['status' => 'success', 'msg' => 'Login success!']);
        }

        return response()->json(['status' => 'error', 'msg' => 'Invalid credentials!']);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');
    }
}
