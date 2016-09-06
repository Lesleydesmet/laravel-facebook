<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
    	return view('.home.login');
    }

    public function sh()
    {
    	//return view('home.signup');
    }

     public function view()
    {
    	return view('map.view');
    }
}
