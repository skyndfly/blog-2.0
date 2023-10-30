@extends('templates.secondary_index_layout')

@section('title', "Войти")



@section('content')
    {{ Breadcrumbs::render('login') }}

    <div class="col-12" id="auth">
        <form action="{{ route('auth') }}" method="POST">
            @csrf
            <h1>Войти</h1>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                       placeholder="name@example.com">
            </div>
            @error('email')
            <div class="text-danger mt-1">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input name="password" class="form-control" type="password">
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input name="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Запомнить?
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="text-secondary">Забыли пароль?</a>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary ">Войти</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('register') }}" class="text-secondary">Создать аккаунт</a>
            </div>
        </form>
    </div>

@endsection
