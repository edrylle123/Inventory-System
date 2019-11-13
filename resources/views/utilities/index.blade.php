@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="active-pink-4 mb-4">
  			<input class="form-control" type="text" placeholder="Search Utensil" aria-label="Search">
		</div>
		<table class="table">
			<thead>
				<tr>
					
					<th scope="col">Name</th>
					<th scope="col">Quantity</th>
					<th scope="col">Category</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($utilities as $utility)
					<tr>
						<td>{{ $utility->description }}</td>
						<td>{{ $utility->category_u }}</td>
						<td>{{ $utility->quantity }}</td>
						<td><a class="btn btn-primary" href="/utilities/{{ $utility->id }}/edit">Edit</a></td>
						<td><a class="btn btn-primary" href="/utilities/{{ $utility->id }}/delete">Delete</a></td>

					</tr>
				@endforeach
			</tbody>
			
			
		</table>
		<a class="btn btn-primary" href='/utilities/add'>Add New Utensil</a>
	</div>
@endsection