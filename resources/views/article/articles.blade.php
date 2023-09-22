@extends('templates.index_layout')

@section('title', 'Главная')

@section('content')
    {{ Breadcrumbs::render('articles') }}

    <div class="articles col-12">
        @foreach($articles as $article)
            <div class="row long_article">
                <a href="" class="card">
                    <div class="card-head">
                        <div class="category">
                            @if( $article->category->parentCategory)
                                <span
                                    class="badge bg-secondary-light">{{ $article->category->parentCategory->name}}</span>
                            @endif
                            <span
                                class="badge bg-secondary-light">{{ $article->category->name}}</span>
                        </div>
                        <span
                            class="date">{{$article->created_at->formatLocalized('%e %b %Y | %H:%M')}}</span>
                    </div>
                    <div class="card-body">
                        <h4>
                            {{ $article->title}}
                        </h4>
                        <p class="col-md-11">
                            Размышляя об управлении ИТ-активами, я вспомнил один учебный пример.
                            Менеджер по
                            ИТ-мощностям в крупной компании периодически готовил толстенный
                            отчёт
                            руководству. В очередной раз он не принёс отчёт, решив проверить,
                            нужен
                            ли он
                            вообще.
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
        <div id="pagination" class="d-flex justify-content-center">
            {{ $articles->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>

@endsection
