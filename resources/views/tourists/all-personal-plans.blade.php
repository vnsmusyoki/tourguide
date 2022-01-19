@extends('tourists.layout')
@section('title', 'All Personal Bookings')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Personal Bookings</h4>
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
                                                <td>{{ $plan->plandestination->destination_name }}</td>
                                                <td>{{ $plan->planaccomodation->accomodation_name }}</td>
                                                <td>{{ $plan->total_days }}</td>
                                                <td>{{ $plan->driver_fee }}</td>
                                                <td>{{ $plan->transaction_code }}</td>
                                                <td>{{ $plan->amount_paid }}</td>
                                                <td>{{ $plan->status }}</td>
                                                <td><a href="{{ url('tourist/delete-plan-trip/'.$plan->id )}}" class="badge badge-danger">Delete</a></td>
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
