@extends('master')




@section('content')

	<h1> Create a new todo </h1>



	{!! Form::open(['route' => 'todo.store']) !!}

		<div class="form-group">
			{!! Form::label('title', 'Enter Title: ') !!}
			
			{!! Form::text('title', null, array('class'=>'form-control')) !!}
		</div>
		

		<div class="form-group">

			{!! Form::label('body', 'Enter Body: ') !!}

			{!! Form::text('body', null, array('class' =>'form-control')) !!}

		</div>

		<div class="form-group">

			{!! Form::submit(null, array('class'=>'btn btn-primary')) !!}

		</div>
	

	{!! Form::close() !!}








@stop