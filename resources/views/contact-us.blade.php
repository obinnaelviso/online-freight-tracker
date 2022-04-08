@extends('layouts.home.main')
@section('title', 'Contact Us')
@section('content')

<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Contact Us</h1>
            <p class="f_400 w_color f_size_16 l_height26">We would love to hear from you!</p>
        </div>
    </div>
</section>

<section class="contact_info_area sec_pad bg_color">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pr-0">
                <div class="contact_info_item">
                    <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Office Address</h6>
                    <p class="f_400 f_size_15">Port Klang, Malaysia</p>
                </div>
                <div class="contact_info_item">
                    <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Contact Info</h6>
                    <p class="f_400 f_size_15"><span class="f_400 t_color3">Phone:</span> <a href="tel:+13143257488">+1 (314) 325 7488</a></p>
                    <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></p>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                @include('layouts.partials.alert')
                <div class="contact_form">
                    <form action="{{ route('contact-us') }}" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" id="name" name="name" required placeholder="Your Name" value="{{ old('name') }}">
                                    @error('name')<div id="error">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" name="email" id="email" required placeholder="Your Email" value="{{ old('email') }}">
                                    @error('email')<div id="error">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <input type="text" id="subject" name="subject" required placeholder="Subject" value="{{ old('subject') }}">
                                    @error('subject')<div id="error">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <textarea name="message" id="message" cols="30" rows="10" style="line-height: 20px" required placeholder="Enter Your Message . . .">{{ old('message') }}</textarea>
                                    @error('message')<div id="error">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn_three">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection