<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Article;


class AdminController extends Controller
{

	public function __construct()
	{
		 $this->middleware('auth');
         $this->middleware('auth.admin');
       

	}
    public function index()
    {
    	$username=Auth::user()->username;
    	
    	 $article= Article::where('username',$username)->get();
    	return view('admin.index',compact('article'));
    }

    public function create()
    {
        dd('hh');
        return view('admin.add');
    }

    public function store(Request $request)
    {
        dd($request->title);
    }
}
