<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Accomodation;
use App\Models\Destination;
use App\Models\DestinationImage;
use App\Models\PackageBooking;
use App\Models\Tourist;
use App\Models\TouristTripPlan;
use App\Models\TourPackage;
use App\Models\User;
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
        $destinations = Destination::all();
        $accomodations =Accomodation::all();
        $plannedtrips = TouristTripPlan::where('status', 'pending')->get();
        $packages = TourPackage::all();
        $tourists = Tourist::all();
        $plans = TouristTripPlan::where('status', 'pending')->get();
        $packagebookings = PackageBooking::where('status', 'pending')->get();
        return view('admin.dashboard',compact(['destinations', 'accomodations', 'plannedtrips', 'packages','tourists','plans','packagebookings']));
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
    public function destinationreports()
    {
        $destinations = Destination::all();
        return view('admin.destination-report', compact('destinations'));
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
            'accomodation_name' => 'required|string',
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
    public function accomodationreports()
    {
        $accomodations = Accomodation::all();
        return view('admin.accomodation-report', compact('accomodations'));
    }
    public function editaccomodation($accid)
    {
        $accomodation = Accomodation::findOrFail($accid);
        $destinations = Destination::all();
        return view('admin.edit-accomodation', compact('accomodation', 'destinations'));
    }
    public function updateaccomodation(Request $request, $accid)
    {
        $this->validate($request, [
            'accomodation_name' => 'required|string',
            'destination_name' => 'required',
            'accomodation_price' => 'required|numeric',
            'site_description' => 'required|string',
            'picture' => 'nullable|image| mimes:png,jpeg, jpg|max:10080'
        ]);

        $destination = Accomodation::findOrFail($accid);
        $destination->destination_id  = $request->input('destination_name');
        $destination->accomodation_name  = $request->input('accomodation_name');
        $destination->description  = $request->input('site_description');
        $destination->price_per_night  = $request->input('accomodation_price');
        if ($request->input('picture')) {
            Storage::delete('public/accomodation/' . $destination->picture);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('accomodations', $filenameToStore, 'public');
            $destination->picture = $filenameToStore;
        }

        $destination->save();
        Toastr::success('Accomodation Details uploaded sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-accomodations');
    }
    public function deleteaccomodation($accid)
    {
        $destination = Accomodation::findOrFail($accid);
        Storage::delete('public/accomodations/' . $destination->picture);
        $destination->delete();
        Toastr::error('Accomodation Details deleted sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-accomodations');
    }
    public function alltourists()
    {
        $tourists = Tourist::all();
        return view('admin.all-tourists', compact('tourists'));
    }
    public function touristsreport()
    {
        $tourists = Tourist::all();
        return view('admin.tourists-report', compact('tourists'));
    }

    public function alltourplans()
    {
        $plans = TouristTripPlan::all();
        return view('admin.all-tour-plans', compact('plans'));
    }
    public function acceptplantrip($tripid)
    {
        $trip = TouristTripPlan::findOrFail($tripid);
        $trip->status = "confirmed";
        $trip->save();
        Toastr::success('Trip has been confirmed and payment accepted', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function rejectplantrip($tripid)
    {
        $trip = TouristTripPlan::findOrFail($tripid);
        $trip->status = "denied";
        $trip->save();
        Toastr::error('Trip has been denied and payment rejected', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function createpackage()
    {
        $accomodations = Accomodation::all();
        $destinations = Destination::all();
        return view('admin.create-package', compact(['accomodations', 'destinations']));
    }
    public function storepackage(Request $request)
    {
        $this->validate($request, [
            'package_name' => 'required|string',
            'destination_category' => 'required',
            'accomodation_id' => 'required',
            'package_price' => 'required|numeric',
            'package_days' => 'required|numeric',
            'site_description' => 'required|string',
            'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);
        $package = new TourPackage;
        $package->package_name  = $request->input('package_name');
        $package->destination_id  = $request->input('destination_category');
        $package->accomodation_id  = $request->input('accomodation_id');
        $package->duration  = $request->input('package_days');
        $package->amount_paid  = $request->input('package_price');
        $package->description  = $request->input('site_description');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('packages', $filenameToStore, 'public');
        $package->picture = $filenameToStore;
        $package->save();
        Toastr::success('Package Details uploaded sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-packages');
    }
    public function allpackages()
    {
        $packages = TourPackage::all();
        return view('admin.tour-packages', compact('packages'));
    }
    public function edittourpackage($packageid)
    {
        $accomodations = Accomodation::all();
        $destinations = Destination::all();
        $package = TourPackage::findOrFail($packageid);
        return view('admin.edit-tour-package', compact('package', 'accomodations', 'destinations'));
    }
    public function updatetourpackage(Request $request, $packageid)
    {
        $this->validate($request, [
            'package_name' => 'required|string',
            'destination_category' => 'required',
            'accomodation_id' => 'required',
            'package_price' => 'required|numeric',
            'package_days' => 'required|numeric',
            'site_description' => 'required|string',
            'picture' => 'nullable|image| mimes:png,jpeg, jpg|max:10080'
        ]);
        $package = TourPackage::findOrFail($packageid);
        $package->package_name  = $request->input('package_name');
        $package->destination_id  = $request->input('destination_category');
        $package->accomodation_id  = $request->input('accomodation_id');
        $package->duration  = $request->input('package_days');
        $package->amount_paid  = $request->input('package_price');
        $package->description  = $request->input('site_description');
        if ($request->hasFile('picture')) {
            Storage::delete('public/packages/' . $package->picture);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('packages', $filenameToStore, 'public');
            $package->picture = $filenameToStore;
        }

        $package->save();
        Toastr::success('Package Details updated sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-packages');
    }
    public function deletepackage($packageid)
    {
        $package = TourPackage::findOrFail($packageid);
        Storage::delete('public/packages/' . $package->picture);
        $package->delete();
        Toastr::error('Package Details deleted sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-packages');
    }
    public function allpayments()
    {
        $trippayments = TouristTripPlan::where('status', 'confirmed')->get();
        $bookings = PackageBooking::where('status', 'confirmed')->get();
        return view('admin.all-payments', compact('trippayments', 'bookings'));
    }
    public function allpendingpackagebookings()
    {
        $bookings = PackageBooking::where('status', 'pending')->get();
        return view('admin.all-pending-package-bookings', compact('bookings'));
    }
    public function allpackagebookings()
    {
        $bookings = PackageBooking::all();
        return view('admin.all-package-bookings', compact('bookings'));
    }
    public function acceptpackagebooking($packageid)
    {
        $booking = PackageBooking::findOrFail($packageid);
        $booking->status = "confirmed";
        $booking->save();
        Toastr::success('Package booking confirmed sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function rejectpackagebooking($packageid)
    {
        $booking = PackageBooking::findOrFail($packageid);
        $booking->status = "denied";
        $booking->save();
        Toastr::error('Package booking rejected sucessfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function accountsecurity()
    {
        return view('admin.account-security');
    }
    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Toastr::success('password has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateemail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
        ]);

        $user = User::find(auth()->user()->id);
        $user->email = $request->input('email');
        $user->save();

        Toastr::success('Email Address has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateavatar(Request $request)
    {
        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $user = User::find(auth()->user()->id);
        Storage::delete('public/officers/' . $user->picture);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('officers', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();



        Toastr::success('profile Picture has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
