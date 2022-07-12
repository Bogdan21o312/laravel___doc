
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<div class="wrapper">
    <header id="open" class="header">
        <div id="close" class="header__container">
            <a href="/" class="header__logo">
                <span>Doc</span>MAJORCA
            </a>
            <div class="header__menu menu">
                <nav class="menu__body">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="{{ url('/html') }}" class="menu__link">HTML</a>
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__link">CSS</a>
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__link">JS</a>
                        </li>
                        <li class="menu__item">
                            <a href="{{ url('/exsamples') }}" class="menu__link">Exsamples</a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="header__button">
                <a href="" class="button button_blue">DOWNLOAD</a>
                <a href="#open" class="icon-menu"><span></span></a>
                <a href="#close" class="close-icon-menu"></a>
            </div>
        </div>
    </header>
</div>
@yield('header')

