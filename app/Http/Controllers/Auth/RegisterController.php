<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public UserRepository $repository;

    public function __construct(UserRepository $repository)
    {

        $this->repository = $repository;
    }

    public function show(): View
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = $this->repository->create($request);
        auth()->login($user);
        $request->session()->flash('success','Поздравляем с регистрацией на сайте!');
        return redirect()->route('index');
    }
}
