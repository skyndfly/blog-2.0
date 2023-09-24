@extends('templates.index_layout')

@section('title', '{{ $model->title  }}')

@section('content')
    {{ Breadcrumbs::render('articles.show', $model->category, $model) }}

    <div class="col-12">
        {{ $model->title }}
    </div>

@endsection
