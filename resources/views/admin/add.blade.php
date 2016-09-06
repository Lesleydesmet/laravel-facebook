@extends('layouts.main')

@section('content')

	<div class="main">
		@include('layouts._adminmenu')
		<div class="input-field col s6">
			{!! Form::open(array('url'=>'admin/create','method'=>'post')) !!}
				{!! Form::text('title',null,['class'=>'validate','id'=>'last_name','required']) !!}
				{!! Form::label('title','Title',['for'=>'last_name']) !!}
				
				

				<div class="row">
			        <div class="input-field col s12">
			        	{!! Form::Textarea('body',null,['id'=>'body','class'=>'materialize-textarea','required']) !!}
			 			{!! Form::label('body','Article Here',['for'=>'body']) !!}
			        
			        </div>
		      </div>
				
				<button class="waves-effect waves-light btn" type="submit">Add Article</button>
			{!! Form::close() !!}

        </div>
		
	</div>

@stop