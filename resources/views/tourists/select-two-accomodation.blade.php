@extends('tourists.layout')
@section('title', 'All Accomodations')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Destination Entrance fee is <span class="badge badge-success">Kshs.
                            {{ $destination->destination_price }}</span>
                    </h4>
                </div>

            </div>
        </div>

    </div>
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><span class="badge badge-success">{{ $accomodations->count() }}</span>
                        Accomodations Around {{ $destination->destination_name }}</h4>
                </div>

            </div>
        </div>

    </div>
    <div class="row match-height">
        @if ($accomodations->count() >= 1)

            @foreach ($accomodations as $accomodation)
                <div class="col-lg-6">
                    <div class="card cardcheck" style="max-height:60vh;overflow-y:scroll;">
                        <div class="card-header">
                            <h5 class="card-title">{{ $accomodation->accomodation_name }}</h5>
                            <hr>
                            <img src="{{ asset('storage/accomodations/' . $accomodation->picture) }}"
                                class="img-fluid" alt="">
                            <br>
                            <strong>
                                <h6>Price per Night</h6>
                            </strong>
                            <p><i>Kshs. {{ $accomodation->price_per_night }}</i></p>
                            <br>
                            <strong>
                                <h6>Nearest Destination</h6>
                            </strong>
                            <p><i>{{ $accomodation->accdestination->destination_name }}</i></p>
                            <br>
                            <strong>
                                <h6>What To See</h6>
                            </strong>
                            <p><i>{{ $accomodation->description }}</i></p>
                            <br>
                            <hr>
                            <form action="{{ url('tourist/book-selected-accomodation-days/' . $accomodation->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">No. of Days/Nights</label>
                                    <input type="number" min="1" name="days_spent" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Need a Driver?</label>
                                    <select name="driver_needed" id="" class="form-control">
                                        <option value="">Select catgeory</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes(You will be charged extra 500 per day for the driver)
                                        </option>
                                    </select>
                                </div>
                                <input type="hidden" name="destination_name" value="{{ $destination->id }}">
                                <button class="btn btn-block btn-success" type="submit">Book Destination + Accomodation
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">No Data about Destinations Found</h4>

                        </div>

                    </div>
                </div>

            </div>
        @endif
    </div>
@endsection
