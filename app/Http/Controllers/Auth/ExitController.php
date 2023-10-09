<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExitController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
