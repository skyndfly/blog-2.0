@extends('templates.secondary_index_layout')

@section('title', "Войти")



@section('content')
    {{ Breadcrumbs::render('login') }}

    <div class="col-12" id="auth">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    </div>

@endsection
