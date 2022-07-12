<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML</title>
</head>
<body>
@extends('layouts/header')
@section('header')
@endsection
<div class="main">
{{--    <section class="healthcare">--}}
{{--        <div class="healthcare__container">--}}
{{--            <div class="healthcare__block-text block-text block-text_center">--}}
{{--                <h2 class="block-text__title"><span>Healthcare</span> at your Fingertips.</h2>--}}
{{--                <div class="block-text__text block-text__text_mw">Bringing premium healthcare features to your--}}
{{--                    fingertips. User friendly mobile platform to bring healthcare to your fingertips. Signup and be--}}
{{--                    a part of the new health culture.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="healthcare__items">--}}
{{--                @foreach($posts ?? '' as $post)--}}
{{--                <div class="healthcare__colum item-healthcare_1">--}}
{{--                    <div class="healthcare__item item-healthcare">--}}
{{--                        <div class="item-healthcare__icon">--}}
{{--                            <img src={{($post->img)}} alt="healthcare">--}}
{{--                        </div>--}}
{{--                        <div class="item-healthcare__title">{!! ($post->title)!!}</div>--}}
{{--                        <div class="item-healthcare__text">    {!!$post->text!!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</div>
@extends('layouts/footer')
@section('footer')
@endsection
</body>
</html>
