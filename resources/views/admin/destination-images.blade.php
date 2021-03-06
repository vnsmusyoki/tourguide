@extends('admin.layout')
@section('title', 'Upload New Destination')
@section('content')
   @livewire('admin.upload-images',['destinationid'=>$destination->id])
    <div class="row match-height">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Destination Details</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ url('admin/store-destination') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Destination Name</label>
                                        <input type="text" class="form-control" name="destination_name"
                                            value="{{ $destination->destination_name }}">
                                        @error('destination_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Destination Category</label>
                                        <select name="destination_category" id="" class="form-control">
                                            <option value="">{{ $destination->destination_category }}</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Destination Price</label>
                                        <input type="number" min="100" class="form-control" name="destination_price"
                                            value="{{ $destination->destination_price }}">

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Location Description</label>
                                        <textarea name="location_address" class="form-control" id="" cols="30"
                                            rows="5">{{ $destination->location_address }}</textarea>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">What it Offers</label>
                                        <textarea name="site_description" class="form-control" id="" cols="30"
                                            rows="10">{{ $destination->site_description }}</textarea>

                                    </div>
                                </div>

                            </div>
                            <div class="imgGallery">
                                <!-- image preview -->
                            </div>
                            <a href="{{ url('admin/edit-destination/'.$destination->id) }}" class="btn btn-success">Edit Destination</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
