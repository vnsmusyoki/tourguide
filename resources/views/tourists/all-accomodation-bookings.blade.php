@extends('tourists.layout')
@section('title', 'Finish Account Setup')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Accomodation Bookings</h4>
                    <hr>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Accomodation</th>
                                        <th>Price Per Night</th>
                                        <th>Days Spending</th>
                                        <th>Amount Paid</th>
                                        <th>Transaction Code</th>
                                        <th>Date Paid</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($bookings->count() >= 1)
                                        @foreach ($bookings as$key=>$booking)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $booking->bookacc->accomodation_name }}</td>
                                                <td>Kshs. {{ $booking->bookacc->price_per_night }}</td>
                                                <td>{{ $booking->total_days }} days</td>
                                                <td>Kshs. {{ $booking->amount_paid }}</td>
                                                <td>{{ $booking->transaction_code}}</td>
                                                <td>{{ $booking->created_at->format('l, d/m/Y')}}</td>
                                                <td>{{ $booking->status }} </td>
                                                <td><a href="{{ url('tourist/delete-payment/'.$booking->id) }}" class="badge badge-primary">Delete</a></td>
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
