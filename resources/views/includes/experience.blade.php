<div class="row centered-form">
	<div class="booking col s4 offset-s8">
			{{-- Booking Detail step 2 --}}

    		{!! Form::open() !!}
    				<div class="col-xs-12 col-sm-12 col-md-12">
    					<div class="form-group">
    						{!! Form::textarea('booking_detail',old('booking_detail'),['class'=>'panel', 'placeholder'=>'Booking Detail']) !!}
    					</div>
    				</div>

    		{!! Form::close() !!}
	</div>
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 expirence">
		<div class="panel panel-default hovarable">
    		<div class="panel-heading">
		    		<h3 class="panel-title">Expirence</h3>
		 	</div>
 			<div class="panel-body z-depth-1">
	    		{!! Form::open(array('url'=>'/')) !!}
	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix glyphicon glyphicon-user"></i>
	                			{!! Form::text('firstname',old('firstname'),[ 'placeholder'=>'First Name']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix  glyphicon glyphicon-user"></i>
	    						{!! Form::text('lastname',old('lastname'), ['placeholder'=>'lastname']) !!}
	    					</div>
	    				</div>
	    			</div>

	    			<div class="form-group input-field">
	    				<i class="material-icons prefix  glyphicon glyphicon-phone"></i>
	    				{!! Form::text('contact',old('contact'), ['placeholder'=>'Contact Number']) !!}
	    			</div>

	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix  glyphicon ti-home"></i>
	    						{!! Form::text('address',old('address'),['placeholder'=>'Address']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix  glyphicon glyphicon-envelope"></i>
	    						 {!! Form::email('email',old('email'),['placeholder'=>'Email Address']) !!}
	    					</div>
	    				</div>
	    			</div>
	    			<hr>
					{{--  Expirence   --}}
	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix  glyphicon glyphicon-plus"></i>
	                			{!! Form::text('type_of_experience',old('type_of_experience'), ['placeholder'=>'Type Of Experience']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix  glyphicon ti-home"></i>
	    						{!! Form::text('location_name',old('location_name'), ['placeholder'=> 'Location Name']) !!}
	    					</div>
	    				</div>
	    			</div>

	    			<div class="form-group input-field">
	    				<i class="material-icons prefix  glyphicon glyphicon-calendar"></i>
	    				{!! Form::date('date',old('date'), ['placeholder'=>'Date']) !!}
	    			</div>

	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix glyphicon glyphicon-user"></i>
	    						{!! Form::number('no_of_people',old('no_of_people'),['placeholder'=>'Number Of People']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6 input-field">
	    					<div class="form-group">
	    						<i class="material-icons prefix glyphicon glyphicon-time"></i>
	    						 {!! Form::time('time',old('time'), ['placeholder'=>'Prefer Time']) !!}
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-12 col-md-12 input-field">
	    					<div class="form-group">
								<i class="material-icons prefix glyphicon glyphicon-plus"></i>
	    						{!! Form::text('additional_requrement',old('additional_requrement'),['placeholder'=>'AdditionL Requirement']) !!}
	    					</div>
	    			</div>
	    			
	    			{{--  Reciver  --}}
					
					<div class="col-xs-12 col-sm-12 col-md-12 input-field">
    					<div class="form-group">
    						<i class="material-icons prefix glyphicon glyphicon-user"></i>
    						{!! Form::text('receiver_fullname',old('receiver_fullname'),['placeholder'=>'Receiver FullName']) !!}
    					</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-12 col-md-12 input-field">
    					<div class="form-group">
    						<i class="material-icons prefix  glyphicon ti-home"></i>
    						{!! Form::text('receiver_address',old('receiver_address'), ['placeholder'=>'Receiver Address']) !!}
    					</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-12 col-md-12 input-field">
    					<div class="form-group">
    						<i class="material-icons prefix  glyphicon glyphicon-envelope"></i>
    						{!! Form::email('receiver_email',old('receiver_email'), ['placeholder'=>'Receiver Email']) !!}
    					</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-12 col-md-12 input-field">
    					<div class="form-group">
    						<i class="material-icons prefix  glyphicon glyphicon-phone"></i>
    						{!! Form::text('receiver_number',old('receiver_number'),['placeholder'=>'Receiver Number']) !!}
    					</div>
	    			</div>

	    			<Button type="submit" value="Register" class="btn btn-info btn-block">Book Your Event</Button>
	    		
	    		{!! Form::close() !!}
    		</div>
		</div>
	</div>
 </div>