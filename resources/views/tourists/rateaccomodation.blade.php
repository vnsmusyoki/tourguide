@extends('tourists.layout')
@section('title', 'All Accomodations')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><span class="badge badge-success">{{ $accomodations->count() }}</span>
                        Accomodations Found</h4>
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
                            <img src="{{ asset('storage/accomodations/' . $accomodation->bookacc->picture) }}"
                                class="img-fluid" alt="">
                            <br>
                            <strong>
                                <h6>Price per Night</h6>
                            </strong>
                            <p><i>Kshs. {{ $accomodation->amount_paid }}</i></p>
                            <br>
                            <strong>
                                <h6>Days Spent</h6>
                            </strong>
                            <p><i>{{ $accomodation->total_days }}</i></p>
                            <br>

                            <form action="{{ url('tourist/send-accomodation-rating/') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Rate Now</label>
                                    <input type="hidden" name="accid" value="{{ $accomodation->accomodation_id }}">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"
                                        required></textarea>
                                </div>
                                <button class="btn btn-block btn-success" type="submit">Submit Rating Now</button>
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
