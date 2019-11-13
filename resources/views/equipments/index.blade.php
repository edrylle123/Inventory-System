@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>

					<th scope="col">Name</th>
					<th scope="col">Category</th>
					<th scope="col">Quantity</th>	
				</tr>
			</thead>
			<tbody>
				@foreach($equipments as $equipment)
					<tr>
						<td>{{ $equipment->id }}</td>
						<td>{{ $equipment->name }}</td>
						<td>{{ $equipment->category }}</td>
						<td>{{ $equipment->quantity }}</td>
						
						<td><a class="btn btn-primary" href="/equipments/{{ $equipment->id }}/edit">Edit</a></td>
						<td><a class="btn btn-primary" href="/equipments/{{ $equipment->id }}/delete">Delete</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/equipments/add'>Add Item</a>
	</div>
@endsection