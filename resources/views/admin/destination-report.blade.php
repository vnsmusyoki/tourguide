@extends('admin.layout')
@section('title', 'All Destinations Reports')
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
                        {{-- <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default"> --}}
                            <table  class="display" id="exampleds">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Destination</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($destinations as $key => $destination)
                                    <tr>
                                        <td class="text-truncate">{{ ++$key }}</td>
                                        <td class="text-truncate"><a href="#"><img
                                                    src="{{ asset('storage/destinations/' . $destination->picture) }}"
                                                    alt="" style="height:60px;width:120px;"></a></td>
                                        <td class="text-truncate">{{ $destination->destination_name }}</td>
                                        <td class="text-truncate"><span
                                                class="badge badge-success">{{ $destination->destination_category }}</span>
                                        </td>
                                        <td class="text-truncate">Kshs. {{ $destination->destination_price }}</td>
                                        <td class="text-truncate">{{ $destination->location_address }}</td>
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
