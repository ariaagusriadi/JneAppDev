<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function LoginProces()
    {
        $userid = request('user_id');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen == 16) {
                $field = 'nik';
            } else {
                $field = "nama";
            }
        }

        $credential = [
            $field => request('user_id'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;

        if (auth()->attempt($credential, $remember)) {
            $user = auth()->user();
            return $this->manageRedirect($user);
        } else {
            return view('auth.login', ['message' => 'login gagal']);
        }
    }

    public function manageRedirect($user)
    {
        $user = auth()->user();
        $list_role = $user->role;
        $firstRole = $list_role->first();
        $url = $firstRole->module->url;

        return redirect($url);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
