<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.homepage');
    }
    public function aboutus()
    {
        return view('pages.about-us');
    }
    public function contactus()
    {
        return view('pages.contact-us');
    }
    public function createaccount(Request $request)
    {
        $this->validate($request, [
            'full_names' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = new User;
        $user->name  = $request->input('full_names');
        $user->email  = $request->input('email');
        $user->password  = bcrypt($request->input('password'));
        $user->save();
        $user->attachRole('tourist');
        return redirect()->route('login');
    }
}
