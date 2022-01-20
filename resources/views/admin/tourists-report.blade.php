@extends('admin.layout')
@section('title', 'All Tourists')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Tourists</h4>
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
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>ID Number</th>
                                    <th>Member Since</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tourists as $key => $tourist)
                                    <tr>
                                        <td class="text-truncate">{{ ++$key }}</td>
                                        <td class="text-truncate"><a href="#">
                                                @if ($tourist->touristuser->picture == null)
                                                    <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                        alt="" style="height:60px;width:60px;border-radius:50%;">
                                            </a>
                                        @else
                                            <img src="{{ asset('storage/profiles/' . $tourist->touristuser->picture) }}"
                                                alt="" style="height:60px;width:120px;"></a>
                                @endif
                                </td>
                                <td class="text-truncate">{{ $tourist->touristuser->name }}</td>
                                <td class="text-truncate"><span
                                        class="badge badge-success">{{ $tourist->touristuser->email }}</span>
                                </td>
                                <td class="text-truncate">{{ $tourist->phone_number }}</td>
                                <td class="text-truncate">{{ $tourist->id_number }}</td>
                                <td class="text-truncate">{{ $tourist->created_at->format('l, d/m/Y') }}</td>
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
