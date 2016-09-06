<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Session;
use App\Image;
use \DB;

class ApplyController extends Controller
{

	public function image()
	{
		$images=DB::table('images')->orderBy('id', 'desc')->get();
		return view ('form.image',compact('images'));
	}
   public function upload(Request $request) {
	  // getting all of the post data
	  $files = array('image' => Input::file('image'));

	  //setting up rules

	  //for single upload

	  $rules = array('image' => 'required|mimes:jpg,png,jpeg',); //mimes:jpeg,bmp,png and for max size max:10000
	  // doing the validation, passing post data, rules and the messages
	  $validator = Validator::make($file, $rules);
	  if ($validator->fails()) {
		    // send back to the page with the input data and errors
		    return Redirect::to('upload')->withInput()->withErrors($validator);
	  	}
	  else {
		    // checking file is valid.
		    if (Input::file('image')->isValid()) {
			      $destinationPath = 'uploads'; // upload path
			      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
			      $fileName = rand(1111111111,9999999999).$request->exp.'.'.$extension; // renameing image
			      //Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
			      // sending back with message

			      Input::file('image')->move($destinationPath, $fileName);
			      
			      Session::flash('success', 'Upload successfully');
			      Image::create(['image_location'=>'uploads/'.$fileName,'image_type'=>$request->exp]);
			      return Redirect::to('upload');
		    }
		    else {
			      // sending back with error message.
			      Session::flash('error', 'uploaded file is not valid');
			      return Redirect::to('upload');
		    }
	  	}

	  

	}

	public function multiple_upload(Request $request) {
    	// getting all of the post data
	    $files = Input::file('images');

	    // Making counting of uploaded images
	    $file_count = count($files);
	    // start count how many uploaded
	    $uploadcount = 0;
		    foreach($files as $file) 
		    {
			      $rules = array('file' => 'required|mimes:jpg,jpeg,png'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
			      $validator = Validator::make(array('file'=> $file), $rules);
			      if($validator->passes())
			      {
			        $destinationPath = 'uploads';
			        $filename = $file->getClientOriginalName();
			        $upload_success = $file->move($destinationPath, $filename);
			        Image::create(['image_location'=>'uploads/'.$filename,'image_type'=>$request->exp]);
			        $uploadcount ++;
			      }
		    }
		    if($uploadcount == $file_count){
		      Session::flash('success', 'Upload successfully'); 
		      return Redirect::to('upload');
		    } 
		    else {
		      return Redirect::to('upload')->withInput()->withErrors($validator);
		    }
	    }
}
