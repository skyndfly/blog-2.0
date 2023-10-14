<?php

namespace App\Repository;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function create(RegisterRequest $request): Model|Builder
    {
        return User::query()->create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'newsletter' => $request->has('newsletter')
        ]);
    }

}
