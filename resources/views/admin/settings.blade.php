@extends('layouts.dash.main')
@section('title', 'Settings')
@section('content')
<div class="container page__container">
    <div class="card">
        <div class="card-body">
            @include('layouts.partials.alert')
            <form action="{{ route('settings.update') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-4">Phone Number</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone', $settings['phone']) }}" placeholder="Phone Number">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">Office Address</div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="office_address" value="{{ old('office_address', $settings['office_address']) }}" placeholder="Office Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
