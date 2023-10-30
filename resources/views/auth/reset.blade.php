@extends('templates.secondary_index_layout')

@section('title', "Сбросить пароль")



@section('content')
    {{ Breadcrumbs::render('password.reset') }}

    <div class="col-12" id="auth">
        <form action="{{ route('auth') }}" method="POST">
            @csrf
            <h1>Придумайте новый пароль</h1>

            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input name="password" class="form-control" type="password">
                @error('password')
                <div class="text-danger mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Повторите пароль</label>
                <input name="password_confirmation" class="form-control" type="password">
                @error('password_confirmation')
                <div class="text-danger mt-1">{{$message}}</div>
                @enderror
                <input type="hidden" value="{{ $token }}" name="token">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary ">Сбросить пароль</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('login') }}" class="text-secondary">Войти</a>
            </div>
        </form>
    </div>

@endsection
