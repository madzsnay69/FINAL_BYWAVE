@extends('layouts.app')


@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" rel="stylesheet"/>
	<div class="col-lg-12">
		<h1 class="page-header">New Employee</h1>
	</div>
	
	<form action="{{ route('employees.store') }}" method="POST">
			{{ csrf_field() }}
		
		<div class="form-group col-md-6">
			<label for="name">Name: </label>
			<input type="text" name="name" class="form-control">		
		</div>
		
		<div class="form-group col-md-2">
			<label for="email">Email: </label>
			<input type="email" name="email" class="form-control">		
		</div>
		<div class="form-group col-md-2">
			<label for="phone">Contact: </label>
			<input type="text" name="phone" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="idnum">ID Number: </label>
			<input type="text" name="idnum" class="form-control">		
		</div>

		<div class="form-group col-md-2" hidden="">
			<label for="password">Password: </label>
			<input type="password" name="password" value="password1234" class="form-control">		
		</div>

		
		<div class="form-group col-md-12">
			<label for="address">Address: </label>
			<input type="text" name="address" class="form-control">		
		</div>

		<div class="form-group col-md-3">
			<label for="salary">Salary: </label>
			<input type="number" name="salary" class="form-control">		
		</div>
		
		<div class="form-group col-md-3">
			<label for="role">Select a Role</label>
			<select name="role_id"  cols="5" rows="5" class="form-control">
				@foreach($roles as $role)
					<option value="{{ $role->id}}">{{ $role->name }}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group col-md-3">
			<label for="full_time">Position:</label>
			<select name="full_time" id="full_time" class="form-control">
				<option value="1">Full-Time</option>
				<option value="0">Part-Time</option>					
			</select>
		</div>



	<div class="form-group col-lg-3">
		<td>
			<div class="input-group date">
				<label for="datestarted">Date Started: (YYYY-MM-DD) </label>
  				<input type="text" name="datestarted"  id="date" class="form-control"><span class="input-group-addon"></i></span>
			</div>
		</td>	
	</div>

		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Submit</button>
		</div>
	</form>
	



@endsection