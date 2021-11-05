<?php

namespace App\Http\Controllers\Auth;

use App\Events\ResetPasswordEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResetController extends Controller
{
    public function index()
    {
        return view('auth.reset');
    }

    public function reset(ResetRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])
            ->firstOrFail();

        $password = Str::random(8);

        event(new ResetPasswordEvent($data['email'], $password));

        $user->update(['password' => $password]);

        return view('auth.reset', [
            'success'   => 'Na twój adres email zostało wysłane nowe hasło'
        ]);
    }
}
