<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PersonalCabinetController extends Controller
{
    public function __invoke():View
    {
        return view('personal.cabinet', ['model' => auth()->user()]);
    }
}
