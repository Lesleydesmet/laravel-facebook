<div class="row centered-form">
	
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 vehicle">
		<div class="panel panel-default hovarable">
    		<div class="panel-heading">
		    		<h3 class="panel-title">Hire Vehicle</h3>
		 	</div>
 			<div class="panel-body z-depth-1">
	    		{!! Form::open(array('url'=>'/')) !!}

	    			<div class="form-group input-field">
	    		
	    				{!! Form::text('search',old('search'), ['placeholder'=>'Type Of Vehicle']) !!}
	    			</div>

	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-4">
	    					<div class="form-group">
	    						{!! Form::text('from',old('from'),['placeholder'=>'From']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-4">
	    					<div class="form-group">
	    						 {!! Form::text('to',old('to'), ['placeholder'=>'To']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-2">
	    					<div class="form-group">
	    						 {!! Form::time('time',old('time'), ['placeholder'=>'Time']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-2">
	    					<div class="form-group">
	    						 {!! Form::date('date',old('date'), ['placeholder'=>'']) !!}
	    					</div>
	    				</div>
	    			</div>

					<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						{!! Form::email('email',old('email'),['placeholder'=>'Email Address']) !!}
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						 {!! Form::text('contact',old('contact'), ['placeholder'=>'Contact Number']) !!}
	    					</div>
	    				</div>
	    			</div>
	    			
	    		
	    			<Button type="submit" class="btn btn-info btn-block">Search</Button>
	    		
	    		{!! Form::close() !!}
    		</div>
		</div>
	</div>
 </div>