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
                    <a href="{{ route('cabinet', auth()->user()) }}">
                        <i class="bi bi-person-fill"></i>
                        Профиль
                    </a>
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
