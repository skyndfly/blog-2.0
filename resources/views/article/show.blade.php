@extends('templates.index_layout')

@section('title', $model->title)

@section('content')
    {{ Breadcrumbs::render('articles.show', $model->category, $model) }}

    <div class="col-12">
        <div class="category d-flex gap-3 align-items-center">
            <span class="badge bg-secondary">{{ $model->category->name }}</span>
            <span class="date">{{$model->created_at->formatLocalized('%e %b %Y | %H:%M')}}</span>
        </div>
        <h1>
            {{ $model->title }}
        </h1>
        <p class="">
            {{ $model->text }}
        </p>
    </div>

@endsection
