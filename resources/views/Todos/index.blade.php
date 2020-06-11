@extends('layouts.app')

@section('content')

		<h1 class="text-center my-5"> TODOS PAGE</h1>

<div class="row justify-content-center">
	<div class="colm-md-8">
		<div class=" card card-default">	
<div class="card-header">
	Todos Page
</div>

<div class="card-body">
	@foreach($todos as $todo)
	<ul class="list-group">
		<li class="list-group-item">{{ $todo->name }}&nbsp;&nbsp;&nbsp;&nbsp;
		
		@if(!$todo->completed)
		<a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-right">complete</a>
		@endif
		
		<a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>&nbsp;
		
		</li>
	
	@endforeach
</ul>
</div>	
</div>
	</div>
</div>


@endsection