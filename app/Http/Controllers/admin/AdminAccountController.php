<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Accomodation;
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
    public function editdestination($destinationid)
    {
        $destination = Destination::findOrFail($destinationid);
        return view('admin.edit-destination', compact('destination'));
    }
    public function updatedestination(Request $request, $destinationid)
    {
        $this->validate($request, [
            'destination_name' => 'required|string|exists:destinations',
            'destination_category' => 'required',
            'destination_price' => 'required|numeric',
            'location_address' => 'required|string',
            'site_description' => 'required|string',
            'picture' => 'nullable|image| mimes:png,jpeg, jpg|max:10080'
        ]);
        $destination = Destination::findOrFail($destinationid);
        $destination->destination_name  = $request->input('destination_name');
        $destination->destination_category  = $request->input('destination_category');
        $destination->destination_price  = $request->input('destination_price');
        $destination->site_description  = $request->input('site_description');
        $destination->location_address  = $request->input('location_address');
        if ($request->hasFile('picture')) {
            Storage::delete('public/destinations/' . $destination->picture);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('destinations', $filenameToStore, 'public');
            $destination->picture = $filenameToStore;
        }

        $destination->save();
        Toastr::success('Destination Details updated sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-destinations');
    }
    public function alldestinations()
    {
        $destinations = Destination::all();
        return view('admin.all-destination', compact('destinations'));
    }
    public function deletedestination($destinationid)
    {
        $destination = Destination::findOrFail($destinationid);
        Storage::delete('public/destinations/' . $destination->picture);
        $destination->delete();
        Toastr::error('Destination Details deleted sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-destinations');
    }
    public function creteaccomodation()
    {
        $destinations = Destination::all();
        return view('admin.create-accomodation', compact('destinations'));
    }
    public function storeaccomodation(Request $request)
    {
        $this->validate($request, [
            'accomodation_name' => 'required|string|exists:destinations',
            'destination_name' => 'required',
            'accomodation_price' => 'required|numeric',
            'site_description' => 'required|string',
            'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);
        $destination = new Accomodation;
        $destination->destination_id  = $request->input('destination_name');
        $destination->accomodation_name  = $request->input('accomodation_name');
        $destination->description  = $request->input('site_description');
        $destination->price_per_night  = $request->input('accomodation_price');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('accomodations', $filenameToStore, 'public');
        $destination->picture = $filenameToStore;
        $destination->save();
        Toastr::success('Accomodation Details uploaded sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-accomodations');
    }
    public function allaccomodations()
    {
        $accomodations = Accomodation::all();
        return view('admin.all-accomodations', compact('accomodations'));
    }
}
