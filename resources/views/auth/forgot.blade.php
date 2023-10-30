@extends('templates.secondary_index_layout')

@section('title', "Забыли пароль?")



@section('content')
    {{ Breadcrumbs::render('password.request') }}

    <div class="col-12" id="auth">
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <h1>Забыли пароль?</h1>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                       placeholder="name@example.com">
            </div>
            @error('email')
            <div class="text-danger mt-1">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary ">Войти</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('login') }}" class="text-secondary">Войти</a>
            </div>
        </form>
    </div>

@endsection
