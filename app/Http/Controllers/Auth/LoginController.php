<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where([
            ['login', $data['login']],
            ['password', $data['password']]
        ])
            ->first();

        if ($user) {
            Auth::login($user);

            return redirect()
                ->route('index');
        }

        return redirect()
            ->back()
            ->withErrors(['Nie ma takiego użytkownika'])
            ->withInput();
    }

    public function logout()
    {
        Auth::guard()->logout();
        Session::flush();
        Session::regenerate();

        return redirect()
            ->route('index');
    }
}
