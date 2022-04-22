@extends('layouts.home.main')
@section('title', 'Track your package at '.config('app.name'))
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="{{ asset('img/breadcrumb/banner_bg.png') }}" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Batch Number #{{ $invoice->invoice_no }}</h1>
            <p class="f_400 w_color f_size_16 l_height26">Details of this package below.</p>
        </div>
    </div>
</section>
<section class="pricing_area_two sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body" style="background-image: url('/img/logo2-t-10.png'); background-size: contain; background-position: center center; background-repeat: repeat;">
                        <div class="progress" style="height: 50px; border-radius: 30px">
                            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="{{ $invoice->progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $invoice->progress }}%"></div>
                          </div><br>
                        <div id="invoice">
                            <table class="table table-bordered mb-3">
                                <thead>
                                <tr>
                                    <th scope="col">Sender's Details</th>
                                    <th scope="col">Receiver's Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{!! nl2br(e($invoice->sender_details)) !!}</td>
                                    <td>{!! nl2br(e($invoice->receiver_details)) !!}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th colspan="4">Shipment Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Origin:</strong><br>
                                            {{ $invoice->origin }}
                                        </td>
                                        <td>
                                            <strong>Destination:</strong><br>
                                            {{ $invoice->destination }}
                                        </td>
                                        <td>
                                            <strong>Pickup Date:</strong><br>
                                            {{ $invoice->pickup_date }}
                                        </td>
                                        <td>
                                            <strong>Pickup Time:</strong><br>
                                            {{ $invoice->pickup_time }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Mode of booking:</strong><br>
                                            {{ $invoice->booking_mode }}
                                        </td>
                                        <td>
                                            <strong>Type of shipment:</strong><br>
                                            {{ $invoice->shipment_type }}
                                        </td>
                                        <td>
                                            <strong>Products:</strong><br>
                                            {!! nl2br(e($invoice->products)) !!}
                                        </td>
                                        <td>
                                            <strong>Quantity:</strong><br>
                                            {!! nl2br(e($invoice->quantity)) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Total weight(kg):</strong><br>
                                            {{ $invoice->weight }}
                                        </td>
                                        <td>
                                            <strong>Total value:</strong><br>
                                            {{ $invoice->value }}
                                        </td>
                                        <td>
                                            <strong>Invoice number:</strong><br>
                                            {{ $invoice->invoice_no }}
                                        </td>
                                        <td>
                                            <strong>Delivery cost:</strong><br>
                                            {{ $invoice->delivery_cost }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Insurance:</strong><br>
                                            {{ $invoice->insurance }}
                                        </td>
                                        <td>
                                            <strong>Payment mode:</strong><br>
                                            {{ $invoice->payment_mode }}
                                        </td>
                                        <td>
                                            <strong>Exp delivery date:</strong><br>
                                            {{ $invoice->exp_delivery_date }}
                                        </td>
                                        <td>
                                            <strong>Last update:</strong><br>
                                            {{ $invoice->exp_delivery_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <strong>Comments:</strong><br>
                                            {!! nl2br(e($invoice->comments)) !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6>Travel History</h6>
                            <table class="table table-bordered mb-3">
                                <thead>
                                <tr>
                                    <th scope="col">Date & Time</th>
                                    <th scope="col">Status of item</th>
                                    <th scope="col">Location</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($histories as $history)
                                        <tr @if($loop->iteration == 1) style="font-weight: bold;" @endif>
                                            <td>{{ $history->date_time->format('l\\, jS \\of F Y\\, h:i A') }}</td>
                                            <td>{{ $history->status }}</td>
                                            <td>{{ $history->location }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body w-100" style="background-image: url('/img/logo2-t-10.png'); background-size: contain; background-position: center center; background-repeat: repeat;">
                        <img src="{{ asset('/img/qr-code.png') }}" class="img-fluid"/>
                        <a href="/" class="btn btn-primary"> Track another package <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
