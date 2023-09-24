@extends('templates.index_layout')

@section('title', 'Главная')


@section('content')
    {{ Breadcrumbs::render('index') }}

    <div class="articles col-12">
        @for($i = 0; $i < count($articles); $i++)
            @if($i !== $left_article && $i !== $right_article)
                <div class="row long_article">
                    <a href="{{ route('articles.show',$articles[$i]->id) }}" class="card">
                        <div class="card-head">
                            <div class="category">
                                @if( $articles[$i]->category->parentCategory)
                                    <span
                                        class="badge bg-secondary-light">{{ $articles[$i]->category->parentCategory->name}}</span>
                                @endif
                                <span
                                    class="badge bg-secondary-light">{{ $articles[$i]->category->name}}</span>
                            </div>
                            <span
                                class="date">{{$articles[$i]->created_at->formatLocalized('%e %b %Y | %H:%M')}}</span>
                        </div>
                        <div class="card-body">
                            <h4>
                                {{ $articles[$i]->title}}
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
            @endif
            @if($i === $left_article)
                <div class="row">
                    <div class="col-md-8 flex-column">
                        <a href="{{ route('articles.show',$articles[$i]->id) }}" class="card flex-grow-1">
                            <div class="card-head">
                                <div class="category">
                                    @if( $articles[$i]->category->parentCategory)
                                        <span
                                            class="badge bg-secondary-light">{{ $articles[$i]->category->parentCategory->name}}</span>
                                    @endif
                                    <span
                                        class="badge bg-secondary-light">{{ $articles[$i]->category->name}}</span>
                                </div>
                                <span class="date">{{$articles[$i]->created_at->formatLocalized('%e %b %Y | %H:%M')}}</span>
                            </div>
                            <div class="card-body">
                                <h4>
                                    {{ $articles[$i]->title}}
                                </h4>
                                <p class="col-md-11">
                                    Размышляя об управлении ИТ-активами, я вспомнил один учебный
                                    пример.
                                    Менеджер по
                                    ИТ-мощностям в крупной компании периодически готовил толстенный
                                    отчёт
                                    руководству. В очередной раз он не принёс отчёт, решив
                                    проверить,
                                    нужен
                                    ли он
                                    вообще.
                                </p>
                            </div>
                        </a>
                    </div>
                    <x-category-block link="" category="{{ $articles[$i]->category->name }}"></x-category-block>

                </div>
            @endif
            @if($i === $right_article)
                <div class="row ">
                    <x-category-block link="" category="{{ $articles[$i]->category->name }}"></x-category-block>
                    <div class="col-md-8 flex-column">
                        <a href="{{ route('articles.show',$articles[$i]->id) }}" class="card flex-grow-1">
                            <div class="card-head">
                                <div class="category">
                                    @if( $articles[$i]->category->parentCategory)
                                        <span
                                            class="badge bg-secondary-light">{{ $articles[$i]->category->parentCategory->name}}</span>
                                    @endif
                                    <span
                                        class="badge bg-secondary-light">{{ $articles[$i]->category->name}}</span>
                                </div>
                                <span
                                    class="date">{{$articles[$i]->created_at->formatLocalized('%e %b %Y | %H:%M')}}</span>
                            </div>
                            <div class="card-body">
                                <h4>
                                    {{ $articles[$i]->title}}
                                </h4>
                                <p class="col-md-11">
                                    Размышляя об управлении ИТ-активами, я вспомнил один учебный
                                    пример.
                                    Менеджер по
                                    ИТ-мощностям в крупной компании периодически готовил толстенный
                                    отчёт
                                    руководству. В очередной раз он не принёс отчёт, решив
                                    проверить,
                                    нужен
                                    ли он
                                    вообще.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            @endif
        @endfor
    </div>
    <div class="row">
        <a href="{{ route('articles.index')  }}" class="btn btn-secondary">Все статьи</a>
    </div>


@endsection
