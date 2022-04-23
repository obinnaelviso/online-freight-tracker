@extends('layouts.dash.main')
@section('title')
{{ $invoice->id ? 'Edit Invoice' : 'Create New Invoice' }}
@endsection
@section('content')
<div class="container-fluid page__container">
    @include('layouts.partials.alert')
    <div class="row no-gutters">
        <div class="col-12 card-form__body card-body">
            <form method="post" action="{{ $invoice->id ? route('invoices.edit', $invoice->id) : route('invoices.create') }}">
                @csrf @if($invoice->id) @method('put') @endif
                <div class="form-row">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="invoice-no">Invoice Number #</label>
                        <input type="text"
                                class="form-control"
                                id="invoice-no"
                                name="invoice_no"
                                placeholder="012345678901"
                                value="{{ old('invoice_no', $invoice->invoice_no) }}">
                        @error('invoice_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="email">Receiver Email Address</label>
                        <input type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="johndoe@example.com"
                                value="{{ old('email', $invoice->email) }}">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="origin">Origin</label>
                        <input type="text"
                                class="form-control"
                                id="origin"
                                name="origin"
                                value="{{ old('origin', $invoice->origin) }}">
                        @error('origin')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="destination">Destination</label>
                        <input type="text"
                                class="form-control"
                                id="destination"
                                name="destination"
                                value="{{ old('destination', $invoice->destination) }}">
                        @error('destination')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="sender_details">Sender Details</label>
                        <textarea class="form-control"
                                    id="sender_details"
                                    name="sender_details"
                                    rows="4">{{ old('sender_details', $invoice->sender_details) }}</textarea>
                        @error('sender_details')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="receiver_details">Receiver Details</label>
                        <textarea class="form-control"
                                id="receiver_details"
                                name="receiver_details"
                                rows="4">{{ old('receiver_details', $invoice->receiver_details) }}</textarea>
                        @error('receiver_details')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="products">Products</label>
                        <textarea class="form-control"
                                    id="products"
                                    name="products"
                                    rows="4">{{ old('products', $invoice->products) }}</textarea>
                        @error('products')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="pickup_date">Pickup Date</label>
                        <input type="text"
                                name="pickup_date"
                                class="form-control"
                                id="pickup_date"
                                value="{{ old('pickup_date', $invoice->pickup_date) }}">
                        @error('pickup_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="pickup_time">Pickup Time</label>
                        <input type="text"
                                name="pickup_time"
                                class="form-control"
                                id="pickup_time"
                                value="{{ old('pickup_time', $invoice->pickup_time) }}">
                        @error('pickup_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="booking_mode">Booking Mode</label>
                        <input type="text"
                                name="booking_mode"
                                class="form-control"
                                id="booking_mode"
                                value="{{ old('booking_mode', $invoice->booking_mode) }}">
                        @error('booking_mode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="shipment_type">Shipment Type</label>
                        <input type="text"
                                name="shipment_type"
                                class="form-control"
                                id="shipment_type"
                                value="{{ old('shipment_type', $invoice->shipment_type) }}">
                        @error('shipment_type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="number"
                                name="quantity"
                                class="form-control"
                                id="quantity"
                                value="{{ old('quantity', $invoice->quantity) }}">
                        @error('quantity')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="weight">Weight</label>
                        <input type="text"
                                name="weight"
                                class="form-control"
                                id="weight"
                                value="{{ old('weight', $invoice->weight) }}">
                        @error('weight')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="value">Value</label>
                        <input type="text"
                                name="value"
                                class="form-control"
                                id="value"
                                value="{{ old('value', $invoice->value) }}">
                        @error('value')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="delivery_cost">Delivery Cost</label>
                        <input type="text"
                                name="delivery_cost"
                                class="form-control"
                                id="delivery_cost"
                                value="{{ old('delivery_cost', $invoice->delivery_cost) }}">
                        @error('delivery_cost')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="payment_mode">Payment Mode</label>
                        <input type="text"
                                name="payment_mode"
                                class="form-control"
                                id="payment_mode"
                                value="{{ old('payment_mode', $invoice->payment_mode) }}">
                        @error('payment_mode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="insurance">Insurance</label>
                        <input type="text"
                                name="insurance"
                                class="form-control"
                                id="insurance"
                                value="{{ old('insurance', $invoice->insurance) }}">
                        @error('insurance')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 mb-3">
                        <label for="exp_delivery_date">Expiry Delivery Date</label>
                        <input type="text"
                                name="exp_delivery_date"
                                class="form-control"
                                id="exp_delivery_date"
                                value="{{ old('exp_delivery_date', $invoice->exp_delivery_date) }}">
                        @error('exp_delivery_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="progress">Progress Bar</label>
                        <input type="number"
                                name="progress"
                                class="form-control"
                                min="0"
                                max="100"
                                placeholder="0-100"
                                id="progress"
                                value="{{ old('progress', $invoice->progress) }}">
                        @error('progress')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 mb-3">
                        <label for="comments">Comments</label>
                        <textarea class="form-control"
                                    id="comments"
                                    name="comments"
                                    rows="4">{{ old('comments', $invoice->comments) }}</textarea>
                        @error('comments')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <button class="btn btn-primary"
                        type="submit">{{ ($invoice->id) ? 'Edit' : 'Create' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script src="{{ asset('assets/vendor/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/list.js') }}"></script>
@endpush
