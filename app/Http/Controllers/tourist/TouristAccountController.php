<?php

namespace App\Http\Controllers\tourist;

use App\Http\Controllers\Controller;
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
}
