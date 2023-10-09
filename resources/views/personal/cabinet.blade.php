@extends('templates.index_layout')

@section('title', 'Личный кабинет')



@section('content')
    {{--    {{ Breadcrumbs::render('articles.show', $model->category, $model) }}--}}

    <div class="col-12" id="cabinet">
        <h1>Личный кабинет</h1>
        <h2> {{ $model->email }}</h2>

        <form action="{{ route('exit') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Выйти</button>
        </form>
    </div>

@endsection
