<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DocMajorca</title>
</head>
<body>
@extends('layouts/header')
@section('header')
    @include('includes.categories')
    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-header">
{{--                <a href="{{route('getPostsByCategory', $post->category['slug'])}}">{{$post->category['title']}}</a>--}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
{{--                <a href="{{route('getPost', [$post->category['slug'], $post->slug])}}" class="btn btn-primary">Read more</a>--}}
            </div>
        </div>
    @endforeach

{{--    {{$posts->links('vendor.pagination.bootstrap-4')}}--}}
@endsection

<main class="main">

    <section class="get-started">
        <div class="get-started__container">
            <div class="get-started__content">
                <div class="get-started__block block-text">
                    <h1 class="block-text__title block-text__title_blue">Take care of yours family’s <span>health.</span></h1>
                    <div class="block-text__text">All in one destination for COVID-19 health queries.  Consult 10,000+ health workers about your concerns.</div>
                    <a href="" class="block-text__button button">GET STARTED</a>
                </div>
            </div>
            <div class="get-started__img">
                <img src="assets/img/get-started/Frame%201.svg" alt="">
            </div>
            <div class="get-started__video">
                <a href="" class="video-get-started">
                    <div class="video-get-started__icon">
                        <img src="assets/img/get-started/play.svg" alt="Play">
                    </div>
                    <div class="video-get-started__body">
                        <div class="video-get-started__title">Stay safe with GoCorona</div>
                        <div class="video-get-started__text">Watch Video</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="stay-safe">
        <div class="stay-safe__container">
            <div class="stay-safe__media">
                <div class="media-stay-safe">
                    <div class="media-stay-safe__img">
                        <img src="assets/img/stay-safe/Daily%20UI%201.svg" alt="">
                    </div>
                    <div class="media-stay-safe__item media-stay-safe__item_1"></div>
                    <div class="media-stay-safe__item media-stay-safe__item_2"></div>
                    <div class="media-stay-safe__item media-stay-safe__item_3"></div>
                </div>
            </div>
            <div class="stay-safe__content">
                <div class="stay-safe__block block-text">
                    <h2 class="block-text__title">Stay safe with<br>Go<span>Corona.</span></h2>
                    <div class="block-text__text">24x7 Support and user friendly mobile platform to bring healthcare
                        to your fingertips. Signup and be a part of the new health culture.
                    </div>
                    <a href="" class="block-text__button button">Features</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experts">
        <div class="experts__container">
            <div class="experts__statistics statistics-exsperts">
                <div class="statistics-exsperts__body body-statistics-exsperts">

                    <div class="body-statistics-exsperts__item">
                        <div class="body-statistics-exsperts__value">2m</div>
                        <div class="body-statistics-exsperts__text">Users</div>
                    </div>

                    <div class="body-statistics-exsperts__item">
                        <div class="body-statistics-exsperts__value">78</div>
                        <div class="body-statistics-exsperts__text">Countries</div>
                    </div>

                    <div class="body-statistics-exsperts__item">
                        <div class="body-statistics-exsperts__value">10,000+</div>
                        <div class="body-statistics-exsperts__text">Medical experts</div>
                    </div>

                </div>
                <div class="statistics-exsperts__decor statistics-exsperts__decor_1"></div>
                <div class="statistics-exsperts__decor statistics-exsperts__decor_2"></div>
                <div class="statistics-exsperts__decor statistics-exsperts__decor_3"></div>
            </div>
            <div class="experts__body">
                <div class="experts__content">
                    <div class="experts__block-text block-text">
                        <h2 class="block-text__title block-text__title_blue">Stay safe with<br>Go<span>Corona.</span></h2>
                        <div class="block-text__text">24x7 Support and user friendly mobile platform to bring healthcare
                            to your fingertips. Signup and be a part of the new health culture.
                        </div>
                        <a href="" class="block-text__button button">Features</a>
                    </div>
                </div>
                <div class="experts__video">
                    <iframe src="https://www.youtube.com/embed/NKDI-60H-5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="healthcare">
        <div class="healthcare__container">
            <div class="healthcare__block-text block-text block-text_center">
                <h2 class="block-text__title"><span>Healthcare</span> at your Fingertips.</h2>
                <div class="block-text__text block-text__text_mw">Bringing premium healthcare features to your
                    fingertips. User friendly mobile platform to bring healthcare to your fingertips. Signup and be
                    a part of the new health culture.
                </div>
            </div>
            <div class="healthcare__items">

                <div class="healthcare__colum item-healthcare_1">
                    <div class="healthcare__item item-healthcare">
                        <div class="item-healthcare__icon">
                            <img src="assets/img/healthcare/Vector-2.svg" alt="healthcare">
                        </div>
                        <div class="item-healthcare__title">Symptom Checker</div>
                        <div class="item-healthcare__text">Check if you are infected by COVID-19 with our Symptom
                            Checker
                        </div>
                    </div>
                </div>

                <div class="healthcare__colum item-healthcare_2">
                    <div class="healthcare__item item-healthcare">
                        <div class="item-healthcare__icon">
                            <img src="assets/img/healthcare/Vector-3.svg" alt="healthcare">
                        </div>
                        <div class="item-healthcare__title">24x7 Medical support</div>
                        <div class="item-healthcare__text">Consult with 10,000+ health workers about your concerns.
                        </div>
                    </div>
                </div>

                <div class="healthcare__colum item-healthcare_3">
                    <div class="healthcare__item item-healthcare">
                        <div class="item-healthcare__icon">
                            <img src="assets/img/healthcare/Vector-4.svg" alt="healthcare">
                        </div>
                        <div class="item-healthcare__title">Conditions</div>
                        <div class="item-healthcare__text">Bringing premium healthcare features to your fingertips.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


@extends('layouts/footer')
@section('footer')
@endsection
</body>
</html>


