@extends('layouts.master')
@section('content')

<div class="container" id="app">
	
		<form method="POST" action="/utilities/store">
		@csrf
		<span class="display-5" >Utensils</span>
		  <div class="form-group">
		    <br>
		    <input type="text" class="form-control" name='description'  placeholder="Utensils Description">
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category_u"> 
		    	@foreach ($utensils_category as $utensils_category)
		    	<option class="option"  value='{{ $utensils_category->name }} '>
		    		{{ $utensils_category->name }}</option>
		    	@endforeach
		    </select>
		    <input type="text" class="form-control" name='unit'  placeholder="Unit" style="float:left;width:20%;margin-right:2%;">
		    <input type="text" class="form-control" name='quantity' v-model='quantity'  placeholder="Quantity" style="float:left;width:20%;margin-right:2%;">
		    <input type="text" class="form-control" name='cost'  v-model='cost' placeholder="Cost" style="float:left;width:25%; margin-right:2%;">
		    
		    
		    <br>
		  </div>
		  <br><br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>
@endsection
@section('scripts')
	<script type="text/javascript">
		var vm = new Vue({
			el:"#app",
			data:{
				quantity:"",
				cost:"",

			},
			computed:{
				totalCost(){
					return this.quantity*this.cost; 
				}
			}

		})
</script>
@endsection