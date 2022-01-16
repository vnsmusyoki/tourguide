<div>
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Payments</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="" wire:submit.prevent="uploadimages" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label for="">Picture</label>
                                        <input type="file" class="form-control" wire:model="picture">
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-2 pt-2">
                                    <button type="submmit" class="btn btn-success">Upload More</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="table-responsive">
                        <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Date Uploaded</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $key => $image)
                                    <tr>
                                        <td class="text-truncate">{{ ++$key }}</td>
                                        </td>
                                        <td class="text-truncate"><a href="#"><img
                                                    src="{{ asset('storage/destinations/' . $image->picture) }}"
                                                    alt="" style="height:60px;width:120px;"></a></td>
                                        <td class="text-truncate">
                                            {{ $image->created_at->addHours(3)->format('d/m/Y, h:i:s a') }}</td>
                                        </td>
                                        <td class="text-truncate"><a href="{{ url('admin/delete-image/'.$image->id) }}" class="badge badge-danger">Delete</a></td>
                                    </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
