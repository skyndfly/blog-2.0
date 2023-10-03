@extends('templates.secondary_index_layout')

@section('title', "Войти")



@section('content')
    {{ Breadcrumbs::render('register') }}

    <div class="col-12" id="auth">
        <form action="">
            <h1>Создать аккаунт</h1>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input class="form-control" type="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Повторите пароль</label>
                <input class="form-control" type="password">
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Согласен с
                        <a href="" class="text-secondary">условия пользования</a>
                        и <br>
                        <a href="" class="text-secondary">пользовательским соглашением</a>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_news">
                    <label class="form-check-label" for="check_news">
                        Подписаться на рассылку
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary ">Создать аккаунт</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('login') }}" class="text-secondary">Уже зарегистрированны?</a>
            </div>
        </form>
    </div>

@endsection
