<div class="row centered-form">
	
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 expirence">
		<div class="panel panel-default hovarable">
    		<div class="panel-heading">
		    		<h3 class="panel-title">Hostel Search</h3>
		 	</div>
 			<div class="panel-body z-depth-1">
	    		{!! Form::open(array('url'=>'/')) !!}

	    			<div class="form-group input-field">
	    		
	    				{!! Form::text('search',old('search'), ['placeholder'=>'Location/HostelDistrict/Area']) !!}
	    			</div>

	    			
					<div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Type Of Hostel</option>
					      <option value="all">All</option>
					      <option value="hostel">Hostel</option>
					      <option value="girl hostel">Girls Hostel</option>
					      <option value="boy hostel">Boys Hostel</option>
					      <option value="apartments">Apartments</option>
					      <option value="villas">Villas</option>
					      <option value="paying guest">Paying Guest</option>
					      <option value="House">House</option>
					     
					    </select>
					   
 					 </div>
	    		
	    			<Button type="submit" class="btn btn-info btn-block">Search</Button>
	    		
	    		{!! Form::close() !!}
    		</div>
		</div>
	</div>
 </div>