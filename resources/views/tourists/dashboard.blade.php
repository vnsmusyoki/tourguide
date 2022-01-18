@extends('tourists.layout')
@section('title', 'Finish Account Setup')
@section('content')
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Finish Accout Setup</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ url('tourist/finish-account') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="number" min="1" class="form-control" name="phone_number"
                                            value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">ID Number</label>
                                        <input type="number" min="1" class="form-control" name="id_number"
                                            value="{{ old('id_number') }}">
                                        @error('id_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="review">Passport</label>
                                        <input type="file" class="form-control" id="chooseFile" placeholder=""
                                            name="picture">
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Home Address</label>
                                        <textarea name="home_address" class="form-control" id="" cols="30"
                                            rows="10">{{ old('home_address') }}</textarea>
                                        @error('home_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                            <div class="imgGallery">
                                <!-- image preview -->
                            </div>
                            <button type="submit" class="btn btn-success">Finish account setup</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
