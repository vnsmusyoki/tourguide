@extends('tourists.layout')
@section('title', 'Dashboard')
@section('content')
    <!-- Stats -->
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-primary bg-darken-2">
                            <i class="icon-camera font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-primary white media-body">
                            <h5>Planned Trips</h5>
                            <h5 class="text-bold-400 mb-0"><i class="feather icon-plus"></i> {{ $plannedtrips->count() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-danger bg-darken-2">
                            <i class="icon-user font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-danger white media-body">
                            <h5>Booking Packages</h5>
                            <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i>
                                {{ $bookedpackages->count() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/ Stats -->

    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Tourist Booking Plans</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="display" id="exampleds">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tourist</th>
                                        <th>Destination</th>
                                        <th>Accomodation</th>
                                        <th>Days</th>
                                        <th>Driver Fee</th>
                                        <th>Transaction Code</th>
                                        <th>Amount Paid</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($plannedtrips->count() >= 1)
                                        @foreach ($plannedtrips as $key => $plan)
                                            <tr>
                                                <td>{{ ++$key }}</td>

                                        <td>{{ $plan->planuser->name }}</td>
                                        <td>{{ $plan->plandestination->destination_name }}</td>
                                        <td>{{ $plan->planaccomodation->accomodation_name }}</td>
                                        <td>{{ $plan->total_days }}</td>
                                        <td>{{ $plan->driver_fee }}</td>
                                        <td>{{ $plan->transaction_code }}</td>
                                        <td>Kshs. {{ $plan->amount_paid }}</td>
                                        <td>{{ $plan->status }}</td>

                                        </tr>
                                    @endforeach
                                @else
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Tourist Packages Bookings</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package Name</th>
                                        <th>Picture</th>
                                        <th>Destination</th>
                                        <th>Accomodation</th>
                                        <th>Total Price</th>
                                        <th>Days</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($bookedpackages->count() >= 1)
                                        @foreach ($bookedpackages as $key => $package)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $package->bookingpackage->package_name }}</td>
                                                <td class="text-truncate">
                                                    <img src="{{ asset('storage/packages/' . $package->bookingpackage->picture) }}"
                                                        alt="" style="height:60px;width:120px;">
                                                </td>
                                                <td>{{ $package->bookingdest->destination_name }}</td>
                                                <td>{{ $package->bookingacc->accomodation_name }}</td>
                                                <td>Kshs. {{ $package->bookingpackage->amount_paid }}</td>
                                                <td>{{ $package->bookingpackage->duration }}</td>
                                                <td>{{ $package->bookingpackage->description }}</td>

                                            </tr>
                                        @endforeach
                                    @else
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
