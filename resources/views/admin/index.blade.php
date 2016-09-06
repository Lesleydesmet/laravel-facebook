@extends('layouts.main')

@section('content')

	<div class="main">
		
		@include('layouts._adminmenu')

			<div class="article">
				{{-- <h2> Your Article</h2>	 --}}

				{{--{!! Form::open() !!}
					{!! Form::label('number','number') !!}
					{!!Form::number('number') !!}
					{!!Form::text('search',null,['placeholder'=>'Search By Name']) !!}
			
				{!! Form::close() !!}--}}


	{{-- 			<div class="data-table">
					<table id="example" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Position</th>
				                <th>Office</th>
				                <th>Age</th>
				                <th>Start date</th>
				                <th>Salary</th>
            				</tr>
        				</thead>
						<tfoot>
				            <tr>
				                <th>Name</th>
				                <th>Position</th>
				                <th>Office</th>
				                <th>Age</th>
				                <th>Start date</th>
				                <th>Salary</th>
				            </tr>
        				</tfoot>
        				<tbody>
            				<tr>
				                <td>kapil</td>
				                <td>System Architect</td>
				                <td>Edinburgh</td>
				                <td>61</td>
				                <td>2011/04/25</td>
				                <td>$320,800</td>
            				</tr>
            			</tbody>
            		</table>
				</div>	 --}}
		
			
				
				<div id="users">
					<input class="search" placeholder="Search Your Article" />
					
					<ul class="collection with-header list">
						@if(count($article)>0)
							@foreach($article as $articles)
								<li><h3 class="collection-header title">{{$articles->title}}</h3>
								<p class="collection-item description">{!! nl2br(e($articles->body)) !!}<a href="{{route('admin.article.edit',['id'=>$articles->id])}}"> Edit Article</a></p> </li>
								{{-- nl2br is for making new line to </br> --}}
							@endforeach
						@else
							<h2>Sorry No Article Available Add Your Article <a href="/admin/create">Here</a></h2>
						@endif
					</ul>
				</div>
				
				  
			</div>
	</div>

@stop