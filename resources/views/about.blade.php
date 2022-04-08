@extends('layouts.home.main')
@section('title', 'About')
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="{{ asset('img/breadcrumb/banner_bg.png') }}" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">About us</h1>
        </div>
    </div>
</section>
<section class="agency_service_area bg_color">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="f_size_30 f_600 t_color3  text-capitalize">About {{ config('app.name') }}</h2>
                <p class="f_400 f_size_16">
                    {{ config('app.name') }} is a distribution firm moving goods and services for business purposes both locally and around the globe. We started just as a transportation venture, with a 18 passenger van and one staff, transporting people, good and services to enhance our customers daily business activities. Since then, we have evolved to becoming a force to be reckoned with in the industry from employing more skilled labour to implementing sophisticated equipments to carrying out efficient services for our clients. We have not only grew in size but also have the whole planet earth within our reach. Time and efficiency is our motto, that is why our ultimate goal is fufilling our customers' needs using our cutting edge technology thereby surpassing our competitors to making us one of the top shipping companies in {{ config('app.location') }}.
                </p>
                <p class="f_400 f_size_16">
                    {{ config('app.name') }} is a distribution firm moving goods and services for business purposes both locally and around the globe. We started just as a transportation venture, with a 18 passenger van and one staff, transporting people, good and services to enhance our customers daily business activities. Since then, we have evolved to becoming a force to be reckoned with in the industry from employing more skilled labour to implementing sophisticated equipments to carrying out efficient services for our clients. We have not only grew in size but also have the whole planet earth within our reach. Time and efficiency is our motto, that is why our ultimate goal is fufilling our customers' needs using our cutting edge technology thereby surpassing our competitors to making us one of the top shipping companies in {{ config('app.location') }}.
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="logo">
            </div>
        </div>
    </div>
</section>
@endsection