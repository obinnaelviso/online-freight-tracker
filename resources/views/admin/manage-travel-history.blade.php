@extends('layouts.dash.main')
@section('title', 'Manage Travel History for #'.$invoice->invoice_no)
@section('content')
<div class="container-fluid page__container">
    @include('layouts.partials.alert')
    <div class="row no-gutters">
        <div class="col-12 card-form__body card-body">
            <form id="historyForm" onsubmit="event.preventDefault();">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <input type="text"
                                class="form-control"
                                name="date_time"
                                placeholder="Date & Time">
                        <div class="invalid-feedback d-none"></div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 mb-3">
                        <input type="text"
                                class="form-control"
                                name="status"
                                placeholder="Status Of Item">
                        <div class="invalid-feedback d-none"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <input type="text"
                                class="form-control"
                                name="location"
                                placeholder="Location">
                        <div class="invalid-feedback d-none"></div>
                    </div>
                </div>
                <button class="btn btn-primary"
                        type="submit" id="addTravel">Add Travel History</button>
            </form>
        </div>
    </div>
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body" id="histories">
                @if($histories->count())
                    <div class="table-responsive border-bottom"
                        data-toggle="lists"
                        data-lists-values='["js-lists-values-history"]'>

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
                                    <th>Date & Time</th>
                                    <th>Status Of Item</th>
                                    <th>Location</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="list"
                                id="staff02">
                                @foreach($histories as $history)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $history->date_time }}
                                        </td>

                                        <td>{{ $history->status }}</td>
                                        <td><span class="js-lists-values-history">{{ $history->location }}</span></td>
                                        <td>
                                            <button class="btn btn-danger delete-history" data-history-no="{{ $history->id }}" onclick="deleteHistory(this);">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-5">
                        No Travel Histories Created Available.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@push('head')
<link type="text/css"
      href="{{ asset('vendors/datetimepicker/jquery.datetimepicker.min.css') }}"
      rel="stylesheet">
@endpush
@push('js')
<script src="{{ asset('assets/vendor/list.min.js') }}"></script>
<script src="{{ asset('assets/js/list.js') }}"></script>
<script src="{{ asset('vendors/momentjs/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('vendors/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

    $('#addTravel').on('click', function() {
        var inDatetime = $('input[name="date_time"]').val(),
            inStatus = $('input[name="status"]').val(),
            inLocation = $('input[name="location"]').val();

        $('#addTravel').attr('disabled', true);

        axios.post("{{ route('invoices.histories', $invoice->id) }}", {
            _token: '{{ csrf_token() }}',
            date_time: inDatetime,
            status: inStatus,
            location: inLocation
        })
        .then(function (response) {
            console.log(response.data.message);
            $("#histories").load(location.href + " #histories>");
            $('#addTravel').attr('disabled', false);
            $('input[name="status"]').val(''),
            $('input[name="location"]').val('');
            // $('input[name="date_time"]').focus()
        })
        .catch(function (error) {
            if (error.response) {
                $('#addTravel').attr('disabled', false);
                alert(error.response.data.message);
            } else {
                alert(error.message);
            }
        });
    });

    function deleteHistory(element) {
        var historyNo = $(element).data('history-no');
        if (confirm('Are you sure you want to delete this travel history?')) {
            axios.delete("/manage-invoices/histories/"+historyNo)
                .then(function (response) {
                $("#histories").load(location.href + " #histories>");
            })
            .catch(function (error) {
                if (error.response) {
                    alert(error.response.data.message);
                } else {
                    alert(error.message);
                }
            });
        }
    };

    $(function() {
        jQuery('input[name="date_time"]').datetimepicker();
    })
</script>
@endpush
