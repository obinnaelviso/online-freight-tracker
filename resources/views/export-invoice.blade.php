<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <title>Shipment #{{ $invoice->invoice_no }} - {{ config('app.name') }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        div {
            font-family: monospace;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <img src="{{ asset('img/logo.png') }}" width='400px' height="130px" class="text-center">
        <img src="{{ asset('img/qr-code.png') }}" style="margin-left: 500px" width='170px' height="170px" class="text-center">
        {{-- <a href="/export/{{ $invoice->id }}" class="btn btn-primary">Download</a> --}}
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12">
            </div>
            <div class="col-md-12">
                <h3>BATCH NUMBER #{{ $invoice->invoice_no }}</h3>
                <div id="invoice" style="margin-top: 30px; margin-bottom: 30px">
                    <table class="table table-bordered mb-3">
                        <thead>
                        <tr>
                            <th scope="col">Sender's Details</th>
                            <th scope="col">Receiver's Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span style="font-family: monospace">{!! nl2br(e($invoice->sender_details)) !!}<span></td>
                            <td>{!! nl2br(e($invoice->receiver_details)) !!}</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
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
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">Copyright &copy; {{ date('Y') }} {{ config('app.name') }}</div>
        </div>
    </div>
</body>

</html>
