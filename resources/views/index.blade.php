@extends('templates.index_layout')

@section('title', 'Главная')

@section('content')
    @include('nav.index_nav')
    <header></header>

    <section class="content">
        <div class="container">
            <div class="content_content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="articles col-12">
                            <a href="" class="card">
                                <div class="card-head">
                                    <span class="badge bg-secondary-light">Категория 1</span>
                                    <span class="date">13 дек 2020</span>
                                </div>
                                <div class="card-body">
                                    <h4>
                                        Управление ИТ-активами – скучная рутина или творческая задача?
                                    </h4>
                                    <p class="col-md-11">
                                        Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. Менеджер по
                                        ИТ-мощностям в крупной компании периодически готовил толстенный отчёт
                                        руководству. В очередной раз он не принёс отчёт, решив проверить, нужен ли он
                                        вообще.
                                    </p>
                                </div>
                            </a>
                            <div class="row ">
                                <div class="col-md-8 flex-column">
                                    <a href="" class="card flex-grow-1">
                                        <div class="card-head">
                                            <span class="badge bg-secondary-light">Категория 1</span>
                                            <span class="date">13 дек 2020</span>
                                        </div>
                                        <div class="card-body">
                                            <h4>
                                                Управление ИТ-активами – скучная рутина или творческая задача?
                                            </h4>
                                            <p class="col-md-11">
                                                Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. Менеджер по
                                                ИТ-мощностям в крупной компании периодически готовил толстенный отчёт
                                                руководству. В очередной раз он не принёс отчёт, решив проверить, нужен ли он
                                                вообще.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 d-flex flex-column">
                                    <a href="" class="card card-background flex-grow-1">
                                        <div class="card-head">
                                            <span class="badge bg-secondary-light">Категория 1</span>
                                        </div>
                                        <div class="card-body">
                                            <h4>
                                                ITAM&SAMDay – самая настоящая удача!
                                            </h4>
                                            <span class="date">13 дек 2020</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @include('blocs.right')
                </div>
            </div>
        </div>
    </section>
@endsection
