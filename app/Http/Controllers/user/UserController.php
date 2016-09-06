<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
    	  $this->middleware('auth');
    }

    //index
    public function index()
    {
    	return view('user.index');
    }


}
