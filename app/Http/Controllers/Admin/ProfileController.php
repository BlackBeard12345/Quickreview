<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::id())
            ->firstOrFail();

        return view('user.profile.index', [
            'user'  => $user
        ]);
    }

    public function update(UpdateRequest $request)
    {
        $data = $request->validated();

        $user = User::where('id', Auth::id())
            ->firstOrFail();

        $user->update($data);

        return redirect()
            ->route('index');
    }
}
