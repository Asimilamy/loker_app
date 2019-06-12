<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\UserType;
use App\Models\Member;
use App\Models\Company;

class RegisterController extends Controller
{
    protected $types = ['user', 'company', 'admin'];

    public function register(Request $request)
    {
        if (in_array($request->type, $this->types)) {
            $validate = Validator::make($request->all(), [
                'email' => 'bail|required|email|unique:users|max:255',
                'password' => 'required|max:255',
                'password_confirm' => 'required|same:password'
            ]);

            if ($validate->fails()) {
                return response()->json(['status' => 'error', 'msg' => $this->alert('danger', 'Error! Registration error!')]);
            } else {
                $credentials = $request->only('email', 'password');
                $user = $this->create_user($credentials);
                if ($request->type == 'user') {
                    $users = $this->create_member($request->only('email'));
                } elseif ($request->type == 'company') {
                    $users = $this->create_company($request->only('email'));
                }
                if ($request->type != 'admin') {
                    $this->create_type(['user_id' => $user->id, 'child_id' => $users->id, 'type' => $request->type]);
                }
                if (Auth::attempt($credentials)) {
                    $user_credentials = User::find(Auth::user()->id)->type;
                    $request->session()->put('type', $user_credentials->type);
                    return response()->json(['status' => 'success', 'msg' => $this->alert('success', 'Success! Login Success!'), 'test' => $user->id, 'type' => $request->type]);
                }
            }
        }
        
        return response()->json(['status' => 'error', 'msg' => $this->alert('danger', 'Error! Creating User!')]);
    }

    protected function create_user(array $data)
    {
        return User::create([
            'name' => $data['email'],
            'username' => $data['email'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function create_member(array $data)
    {
        return Member::create([
            'name' => $data['email'],
        ]);
    }

    protected function create_company(array $data)
    {
        return Company::create([
            'name' => $data['email'],
        ]);
    }

    protected function create_type(array $data)
    {
        return UserType::create([
            'user_id' => $data['user_id'],
            'child_id' => $data['child_id'],
            'type' => $data['type'],
        ]);
    }

    protected function alert($type = 'danger', $msg = '')
    {
        $alert = '<div role="alert" class="alert alert-' . $type . '">';
            $alert .= $msg;
        $alert .= '</div>';
        return $alert;
    }
}
