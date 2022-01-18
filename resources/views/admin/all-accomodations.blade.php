@extends('admin.layout')
@section('title', 'All Destinations')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Destinations</h4>
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
                                    <th>Destination</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($accomodations as $key => $accomodation)
                                    <tr>
                                        <td class="text-truncate">{{ ++$key }}</td>
                                        <td class="text-truncate"><a href="#"><img
                                                    src="{{ asset('storage/accomodations/' . $accomodation->picture) }}"
                                                    alt="" style="height:60px;width:120px;"></a></td>
                                        <td class="text-truncate">{{ $accomodation->accomodation_name }}</td>
                                        <td class="text-truncate"><span
                                                class="badge badge-success">{{ $accomodation->accomodation_category }}</span>
                                        </td>
                                        <td class="text-truncate">Kshs. {{ $accomodation->accomodation_price }}</td>
                                        <td class="text-truncate">{{ $accomodation->location_address }}</td>
                                        <td class="text-truncate"><a
                                                href="{{ url('admin/edit-accomodation/' . $accomodation->id) }}">Edit</a>
                                        </td>
                                        <td class="text-truncate"><a
                                                href="{{ url('admin/delete-accomodation/' . $accomodation->id) }}">Delete</a>
                                        </td>
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
