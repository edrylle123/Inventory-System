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

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      	<form method="POST" action="/equipments/store">
      		@csrf

		 <div class="form-group">
		    <input type="text" class="form-control" name='name'  placeholder="Item Name">
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	@foreach ($equipments_category as $equipments_category)
		    	<option class="option"  value='{{ $equipments_category->name }} '>
		    		{{ $equipments_category->name }}</option>
		    	@endforeach
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='quantity'  placeholder="Quantity">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
        </div>




 




        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">ADD ITEM</a>
</div>