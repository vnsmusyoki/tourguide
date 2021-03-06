@extends('admin.layout')
@section('title', 'All Packages')
@section('content')
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
                                    @if ($packages->count() >= 1)
                                        @foreach ($packages as $key => $package)
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
