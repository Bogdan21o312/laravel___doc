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
    <section class="healthcare">
        <div class="healthcare__container">
            <div class="healthcare__block-text block-text block-text_center">
                <h2 class="block-text__title"><span>Healthcare</span> at your Fingertips.</h2>
                <div class="block-text__text block-text__text_mw">Bringing premium healthcare features to your
                    fingertips. User friendly mobile platform to bring healthcare to your fingertips. Signup and be
                    a part of the new health culture.
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layouts/footer')
@section('footer')
@endsection
</body>
</html>
