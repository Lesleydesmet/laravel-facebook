@extends('layouts.main')

@section('content')

	<div class="main">
		@include('layouts._adminmenu')
		<div class="input-field col s6">
			{!! Form::model($article,array(route('admin.article.edit',['id'=>$article->id]),'method'=>'put','class'=>'article-edit')) !!}
				{!! Form::text('title',old('title'),['class'=>'validate','id'=>'last_name','required']) !!}
				{!! Form::label('title','Title',['for'=>'last_name']) !!}
				
				

				<div class="row">
			        <div class="input-field col s12">
			        	{!! Form::Textarea('body',old('body'),['id'=>'body','class'=>'materialize-textarea','required']) !!}
			 			{!! Form::label('body','Article Here',['for'=>'body']) !!}
			        
			        </div>
		      </div>
				
				<button class="waves-effect waves-light btn-large" style="float:left; margin:0 20px" type="submit">Update Article</button>

			{!! Form::close() !!}

			{!! Form::open(array(route('admin.article.edit',['id'=>$article->id]),'method'=>'delete')) !!}

				<button class="waves-effect waves-light btn-large" type="submit">Delete</button>

			{!! Form::close() !!}

        </div>
		
	</div>

@stop