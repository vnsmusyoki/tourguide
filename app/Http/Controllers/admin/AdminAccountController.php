<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\DestinationImage;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.dashboard');
    }
    public function createdestination()
    {
        return view('admin.create-destination');
    }
    public function storedestination(Request $request)
    {
        $this->validate($request, [
            'destination_name' => 'required|string|unique:destinations',
            'destination_category' => 'required',
            'destination_price' => 'required|numeric',
            'location_address' => 'required|string',
            'site_description' => 'required|string',
            'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);
        $destination = new Destination;
        $destination->destination_name  = $request->input('destination_name');
        $destination->destination_category  = $request->input('destination_category');
        $destination->destination_price  = $request->input('destination_price');
        $destination->site_description  = $request->input('site_description');
        $destination->location_address  = $request->input('location_address');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('destinations', $filenameToStore, 'public');
        $destination->picture = $filenameToStore;
        $destination->save();
        Toastr::success('New Destination has been added.You can upload multiple images here.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/destination-images/' . $destination->id);
    }
    public function destinationimages($destinationid)
    {
        $destination = Destination::findOrFail($destinationid);
        return view('admin.destination-images', compact('destination'));
    }
    public function deleteimage($image)
    {
        $imagecheck = DestinationImage::findOrfail($image);
        Storage::delete('public/destinations/' . $imagecheck->picture);
        $imagecheck->delete();

        Toastr::success('Image has been deleted.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
