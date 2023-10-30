<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordEmailSendRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class ForgotController extends Controller
{


    public function show(): View
    {
        return view('auth.forgot');
    }

    public function email(PasswordEmailSendRequest $request): RedirectResponse
    {
        $status =  Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showReset (string $token): View
    {
        return view('auth.reset', ['token' => $token]);
    }
}
