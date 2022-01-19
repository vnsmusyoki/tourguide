@extends('admin.layout')
@section('title', 'All Package Bookings')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Package Bookings</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Package Name</th>
                                    <th>Booked By</th>
                                    <th>Price</th>
                                    <th>Accomodation</th>
                                    <th>Destination</th>
                                    <th>transaction Code</th>
                                    <th>Status</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $key => $booking)
                                    <tr>
                                        <td class="text-truncate">{{ ++$key }}</td>
                                        <td class="text-truncate"><a href="#"><img
                                                    src="{{ asset('storage/packages/' . $booking->bookingpackage->picture) }}"
                                                    alt="" style="height:60px;width:120px;"></a></td>
                                        <td class="text-truncate">{{ $booking->bookingpackage->package_name }}</td>
                                        <td class="text-truncate"><span
                                                class="badge badge-success">{{ $booking->bookinguser->name }}</span>
                                        </td>
                                        <td class="text-truncate">Kshs. {{ $booking->bookingpackage->amount_paid }}</td>
                                        <td class="text-truncate">{{ $booking->bookingacc->accomodation_name }}</td>
                                        <td class="text-truncate">{{ $booking->bookingdest->destination_name }}</td>
                                        <td class="text-truncate">{{ $booking->transaction_code }}</td>
                                        <td class="text-truncate">{{ $booking->status }}</td>

                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
