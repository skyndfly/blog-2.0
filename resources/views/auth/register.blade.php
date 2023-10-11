@extends('templates.secondary_index_layout')

@section('title', "Создать аккаунт")



@section('content')
    {{ Breadcrumbs::render('register') }}

    <div class="col-12" id="auth">
        <form action="{{route('register')}}" method="POST">
            <h1>Создать аккаунт</h1>
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="name@example.com">
                @error('email')
                    <div class="text-danger mt-1">{{$message}}</div>
                @enderror
            </div>
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
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input name="policy" class="form-check-input" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Согласен с
                        <a href="" class="text-secondary">условия пользования</a>
                        и <br>
                        <a href="" class="text-secondary">пользовательским соглашением</a>
                    </label>
                </div>
                <div class="form-check">
                    <input name="newsletter"  class="form-check-input" type="checkbox" id="check_news">
                    <label class="form-check-label" for="check_news">
                        Подписаться на рассылку
                    </label>
                </div>
            </div>
            @error('newsletter')
            <div class="text-danger mt-1 mb-3">{{$message}}</div>
            @enderror
            @error('policy')
            <div class="text-danger mt-1 mb-3">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary ">Создать аккаунт</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('login') }}" class="text-secondary">Уже зарегистрированны?</a>
            </div>
        </form>
    </div>

@endsection
