@extends('tourists.layout')
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
                        <a href="{{ url('tourist/review-accomodation') }}" class="btn btn-primary">Review Now</a>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Accomodation</th>
                                        <th>Review</th>
                                        <th>Date Submited</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($reviews->count() >= 1)
                                        @foreach ($reviews as $key => $review)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $review->reviewacc->accomodation_name }}</td>
                                                <td>{{ $review->description }}</td>
                                                <td>{{ $review->created_at->format('l,d/m/Y') }}</td>
                                                <td><a href="{{ url('tourist/delete-review-accomodation/'.$review->id )}}" class="badge badge-danger">Delete</a></td>
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
