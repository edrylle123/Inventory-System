@extends('layouts.master')
@section('content')
	<div class="container" id="app">
		<form method="POST" action="/utilities/{{ $utility->id }}/update">
		@csrf
		<span class="display-5" >Edit Utensils</span>
		  <div class="form-group">
		    <br>
		    <input type="text" class="form-control" name='description' value='{{ $utility->description }}'>
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category_u"> 
		    	@foreach ($utensils_category as $utensils_category)
		    	<option class="option"  value='{{ $utensils_category->name }} '>
		    		{{ $utensils_category->name }}</option>
		    	@endforeach
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='utility.quantity' value='{{$utility->quantity}}' style="float:left;width:20%;margin-right: 2%;">
		    <input type="text" class="form-control" name='unit'  value='{{$utility->unit}}'  style="float:left;width:20%; margin-right: 2%;">
		    <input type="text" class="form-control" name='cost'  v-model='utility.cost' value='{{$utility->cost}}' style="float:left;width:25%; margin-right:2%;">
		   
		    <br>
		  </div>
		  <br><br>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
@endsection
@section('scripts')
	<script type="text/javascript">
		var utility = @json($utility);
	</script>
	<script type="text/javascript">
		var vm = new Vue({
			el:"#app",
			data:{
				utility: utility
			},
			mounted() {
				console.log(this.utility)
			},
			computed:{
				totalCost(){
					return this.utility.quantity*this.utility.cost; 
				}
			}

		})
</script>
@endsection
