<?php

namespace App\Http\Controllers\tourist;

use App\Http\Controllers\Controller;
use App\Models\Accomodation;
use App\Models\BookAccomodation;
use App\Models\Destination;
use App\Models\PackageBooking;
use App\Models\Tourist;
use App\Models\TouristTripPlan;
use App\Models\TourPackage;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class TouristAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tourist = Tourist::where('user_id', auth()->user()->id)->get();
        if ($tourist->count() == 0) {
            return redirect('tourist/complete-account');
        } else {
            $plannedtrips = TouristTripPlan::where('user_id', auth()->user()->id)->get();
            $bookedpackages = PackageBooking::where('user_id', auth()->user()->id)->get();

            return view('tourists.dashboard', compact('plannedtrips', 'bookedpackages'));
        }
    }
    public function completeprofile()
    {
        return view('tourists.complete-account');
    }
    public function finishaccount(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required|digits:10|unique:tourists',
            'id_number' => 'required|digits:8|unique:tourists',
            'home_address' => 'required|string',
            'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);
        $touristcheck = new Tourist;
        $touristcheck->phone_number  = $request->input('phone_number');
        $touristcheck->id_number  = $request->input('id_number');
        $touristcheck->user_id  = auth()->user()->id;
        $touristcheck->home_place  = $request->input('home_address');
        $touristcheck->save();

        $user = User::where('id', auth()->user()->id)->get()->first();
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('profiles', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();


        Toastr::success('Account setup is now complete', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('tourist/dashboard');
    }
    public function alldestinations()
    {
        $destinations = Destination::all();
        return view('tourists.all-destinations', compact('destinations'));
    }
    public function allaccomodations()
    {
        $accomodations = Accomodation::all();
        return view('tourists.all-accomodations', compact('accomodations'));
    }
    public function bookaccomodation($bookid)
    {
        $checkbboking = BookAccomodation::where(['user_id' => auth()->user()->id, 'status' => 'active', 'accomodation_id' => $bookid])->orWhere(['user_id' => auth()->user()->id, 'status' => 'waiting', 'accomodation_id' => $bookid])->get();

        if ($checkbboking->count() >= 1) {
            return redirect('tourist/all-accomodation-bookings');
        } else {
            $recordnew = new BookAccomodation;
        }
    }
    public function bookingaccomodation(Request $request, $bookid)
    {

        $accomodation = Accomodation::findOrFail($bookid);
        $days = $request->input('days_spent');
        $totalprice = $days * $accomodation->price_per_night;
        return view('tourists.accomodation-booking-payment', compact(['accomodation', 'totalprice', 'days']));
    }
    public function accomodationbookings()
    {
        $bookings = BookAccomodation::where('user_id', auth()->user()->id)->get();
        return view('tourists.all-accomodation-bookings', compact('bookings'));
    }
    public function uploadaccomodationpayments(Request $request, $bookid)
    {
        $this->validate($request, [
            'transaction_code' => 'required|string|min:10|max:10|unique:book_accomodations',
        ]);

        $checkbboking = BookAccomodation::where(['user_id' => auth()->user()->id, 'status' => 'active', 'accomodation_id' => $bookid])->orWhere(['user_id' => auth()->user()->id, 'status' => 'waiting', 'accomodation_id' => $bookid])->get();

        if ($checkbboking->count() >= 1) {
            Toastr::error('You have already placed this booking', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect('tourist/all-accomodation-bookings');
        } else {
            $recordnew = new BookAccomodation;
            $recordnew->user_id = auth()->user()->id;
            $recordnew->accomodation_id = $bookid;
            $recordnew->transaction_code = $request->input('transaction_code');
            $recordnew->total_days = $request->input('days');
            $recordnew->amount_paid = $request->input('amount_paid');
            $recordnew->status = "pending";
            $recordnew->save();
            Toastr::success('Accomodation Boking successful.Wait for your payments to be verified', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect('tourist/all-accomodation-bookings');
        }
    }
    public function allpackages()
    {
        $packages = TourPackage::all();
        return view('tourists.all-packages', compact('packages'));
    }
    public function selectonedestinations()
    {
        $destinations = Destination::all();
        return view('tourists.select-one-destination', compact('destinations'));
    }
    public function selectaccomodation($destinationid)
    {
        $destination = Destination::findOrFail($destinationid);
        $accomodations = Accomodation::where('destination_id', $destinationid)->get();
        return view('tourists.select-two-accomodation', compact('destinationid', 'accomodations', 'destination'));
    }
    public function calculatecost(Request $request, $accomodationid)
    {

        $days = $request->input('days_spent');
        $driverneeded = $request->input('driver_needed');
        $destinationname = $request->input('destination_name');

        return redirect('tourist/planned-trip-payment/' . $destinationname . '/' . $accomodationid . '/' . $days . '/' . $driverneeded);
    }
    public function showpayments($destination, $accomodation, $days, $driver)
    {
        $destinationcheck = Destination::findOrFail($destination);
        $accomodationcheck = Accomodation::findOrFail($accomodation);
        $accprice = $accomodationcheck->price_per_night;
        $totalprice = $days * $accprice;
        $totaldriver = $days * 500;
        $totalfee = $totaldriver + $totalprice;
        $totalpayment = ($destinationcheck->destination_price) + $totalfee;

        return view('tourists.plan-trip-payment', compact(['destination', 'accomodationcheck', 'destinationcheck', 'days', 'driver', 'totalprice', 'totaldriver', 'totalfee', 'totalpayment']));
    }
    public function totalplancost(Request $request, $booking)
    {
        $this->validate($request, [
            'transaction_code' => 'required|string|min:10|max:10|unique:tourist_trip_plans',
        ]);

        $days = $request->input('days');
        $destid = $request->input('destinationid');
        $driverfee = $request->input('driverfee');
        $checkaccprice = Accomodation::where('id', $booking)->get()->first();
        $checkdestprice = Destination::where('id', $destid)->get()->first();

        $totalprice = $driverfee + $checkdestprice->destination_price + ($days * $checkaccprice->price_per_night);
        $trip = new TouristTripPlan;
        $trip->user_id = auth()->user()->id;
        $trip->accomodation_id = $booking;
        $trip->accomodation_fee = $booking;
        $trip->amount_paid = $totalprice;
        $trip->status = "pending";
        $trip->destination_id = $request->input('destinationid');
        $trip->transaction_code = $request->input('transaction_code');
        $trip->total_days = $request->input('days');
        $trip->driver_fee = $request->input('driverfee');
        $trip->save();

        Toastr::success('Your trip has been uploaded. ', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('tourist/all-personal-plans');
    }

    public function personalplans()
    {

        $plans = TouristTripPlan::where('user_id', auth()->user()->id)->get();
        return view('tourists.all-personal-plans', compact('plans'));
    }
    public function deleteplan($planid)
    {
        $plan = TouristTripPlan::findOrFail($planid);
        $plan->delete();
        Toastr::error('Your trip has been deleted. ', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('tourist/all-personal-plans');
    }
    public function packagesbooking()
    {
        // $plans =
    }
    public function bookpackage(Request $request)
    {
        $this->validate($request, [
            'transaction_code' => 'required|string|min:10|max:10|unique:package_bookings',
        ]);

        $destination = $request->input('destinationid');
        $accomodation = $request->input('accomodationid');
        $package = $request->input('packageid');
        $trip = new PackageBooking;
        $trip->user_id = auth()->user()->id;
        $trip->accomodation_id = $accomodation;
        $trip->destination_id = $destination;
        $trip->package_id = $package;
        $trip->status = "pending";
        $trip->transaction_code = $request->input('transaction_code');
        $trip->save();
        Toastr::success('Your package booking has been uploaded. ', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('tourist/dashboard');
    }
    public function accountsecurity()
    {
        return view('tourists.account-security');
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
