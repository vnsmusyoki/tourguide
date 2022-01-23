@extends('admin.layout')
@section('title', 'All Personal Bookings')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Accomodation Reviews</h4>
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
                                        <th>Tourist</th>
                                        <th>Email Address</th>
                                        <th>Accomodation</th>
                                        <th>Review</th>
                                        <th>Date Submited</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($reviews->count() >= 1)
                                        @foreach ($reviews as $key => $review)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $review->reviewuser->name }}</td>
                                                <td>{{ $review->reviewuser->email }}</td>
                                                <td>{{ $review->reviewacc->accomodation_name }}</td>
                                                <td>{{ $review->description }}</td>
                                                <td>{{ $review->created_at->format('l,d/m/Y') }}</td>
                                                 
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
