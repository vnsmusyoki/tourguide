@extends('tourists.layout')
@section('title', 'All Accomodations')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Accomodation Found</h4>
                </div>

            </div>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="card cardcheck" style="max-height:60vh;overflow-y:scroll;">
            <div class="card-header">
                <h5 class="card-title">{{ $accomodationcheck->accomodation_name }}</h5>
                <hr>
                <img src="{{ asset('storage/accomodations/' . $accomodationcheck->picture) }}" class="img-fluid"
                    alt="">
                <br>
                <strong>
                    <h6>Price per Night</h6>
                </strong>
                <p><i>Kshs. {{ $accomodationcheck->price_per_night }}</i></p>
                <br>
                <strong>
                    <h6>Nearest Destination</h6>
                </strong>
                <p><i>{{ $accomodationcheck->accdestination->destination_name }}</i></p>
                <br>
                <strong>
                    <h6>What To See</h6>
                </strong>
                <p><i>{{ $accomodationcheck->description }}</i></p>
                <br>
                <hr>
                <form action="{{ url('tourist/upload-totalbookingpayment/' . $accomodationcheck->id) }}"
                    method="POST">
                    <h5>Pay Kshs. {{ $totalpayment }} and provide the transaction code in the field below</h5>
                    @csrf
                    <div class="form-group">
                        <label for="">Price Per Night</label>
                        <input type="text" value="{{ $accomodationcheck->price_per_night }}" readonly
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Days Booking</label>
                        <input type="text" value="{{ $days }}" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Total Driver Fee</label>
                        <input type="text" value="{{ $totaldriver }}" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Total Driver Accomodation</label>
                        <input type="text" value="{{ $totalprice }}" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Entrace Fee to {{ $destinationcheck->destination_name }}</label>
                        <input type="text" value="{{ $destinationcheck->destination_price }}" readonly
                            class="form-control">
                    </div>
                    <input type="hidden" name="days" value="{{ $days }}">
                    <input type="hidden" name="destinationid" value="{{ $destinationcheck->id }}">
                    <input type="hidden" name="accomodationid" value="{{ $accomodationcheck->id }}">
                    <input type="hidden" name="driverfee" value="{{ $totaldriver }}">
                    <div class="form-group">
                        <label for="">Transaction Code</label>
                        <input type="text" name="transaction_code" class="form-control"
                            style="font-size:16px;text-transform:uppercase;" required>
                        <small class="form-text text-muted">Should be 10 characters</small>
                    </div>
                    <button class="btn btn-block btn-success" type="submit">Book Accomodation + Destination Now</button>
                </form>

            </div>
        </div>
    </div>

    </div>
@endsection
