@extends('layouts.home.main')
@section('title', 'Track your package at '.config('app.name'))
@section('content')
    <section class="saas_banner_area_two" id="track-order">
        <div class="section_intro">
            <div class="section_container">
                <div class="intro">
                    <div class=" intro_content">
                        <h1 class="f_700 f_size_50 w_color f_p">Track Your Shipment</h1>
                        <p class="w_color f_size_18">Please input the track code of your shipment in the box below to keep a track of your order!</p>
                        <form class="mailchimp" method="post" onsubmit="event.preventDefault();">
                            <div class="input-group subcribes">
                                <input type="text" name="invoice_no" class="form-control invoice-no" placeholder="Your Shipment Track No.">
                                <button class="btn btn_submit f_size_15 f_500 search-btn" type="submit">Track!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img class="shap_img" src="img/home-10/shape.png" alt="">
        <div class="animation_img wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{ asset('img/package-delivery.jpg') }}" alt="">
        </div>
    </section>

    <section class="saas_features_area_two">
        <div class="container">
            <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color">Quick and Fast Delivery</h2>
                <p class="f_400 f_size_16">At {{ config('app.name') }}, we offer you choices that best suits your needs</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/globe.png') }}" alt="">
                        <h4 class="f_size_20 f_p t_color f_500">Air freight</h4>
                        <p class="f_400 f_size_15 mb-0">Express delivery through our cargo craft</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{ asset('img/ship.png') }}" alt="">
                        <h4 class="f_size_20 f_p t_color f_500">Ocean Freight</h4>
                        <p class="f_400 f_size_15 mb-0">Massive cargo through sea</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('img/shipped.png') }}" alt="">
                        <h4 class="f_size_20 f_p t_color f_500">Road Freight</h4>
                        <p class="f_400 f_size_15 mb-0">Door-to-door delivery!</p>
                    </div>
                </div>
            </div>
            <div class="hr mt_100 mb-0"></div>
        </div>
    </section>

    <section class="saas_features_area_two">
        <div class="container">
            <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color">Our Branches</h2>
                <p class="f_400 f_size_16">We have our branches located in these four countries</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/us-flag.png') }}" alt="" class="img-fluid">
                        <h4 class="f_size_20 f_p t_color f_500">United States</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{ asset('img/uk-flag.png') }}" alt="" class="img-fluid">
                        <h4 class="f_size_20 f_p t_color f_500">United Kingdom</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('img/china-flag.png') }}" alt="" class="img-fluid">
                        <h4 class="f_size_20 f_p t_color f_500">China</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('img/germany-flag.jpg') }}" alt="" class="img-fluid">
                        <h4 class="f_size_20 f_p t_color f_500">Germany</h4>
                    </div>
                </div>
            </div>
            <div class="hr mt_100 mb-0"></div>
        </div>
    </section>

    <section class="saas_service_area sec_pad">
        <div class="container">
            <div class="row saas_service_item">
                <div class="col-lg-6">
                    <div class="saas_service_img wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="img/door-to-door.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="saas_service_content pr_100 wow fadeInRight" data-wow-delay="0.7s">
                        <h4 class="f_500 f_p t_color">Smart Delivery</h4>
                        <p class="f_p f_400">You able to track where your orders goes to and how it is handled. You don't miss out on any detail!</p>
                        <a href="/#track-order" class="gr_btn"><span class="text">Track Order</span></a>
                    </div>
                </div>
            </div>
            <div class="row saas_service_item">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="saas_service_content pr_100 wow fadeInRight" data-wow-delay="0.7s">
                        <h4 class="f_500 f_p t_color">Massive Shipment All of Over the Country</h4>
                        <p class="f_p f_400">Our trucks are always on the highway to make sure our customers gets the best experience in all their shipping requests!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="saas_service_img wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="img/trucks.jpeg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row saas_service_item">
                <div class="col-lg-6">
                    <div class="saas_service_img wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="img/air-cargo.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="saas_service_content pr_100 wow fadeInRight" data-wow-delay="0.7s">
                        <h4 class="f_500 f_p t_color">Fast Delivery by Air</h4>
                        <p class="f_p f_400">We offer speed delivery across the continents through our cargo airlines for those who have urgent requests.</p>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse saas_service_item">
                <div class="col-lg-6">
                    <div class="saas_service_img wow fadeInRight" data-wow-delay="0.4s">
                        <img src="img/ship-in-tons.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="saas_service_content pl_100 wow fadeInLeft" data-wow-delay="0.6s">
                        <h4 class="f_500 f_p t_color">We Ship in Tons</h4>
                        <p class="f_p f_400">Are your goods in tons? Then we move through the sea. We ship your bulk goods all around the world!</p>
                        <a href="/#track-order" class="gr_btn"><span class="text">Track Order</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="saas_subscribe_area">
        <div class="container">
            <div class="row saas_action_content wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-8">
                    <h4 class="f_p f_size_30 l_height50 f_400 t_color mb-0">Do you need a help?</h4>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <a href="{{ route('contact-us') }}" class="gr_btn"><span class="text">Contact Us</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $('.search-btn').on('click', function() {
        var invoice_no = $('.invoice-no').val();
        if (invoice_no != null && invoice_no != '') {
            $(this).attr('disabled', true);
            $(this).html(`<i class="fa fa-plus fa-spin"></i> Tracking...`);
            axios.post('/track', {
                invoice_no: invoice_no,
                _token: '{{ csrf_token() }}'
            })
            .then(function (response) {
                window.location.href = "/track/"+response.data.id
                $('.search-btn').attr('disabled', false);
                $('.search-btn').html(`Search`);
            })
            .catch(function (error) {
                if (error.response) {
                    $('.search-btn').attr('disabled', false);
                    $('.search-btn').html(`Search`);
                    alert(error.response.data.message);
                } else {
                    console.log(error.message);
                }
            });
        }
    })
</script>
@endpush
