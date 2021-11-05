<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->isAdmin()) {
                return redirect()
                    ->route('admin.index');
            } else {
                return redirect()
                    ->route('user.index');
            }
        }

        return redirect()
            ->route('login');
    }
}
