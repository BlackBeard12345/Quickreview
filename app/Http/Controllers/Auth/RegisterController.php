<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        if ($data['password'] != $data['passwordRepeat']) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['Hasła nie zgadzają się']);
        }

        $user = User::where('login', $data['login'])
            ->orWhere('email', $data['email'])
            ->first();

        if ($user) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['Użytkownik z takimi danymi już istnieje']);
        }

        $user = User::create($data);
        Auth::login($user);

        return redirect()
            ->route('index');
    }
}
