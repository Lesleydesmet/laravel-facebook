@extends('layouts.main')

@section('content')

<div class="about-section">
   	<div class="text-content">
     	<div class="span7 offset1">
	        @if(Session::has('success'))
	          <div class="alert-box success">
	          	<h2>{!! Session::get('success') !!}</h2>
	          </div>
	        @endif
        	<div class="secure">Upload form</div>
        	{!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
	        	<div class="control-group">
	        		<div class="input-field col s12">
					    <select name="exp">
					      <option value="" disabled selected>Type Of Experience</option>
					      <option value="hotel">Hotel</option>
					      <option value="tour">Tour</option>
					      <option value="resturent">Resturent</option>
					    </select>					   
 					 </div>
	          		<div class="controls">
	          			{{-- For multiple image --}}
	          			{!! Form::file('images[]',array('multiple'=>true,'onchange'=>'loadFile(event)','id'=>'image')) !!}
	          			 {{-- <img id="output"/> 
 --}}

	          			{{-- For single image --}}
	          			{{--{!! Form::file('images',null !!}--}}

		  				<p class="errors">{!!$errors->first('image')!!}</p>
						@if(Session::has('error'))
						<p class="errors">{!! Session::get('error') !!}</p>
						@endif
	       			</div>
	        	</div>
	        	<div id="success"> </div>
      			{!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      		{!! Form::close() !!}
      	</div>
  	</div>
</div>
<div class="view-images">
	@foreach($images as $image)
	  	<img src="{{asset($image->image_location)}}" alt="" width="300px" height="300px">

	 @endforeach
</div>

<script>

	//for multiple file upload preview
	 var loadFile = function(event) {
	 	var total_files= document.getElementById('image');
	 	console.log(total_files.files.length);
	 	var all=event.target.files;
    	for(var i=0; i < total_files.files.length; i++)
    	{
    		$('#output'+i).remove();
    		var inp=$('.controls').append('<img id="output'+i+'" width="300px" height="300px"/>');
    		output = document.getElementById('output'+i);
    		var name=all[i];
    		output.src = URL.createObjectURL(name);
    		console.log(output);
    	}
    
  };


//single image upload preview
  // var loadFile = function(event) {
  //   var reader = new FileReader();
  //   var fil=0;

  //   reader.onload = function(){
    	
  //   		var inp=$('.controls').append('<img id="output"/>');
  //   		var output = document.getElementById('output');
  //   		 output.src = reader.result;

  //   };
  //   reader.readAsDataURL(event.target.files[0]);
  // };
</script>

	<script>

		//var formData= document.getElementById('upload');
		// var request=new XMLHttpRequest();

		// formData.addEventListener('submit',function(e)
		// {
		// 	e.preventDefault();
		// 	var data=new FormData(formData);

		// 	request.open('post','imageUpload');
		// 	request.send(data);
		// });

	</script>

@endsection