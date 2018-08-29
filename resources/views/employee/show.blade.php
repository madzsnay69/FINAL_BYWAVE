@extends('layouts.app')


@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Employee: {{ $employee->name }}<h1>
	</div>
	
	@auth
		<a href="{{ route('employees.edit',['id'=>$employee->id]) }}" class="btn btn-primary">Edit</a>	
		<a href="{{ route('employees.destroy',['id'=>$employee->id]) }}" class="btn btn-danger">Delete</a>
		<a href="{{ route('payrolls.pdf',['id'=>$employee->id]) }}" class="btn btn-info">Download PDF</a>
	@endauth
	
	<br>
	<br>
	
	<table style="width:100% ">
		<tr>
			<th>Name:</th>
			<td>{{ $employee->name }}</td>		
		</tr>
		<tr>
			<th>ID Number:</th>
			<td>{{ $employee->idnum }}</td>		
		</tr>		
		<tr>
			<th>Email</th>
			<td>{{ $employee->email }}</td>
		</tr>
		<tr>
			<th>Salary</th>
			<td>{{ $employee->salary }}</td>			
		</tr>
		<th>Contact</th>
			<td>{{ $employee->phone }}</td>		
		</tr>	
		<th>Address</th>
			<td>{{ $employee->address}}</td>		
		</tr>	
		<th>Date Started</th>
			<td>{{ $employee->datestarted }}</td>		
		</tr>										
		
	</table>		
@endsection