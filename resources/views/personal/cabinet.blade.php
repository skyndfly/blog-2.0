@extends('templates.index_layout')

@section('title', 'Личный кабинет')



@section('content')
    {{--    {{ Breadcrumbs::render('articles.show', $model->category, $model) }}--}}

    <div class="col-12" id="cabinet">
        <h1>Личный кабинет</h1>
        <h2> {{ $model->email }}</h2>


    </div>

@endsection
