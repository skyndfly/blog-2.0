<div class="col-md-8 flex-column">
    <a href="{{ route('articles.show',$articles->id) }}" class="card flex-grow-1">
        <div class="card-head">
            <div class="category">
                @if( $articles->category->parentCategory)
                    <span
                        class="badge bg-secondary-light">{{ $articles->category->parentCategory->name}}</span>
                @endif
                <span
                    class="badge bg-secondary-light">{{ $articles->category->name}}</span>
            </div>
            <span
                class="date">{{ $articles->created_at->formatLocalized('%e ') }} @lang('month.' . $articles->created_at->formatLocalized('%B')) {{ $articles->created_at->formatLocalized(' %Y | %H:%M') }}</span>
        </div>
        <div class="card-body">
            <h4>
                {{ $articles->title}}
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
