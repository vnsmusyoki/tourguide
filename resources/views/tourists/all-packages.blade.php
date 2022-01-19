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
                            <img src="{{ asset('storage/packages/' . $package->picture) }}" class="img-fluid" alt="">
                            <br>
                            <strong>
                                <h6>Entrance Fee</h6>
                            </strong>
                            <p><i>Kshs. {{ $package->amount_paid }}</i></p>
                            <br>
                            <strong>
                                <h6>Destination</h6>
                            </strong>
                            <p><i> {{ $package->tourpackagedest->destination_name }}</i></p>
                            <br>
                            <strong>
                                <h6>Accomodation</h6>
                            </strong>
                            <p><i> {{ $package->tourpackageacc->accomodation_name }}</i></p>
                            <br>
                            <strong>
                                <h6>Duration</h6>
                            </strong>
                            <p><i> {{ $package->duration }}</i></p>
                            <br>
                            <strong>
                                <h6>What To See</h6>
                            </strong>
                            <p><i>{{ $package->description }}</i></p>
                            <br>
                            <hr>
                            <form action="{{ url('tourist/book-package-trip') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Transaction Code</label>
                                    <input type="text" name="transaction_code" class="form-control" required>
                                    @error('transaction_code')
                                        <span class="text-danger">{{ $transaction_de }}</span>
                                    @enderror
                                </div>
                                <input type="hidden" name="destinationid"
                                    value="{{ $package->destination_id }}">
                                <input type="hidden" name="accomodationid"
                                    value="{{ $package->accomodation_id }}">
                                <input type="hidden" name="packageid" value="{{ $package->id }}">
                                <button class="btn btn-block btn-success" type="submit">Book Package Now</button>
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
                            <h4 class="card-title">No Packages on Offer</h4>

                        </div>

                    </div>
                </div>

            </div>
        @endif
    </div>
@endsection
