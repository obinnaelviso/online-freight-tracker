@extends('layouts.dash.main')
@section('title', 'Manage Invoices')
@section('content')
<div class="container-fluid page__container">
    @include('layouts.partials.alert')
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">
                @if($invoices->count())
                    <div class="table-responsive border-bottom"
                        data-toggle="lists"
                        data-lists-values='["js-lists-values-invoice-no"]'>

                        <div class="search-form search-form--light m-3">
                            <input type="text"
                                class="form-control search"
                                placeholder="Search">
                            <button class="btn"
                                    type="button"><i class="material-icons">search</i></button>
                        </div>

                        <table class="table mb-0 thead-border-top-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Invoice No.</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Delivery Cost</th>
                                    <th>Pickup Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="list"
                                id="staff02">
                                @foreach($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <span class="js-lists-values-invoice-no">{{ $invoice->invoice_no }}</span>
                                        </td>

                                        <td>{{ $invoice->origin }}</td>
                                        <td>{{ $invoice->destination }}</td>
                                        <td>{{ $invoice->delivery_cost }}</td>
                                        <td>{{ $invoice->pickup_date }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('invoices.edit', $invoice->id) }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('invoices.histories', $invoice->id) }}" class="btn btn-primary">Travel History</a>
                                            <a href="{{ route('invoices.preview', $invoice->id) }}" class="btn btn-secondary" target="_blank">Preview</a>
                                            <a href="{{ route('invoices.export', $invoice->id) }}" class="btn btn-success">Download</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-5">
                        No Invoices Created. Click this button to
                        <a href="{{ route('invoices.create') }}" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Create New Invoice</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('assets/vendor/list.min.js') }}"></script>
<script src="{{ asset('assets/js/list.js') }}"></script>
@endpush
