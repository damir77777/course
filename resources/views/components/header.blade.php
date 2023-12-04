<div class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ОБУЧАЛКА</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Курсы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Записаться</a>
                    </li>

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/signout">Выход</a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/signin">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signup">Регистрация</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
