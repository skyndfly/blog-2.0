<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public function auth(LoginRequest $request):View|RedirectResponse
    {
         if (!auth()->attempt($request->validated())){
             return  back()->withErrors([
                 'email' => 'Не правильный логин/пароль'
             ]);
         }//добавить true
        return view('personal.cabinet', ['model' => auth()->user()]);
    }
}
