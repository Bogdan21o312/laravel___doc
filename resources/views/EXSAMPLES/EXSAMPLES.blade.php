
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layouts/header')
@section('header')
@endsection
@extends('layouts/exsample')
@section('exsample')
    <section class="healthcare healthcare_img">
        <div class="healthcare__container">
            <div class="healthcare__block-text block-text block-text_center">
                <h2 class="block-text__title block-text__title_blue"><span>Приклади</span> блоків-компонентів <br> з
                    яких можна створити сайт!</h2>
                <div class="block-text__text block-text__text_w block-text__text_mw">
                    В цьому підрозділі буде показано блоки і компоненти з яких можна створити зовнішній вигляд сайта.
                </div>
            </div>
        </div>
    </section>
    <section class="healthcare">
        <div class="healthcare__container">
            <div class="healthcare__block-text block-text">
                <h2 class="block-text__title block-text_center"><span>Приклад</span> header</h2>
                <div class="block-text__text block-text__text_ex">В цьому прикладі показано простий header на чистому
                    коді, він вже адаптивний і з меню Burger.
                </div>
            </div>
        </div>
    </section>
    <section class="exnav">
        <div class="exnav__container">
            <div class="exnav__content">
                <a href="{{'header-relvise'}}"><img src="/assets/img/all/hed.png" alt=""></a>
            </div>
                <div class="block-text__title">Html код</div>
            <xmp>
                <div class="wrapper">
                    <div class="header">
                        <div class="header__container container">
                            <a href="" class="header__logo" id="logo">Logo</a>
                            <nav class="header__menu menu" id="menu">
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <a href="" class="menu__link">Home</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="" class="menu__link">Product</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="" class="menu__link">Pricing</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="" class="menu__link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="hamb">
                                <div class="hamb__field" id="hamb">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="popup" id="popup"></div>
                        </div>
                    </div>
                </div>
            </xmp>
            <div class="block-text__title">Css код</div>
            <xmp>
                *,
                *::before,
                *::after {
                padding: 0;
                margin: 0;
                border: 0;
                box-sizing: border-box;
                }
                a {
                text-decoration: none;
                }
                ul,
                ol,
                li {
                list-style: none;
                }
                img {
                vertical-align: top;
                }
                h1, h2, h3, h4, h5, h6 {
                font-weight: inherit;
                font-size: inherit;
                }
                html, body {
                height: 100%;
                line-height: 1;
                background: #fafafa;
                font-size: 14px;
                font-weight: 500;
                color: #252b42;
                font-family: 'Montserrat', sans-serif;
                }

                .wrapper {
                min-height: 100%;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                }

                .container {
                max-width: 1046px;
                padding: 0 15px;
                margin: 0 auto;
                box-sizing: content-box;
                }

                .ibg {
                position: relative;
                }

                .ibg img {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                object-fit: cover;
                }

                .header-block {
                text-align: center;
                line-height: calc(57 / 40 * 100%);
                letter-spacing: 0.2px;
                }

                .header-block__title {
                font-size: 40px;
                line-height: calc(57 / 40 * 100%);
                font-weight: 700;
                }

                @media (max-width: 767px) {
                .header-block__title {
                font-size: 30px;
                }
                }
                @media (max-width: 992px) {
                .header-block__title {
                font-size: 35px;
                }
                }

                .header-block__title:not(:last-child) {
                margin: 0 0 10px 0;
                }

                .header-block__sub-title {
                color: #737373;
                line-height: calc(57 / 40 * 100%);
                }

                .header {
                position: absolute;
                width: 100%;
                left: 0;
                top: 0;
                z-index: 50;
                }

                .header__container {
                display: flex;
                min-height: 104px;
                align-items: center;
                }

                @media (max-width: 767px) {
                .header__container {
                min-height: 70px;
                }
                }

                .header__logo {
                font-size: 24px;
                font-weight: 700;
                color: inherit;
                }

                .header__menu {
                margin: 0 0 0 133px;
                }

                @media (max-width: 992px) {
                .header__menu {
                margin: 0 0 0 80px;
                }
                }

                @media (max-width: 767px) {
                .header__menu {
                margin: 0 0 0 40px;
                }
                }

                @media (max-width: 479px) {
                .header__menu {
                margin: 0 0 0 20px;
                }
                }

                .menu {
                padding: 5px 0;
                }

                .menu__list {
                flex-wrap: wrap;
                display: flex;
                }

                .menu__item {

                }

                .menu__item:not(:last-child) {
                margin: 0 21px 0 0;
                }

                .menu__link {
                color: #737373;
                font-weight: 600;
                line-height: calc(24 / 14 * 100%);
                }

                .menu__link:hover {
                text-decoration: underline;
                }

                @media (max-width: 479px) {
                .menu__link {
                font-size: 18px;
                }
                }

                .hamb {
                display: none;
                }

                .popup {
                display: none;
                }
                @media (max-width: 768px) {
                .header__container {
                justify-content: space-between;
                }
                .menu__link {
                display: none;
                }
                .navbar__wrap .menu {
                display: none;
                }
                .hamb {
                display: flex;
                align-items: center;
                }
                .hamb__field {
                padding: 10px 20px;
                cursor: pointer;
                }
                .bar {
                display: block;
                width: 30px;
                height: 3px;
                margin: 6px auto;
                background-color: #000;
                transition: 0.2s;
                }
                .popup {
                position: fixed;
                top: 75px;
                right: -100%;
                width: 30%;
                height: 70%;
                background-color: #fff;
                z-index: 100;
                display: flex;
                transition: 0.3s;
                }
                .popup.open {
                right: 0;
                }
                .popup .menu {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: start;
                padding: 50px 0;
                overflow: auto;
                }
                .popup .menu > li {
                width: 100%;
                }
                .popup .menu > ul > li > a {
                width: 100%;
                display: flex;
                justify-content: center;
                padding: 20px 0;
                font-size: 20px;
                color: #3f3f3f;
                }
                .popup .menu > li > a:hover {
                background-color: rgba(122, 82, 179, 0.1);
                }
                .hamb__field.active .bar:nth-child(2) {
                opacity: 0;
                }
                .hamb__field.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
                }
                .hamb__field.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
                }
                body.noscroll {
                overflow: hidden;
                }
                }

                @media (max-width: 425px) {
                .popup .menu > ul > li > a {
                font-size: 16px;
                }
                }

                @media (min-width: 320px) {
                .popup .menu > ul > li > a {
                width: 100%;
                }
                }

            </xmp>
            <div class="block-text__title">Js код</div>
            <xmp>
                const hamb = document.querySelector("#hamb");
                const popup = document.querySelector("#popup");
                const menu = document.querySelector("#menu").cloneNode(1);
                const body = document.body;

                hamb.addEventListener("click", hambHandler);

                function hambHandler(e) {
                e.preventDefault();
                popup.classList.toggle("open");
                hamb.classList.toggle("active");
                body.classList.toggle("noscroll");
                renderPopup();
                }

                function renderPopup() {
                popup.appendChild(menu);
                }

                const links = Array.from(menu.children);

                links.forEach((link) => {
                link.addEventListener("click", closeOnClick);
                });

                function closeOnClick() {
                popup.classList.remove("open");
                hamb.classList.remove("active");
                body.classList.remove("noscroll");
                }

            </xmp>
        </div>
    </section>
@endsection
@extends('layouts/footer')
@section('footer')
@endsection
</body>
</html>
