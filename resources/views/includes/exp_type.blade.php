<div class="row centered-form">
	
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 expirence">
		<div class="panel panel-default hovarable">
    		<div class="panel-heading">
		    		<h3 class="panel-title">Experience Search</h3>
		 	</div>
 			<div class="panel-body z-depth-1">
	    		{!! Form::open(array('url'=>'/')) !!}

	    			<div class="form-group input-field">
	    		
	    				{!! Form::text('search',old('search'), ['placeholder'=>'Location']) !!}
	    			</div>

	    			
					<div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Type Of Experience</option>
					      <option value="all">All</option>
					      <option value="adventure">Adventure</option>
					      <option value="wildlife">WildLife</option>
					      <option value="spa">Spa</option>
					      <option value="entertainment">Entertainment</option>
					      <option value="event and festival">Event And Festival</option>
					      <option value="kids">Kids</option>
					      <option value="training">Training</option>
					      <option value="food and drink">Food And Drink</option>
					    </select>					   
 					 </div>
	    		
	    			<Button type="submit" class="btn btn-info btn-block">Search</Button>
	    		
	    		{!! Form::close() !!}
    		</div>
		</div>
	</div>
 </div>