<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cities = City::all();
        $addresses = Auth::user()->addresses;
        return view('home', compact('cities', 'addresses'));
    }
}
