@extends('admin.layout')
@section('title', 'Admin Dashboard')
@section('content')
    <!-- Stats -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-primary bg-darken-2">
                            <i class="icon-camera font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-primary white media-body">
                            <h5>Destinations</h5>
                            <h5 class="text-bold-400 mb-0"><i class="feather icon-plus"></i> {{ $destinations->count() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-danger bg-darken-2">
                            <i class="icon-user font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-danger white media-body">
                            <h5>Accomodations</h5>
                            <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i>
                                {{ $accomodations->count() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-warning bg-darken-2">
                            <i class="icon-basket-loaded font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-warning white media-body">
                            <h5>Tourists</h5>
                            <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-down"></i>
                                {{ $tourists->count() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-success bg-darken-2">
                            <i class="icon-wallet font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-success white media-body">
                            <h5>Packages</h5>
                            <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> {{ $packages->count() }}
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
                            <table class="table table-bordered display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Picture</th>
                                        <th>Tourist</th>
                                        <th>Destination</th>
                                        <th>Accomodation</th>
                                        <th>Days</th>
                                        <th>Driver Fee</th>
                                        <th>Transaction Code</th>
                                        <th>Amount Paid</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($plans->count() >= 1)
                                        @foreach ($plans as $key => $plan)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td class="text-truncate"><a href="#">
                                                        @if ($plan->planuser->picture == null)
                                                            <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                                alt="" style="height:60px;width:60px;border-radius:50%;">
                                                    </a>
                                                @else
                                                    <img src="{{ asset('storage/profiles/' . $plan->planuser->picture) }}"
                                                        alt="" style="height:60px;width:120px;"></a>
                                        @endif
                                        </td>
                                        <td>{{ $plan->planuser->name }}</td>
                                        <td>{{ $plan->plandestination->destination_name }}</td>
                                        <td>{{ $plan->planaccomodation->accomodation_name }}</td>
                                        <td>{{ $plan->total_days }}</td>
                                        <td>{{ $plan->driver_fee }}</td>
                                        <td>{{ $plan->transaction_code }}</td>
                                        <td>{{ $plan->amount_paid }}</td>
                                        <td>{{ $plan->status }}</td>
                                        <td><a href="{{ url('admin/accept-plan-trip/' . $plan->id) }}"
                                                class="badge badge-success">Confirm</a>/
                                                <a href="{{ url('admin/reject-plan-trip/' . $plan->id) }}"
                                                    class="badge badge-danger">Reject</a>
                                            </td>
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
                    <h4 class="card-title">All Tourist Packages  Bookings</h4>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($packagebookings->count() >= 1)
                                        @foreach ($packagebookings as $key => $package)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $package->package_name }}</td>
                                                <td class="text-truncate">
                                                    <img src="{{ asset('storage/packages/' . $package->picture) }}" alt=""
                                                        style="height:60px;width:120px;">
                                                </td>
                                                <td>{{ $package->tourpackagedest->destination_name }}</td>
                                                <td>{{ $package->tourpackageacc->accomodation_name }}</td>
                                                <td>Kshs. {{ $package->amount_paid }}</td>
                                                <td>{{ $package->duration }}</td>
                                                <td>{{ $package->description }}</td>
                                                <td><a href="{{ url('admin/edit-tour-package/' . $package->id) }}"
                                                        class="badge badge-success">Edit</a>/
                                                    <a href="{{ url('admin/delete-tour-package/' . $package->id) }}"
                                                        class="badge badge-danger">Delete</a>
                                                </td>
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
