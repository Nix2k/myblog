<header>
    <div class="top">
        <div class="container">
            <div class="logo">MyBlog</div>
            <nav>
                <div class="menu-item"><a href="/">Блог</a></div>
                <div class="menu-item"><a href="/about">О создателе</a></div>
                <div class="menu-item"><a href="/contact">Контакты</a></div>
                @if ($login === 'logout')
                    <div class="menu-item"><a href="/admin">Управление</a></div>
                    <div class="menu-item"><a href="/user/logout">Выход</a></div>
                @else
                    <div class="menu-item"><a href="/user/login">Вход</a></div>
                @endif
            </nav>
        </div>
    </div>
    <div class="content">
    	<video src="/img/background.mp4" autoplay loop></video>
        <h1>Добро пожаловать в мой блог</h1>
    </div>
</header>