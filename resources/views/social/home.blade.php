@extends('layouts.main')

@section('content')

	
	<div class="profile">
		<ul>
			<li>
				Name: {{ $userData->fullname }}
			</li>
			<li> <img src="{{asset($userData->profile_picture)}}" alt="" width="300px" height="300px"></li>
		</ul>
	</div>


@endsection