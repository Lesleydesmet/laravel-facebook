<div class="form">
	 	{!! Form::open(array('url'=>'/create','method'=>'post')) !!}
	 		<div class="row">
		        <div class="input-field col s6">
		          <input id="username" type="text" class="validate" name="username">
		          <label for="username">Username</label>
		        </div>
		        <div class="input-field col s6">
		          <input id="fullname" type="text" class="validate" name="fullname">
		          <label for="fullname">Full Name</label>
		        </div>
		    </div>

		    <div class="row">
      		
		        <div class="input-field col s6">
		          <input id="password" type="password" class="validate" name="password">
		          <label for="password">Password</label>
		        </div>

		       <div class="input-field col s6">
		          <input id="confirm" type="password" class="validate" name="password_confirmation">
		          <label for="confirm">Confirm Password</label>
		        </div>
		    </div>

		    	<div class="input-field  col s12">
		    		
		    		<button class="waves-effect waves-light btn" type="submit">
		    			Submit
		    	</button>
		    	<div class="error alert" style="color:#ef5350;">
		    		@if(count($errors)> 0)
						<ul>
							@foreach($errors->all() as $err)
								<li>{{$err}}</li>
							@endforeach
						</ul>
					@endif
		    	</div>
		    </div>
      		
	 	{!! Form::close() !!}
	</div>