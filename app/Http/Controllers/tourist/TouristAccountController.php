<?php

namespace App\Http\Controllers\tourist;

use App\Http\Controllers\Controller;
use App\Models\Accomodation;
use App\Models\BookAccomodation;
use App\Models\Destination;
use App\Models\Tourist;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
            return view('tourists.dashboard');
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
}
