<nav id="nav">
    <div class="container">
        <div class="nav_content">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="" id="logo">
            </a>
            <div class="right">
                <a href="" class="">Главная</a>
                <a href="">О нас</a>
                <a href="">Контакты</a>
                <a href="">Поиск</a>
                @auth
                    <div class="drop">

                        <a href="{{ route('cabinet', auth()->user()) }}">
                            <i class="bi bi-person-fill"></i>
                            Профиль
                        </a>
                        <div class="drop_menu">
                            <span class="drop_item">
                                <i class="bi bi-envelope-at-fill"></i>
                                {{ auth()->user()->email }}
                            </span>
                            <a class="drop_item" href="{{ route('cabinet', auth()->user()) }}">
                                <i class="bi bi-person-fill"></i>
                                Личный кабинет
                            </a>
                            <a class="drop_item" href="">
                                <i class="bi bi-sliders"></i>
                                Настройки
                            </a>

                            <form class="drop_item" action="{{ route('exit') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="bi bi-x-square-fill"></i>
                                    Выйти
                                </button>
                            </form>
                        </div>
                    </div>
                @elseguest
                    <a href="{{ route('login') }}">
                        <i class="bi bi-person-fill"></i>
                        Войти
                    </a>

                @endauth
                <a class="contact_number" href="tel:+79888954553">
                    <i class="bi bi-telephone-fill"></i>
                    +7 (988) 895-45-53
                </a>
            </div>

        </div>
    </div>
</nav>
