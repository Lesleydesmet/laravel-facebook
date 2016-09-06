<div class="login" style="clear:both;">
      <section class="login-form hoverable z-depth-1">
        {!! Form::open(array('url'=>'/log','method'=>'post')) !!}
          <input type="text" name="username" placeholder="Username" class="form-control input-lg" value="{{Request::old('username') }}" />
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" value="{{Request::old('password')}}"/>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div class="create">
            <a href="/create">Create account</a> or <a href="#">reset password</a>
          </div>
          <div class="error">
          	@if(count($errors)>0)
          		<ul>
					@foreach($errors->all() as $er)
						<li>{{$er}}</li>
					@endforeach
				</ul>
          	@endif
          </div>
        {!! Form::close() !!}
      </section>  
    </div>