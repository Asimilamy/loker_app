<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    protected $types = ['user', 'company', 'admin'];

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
        if (in_array($request->type, $this->types)) {
            $validate = Validator::make($request->all(), [
                'login_id' => 'bail|required|max:255',
                'password' => 'required|max:255'
            ]);

            if ($validate->fails()) {
                return response()->json(['status' => 'error', 'msg' => $this->alert('danger', 'Error! Validation Errors!')]);
            } else {
                $credentials = $request->only($this->username, 'password');
                if (Auth::attempt($credentials)) {
                    if ($request->type != 'admin') {
                        $user = User::find(Auth::user()->id)->type;
                        $user_type = empty($user)?'':$user->type;
                    } else {
                        $user_type = 'admin';
                    }
                    if ($request->type == $user_type) {
                        $request->session()->put('type', $request->type);
                    } else {
                        $this->logout();
                        return response()->json(['status' => 'error', 'msg' => $this->alert('danger', 'Error! Invalid credentials type!')]);
                    }
                    return response()->json(['status' => 'success', 'msg' => $this->alert('success', 'Success! Login Success!')]);
                }
            }
        }
        
        return response()->json(['status' => 'error', 'msg' => $this->alert('danger', 'Error! Invalid Credentials!')]);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');
    }

    protected function alert($type = 'danger', $msg = '')
    {
        $alert = '<div role="alert" class="alert alert-' . $type . '">';
            $alert .= $msg;
        $alert .= '</div>';
        return $alert;
    }
}
