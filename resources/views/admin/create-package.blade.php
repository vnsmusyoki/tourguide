@extends('admin.layout')
@section('title', 'Upload New Package')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload New Package</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ url('admin/store-package') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Package Name</label>
                                        <input type="text" class="form-control" name="package_name"
                                            value="{{ old('package_name') }}">
                                        @error('package_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Destination Name</label>
                                        <select name="destination_category" id="" class="form-control">
                                            <option value="">Select category</option>
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}">
                                                    {{ $destination->destination_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('destination_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Accomodation Name</label>
                                        <select name="accomodation_id" id="" class="form-control">
                                            <option value="">Select Accomodation</option>
                                            @foreach ($accomodations as $accomodation)
                                                <option value="{{ $accomodation->id }}">
                                                    {{ $accomodation->accomodation_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('accomodation_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Package Price</label>
                                        <input type="number" min="100" class="form-control" name="package_price"
                                            value="{{ old('package_price') }}">
                                        @error('package_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Package Days</label>
                                        <input type="number" min="1" class="form-control" name="package_days"
                                            value="{{ old('package_days') }}">
                                        @error('package_days')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="review">Package Image</label>
                                        <input type="file" class="form-control" id="chooseFile"
                                            placeholder="Upload Product Images" name="picture">
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">What it Offers</label>
                                        <textarea name="site_description" class="form-control" id="" cols="30"
                                            rows="10">{{ old('site_description') }}</textarea>
                                        @error('site_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="imgGallery">
                                <!-- image preview -->
                            </div>
                            <button type="submit" class="btn btn-success">Upload Destination</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
