@extends('tourists.layout')
@section('title', 'All Packages')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><span class="badge badge-success">{{ $packages->count() }}</span>
                        Packages Found</h4>
                </div>

            </div>
        </div>

    </div>
    <div class="row match-height">
        @if ($packages->count() >= 1)

            @foreach ($packages as $package)
                <div class="col-lg-6">
                    <div class="card" style="max-height:60vh;overflow-y:scroll;">
                        <div class="card-header">
                            <h5 class="card-title">{{ $package->package_name }}</h5>
                            <hr>
                            <img src="{{ asset('storage/packages/' . $package->picture) }}" class="img-fluid"
                                alt="">
                            <br>
                            <strong>
                                <h6>Entrance Fee</h6>
                            </strong>
                            <p><i>Kshs. {{ $package->package_price }}</i></p>
                            <br>
                            <strong>
                                <h6>Location</h6>
                            </strong>
                            <p><i> {{ $package->location_address }}</i></p>
                            <br>
                            <strong>
                                <h6>What To See</h6>
                            </strong>
                            <p><i>{{ $package->site_description }}</i></p>
                            <br>
                            <a href="{{ url('tourist/accomodations-around/' . $destination->id) }}"
                                class="btn btn-block btn-danger">See Accomodations Around</a>
                        </div>
                    </div>
                </div>


            @endforeach
        @else
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">No Packages on Offer</h4>

                        </div>

                    </div>
                </div>

            </div>
        @endif
    </div>
@endsection
