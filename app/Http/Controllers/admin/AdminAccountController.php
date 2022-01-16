<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        ]);
    }
}
