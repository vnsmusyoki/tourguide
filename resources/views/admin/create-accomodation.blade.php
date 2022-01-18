@extends('admin.layout')
@section('title', 'Upload New Accomodation')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload New Accomodation</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ url('admin/store-accomodation') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Accomodation Name</label>
                                        <input type="text" class="form-control" name="accomodation_name"
                                            value="{{ old('accomodation_name') }}">
                                        @error('accomodation_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Nearest Destination</label>
                                        <select name="destination_name" id="" class="form-control">
                                            <option value="">Select destination</option>
                                       @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->destination_name }}</option>
                                       @endforeach
                                        </select>
                                        @error('destination_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Accomodation Price/Night</label>
                                        <input type="number" min="100" class="form-control" name="accomodation_price"
                                            value="{{ old('accomodation_price') }}">
                                        @error('accomodation_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="review">Accomodation Images</label>
                                        <input type="file" class="form-control" id="chooseFile"
                                            placeholder="Upload Accomodation Images" name="picture">
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
                            <button type="submit" class="btn btn-success">Upload Accomodation</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
