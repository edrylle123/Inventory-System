

<div class="modal fade" id="app" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      @extends('layouts.master')
@section('content')
	<div class="container" id="app">
		<form method="POST" action="/equipments/{{ $equipment->id }}/update">
		@csrf
		<span class="display-5" >Edit Equipments</span>
		  <div class="form-group">
		    <br>
		    <input type="text" class="form-control" name='name' value='{{ $equipment->name }}'>

		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	@foreach ($equipments_category as $equipments_category)
		    	<option class="option"  value='{{ $equipments_category->name }} '>
		    		{{ $equipments_category->name }}</option>
		    	@endforeach
		    </select>
		    
		  <br>
		  </div>
		  <br><br>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
@endsection
@section('scripts')
	<script type="text/javascript">
		var equipment = @json($equipment);
	</script>
	<script type="text/javascript">
		var vm = new Vue({
			el:"#app",
			data:{
				equipment: equipment
			},
			mounted() {
				console.log(this.equipment)
			},
			computed:{
				totalCost(){
					return this.equipment.quantity*this.equipment.cost; 
				}
			}

		})
</script>
@endsection
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Launch
    Modal Contact Form</a>
</div>