<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordEmailSendRequest;
use App\Mail\Auth\ForgotPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;



class ForgotController extends Controller
{


    public function show(): View
    {
        return view('auth.forgot');
    }

    public function email(PasswordEmailSendRequest $request)
    {
        Mail::to($request->validated()['email'])->send(new ForgotPassword());

    }

    public function showReset (string $token): View
    {
        return view('auth.reset', ['token' => $token]);
    }
}
