@extends('templates.index_layout')

@section('title', $model->title)



@section('content')
    {{ Breadcrumbs::render('articles.show', $model->category, $model) }}

    <div class="col-12" id="articles">
        <div class="head_image">
            <img class="img-fluid" src="{{ asset('images/article/1.jpg') }}" alt="">
        </div>
        <div class="category d-flex gap-3 align-items-center">
            <span class="badge bg-secondary-light">{{ $model->category->name }}</span>
            <span class="date">{{ $model->created_at->formatLocalized('%e ') }} @lang('month.' . $model->created_at->formatLocalized('%B')) {{ $model->created_at->formatLocalized(' %Y | %H:%M') }}</span>
        </div>
        <h1 class="title">
            {{ $model->title }}
        </h1>
        <div class="description">
            <p class="text">
                {{ $model->text }}
            </p>
        </div>
        <div class="btns d-flex justify-content-between">
            <a href="" class="btn btn-secondary-sm btn-sm text-secondary d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                    <g clip-path="url(#clip0_2_655)">
                        <path
                            d="M2.41344 5.22558L7.03874 0.613083C7.19028 0.462049 7.43563 0.462303 7.58692 0.613865C7.73809 0.765407 7.7377 1.01089 7.58614 1.16205L3.23616 5.50002L7.58629 9.83797C7.73784 9.98914 7.73823 10.2345 7.58708 10.386C7.51124 10.462 7.41188 10.5 7.31253 10.5C7.21342 10.5 7.11446 10.4623 7.03876 10.3868L2.41344 5.77443C2.34046 5.70181 2.2995 5.60299 2.2995 5.50002C2.2995 5.39705 2.34057 5.29834 2.41344 5.22558Z"
                            fill="#5D71DD"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2_655">
                            <rect width="10" height="10" fill="white" transform="matrix(-1 0 0 1 10 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                Предыдущая новость
            </a>
            <a href="" class="btn btn-secondary-sm btn-sm text-secondary d-flex align-items-center gap-2">

                Следующая новость
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                    <g clip-path="url(#clip0_2_649)">
                        <path
                            d="M7.58656 5.22558L2.96126 0.613083C2.80972 0.462049 2.56437 0.462303 2.41308 0.613865C2.26191 0.765407 2.2623 1.01089 2.41386 1.16205L6.76384 5.50002L2.41371 9.83797C2.26216 9.98914 2.26177 10.2345 2.41292 10.386C2.48876 10.462 2.58812 10.5 2.68747 10.5C2.78658 10.5 2.88554 10.4623 2.96124 10.3868L7.58656 5.77443C7.65954 5.70181 7.7005 5.60299 7.7005 5.50002C7.7005 5.39705 7.65943 5.29834 7.58656 5.22558Z"
                            fill="#5D71DD"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2_649">
                            <rect width="10" height="10" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div id="comments">
            Комментарии - 48
            @guest
                <div class="access-denied">
                    <a href="{{ route('login') }}">Войдите</a> в свой аккаунт, чтобы открыть доступ
                </div>
            @elseauth
                Коментарии
{{--                 TODO: Вывести коментарии--}}

            @endguest
        </div>
    </div>

@endsection
