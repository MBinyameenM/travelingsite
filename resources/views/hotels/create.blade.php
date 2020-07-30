@extends('layouts.admin')
<style>

     #loading {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../public/loading.gif') 50% 50% no-repeat white;
        opacity: .5;
      }

</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    
@section('wrap-content')
<div id="loading"></div>            
      <div class="container">

        
			
			@if(isset($hotel))
			@section('page-name','Manage Hotel')
			    <form action="{{ url('hotels/'.$hotel->id) }}" method="post" enctype="multipart/form-data">
			    	@method('PATCH')
			@else
			@section('page-name','Add Hotel')
			    <form action="{{ url('hotels') }}" method="post" enctype="multipart/form-data">
			@endif
				@csrf
			<div class="row">	
				<div class="col-4">
					<div class="form-group">
						<label for="name"> Name </label>
						<input type="text" id="name" name="name" class="form-control" value="@if(isset($hotel)){{ $hotel->name }}@endif" placeholder="Enter Name" autofocus required>
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label for="city"> City </label>
						<select required id="city" name="city" class="form-control">
							@if(isset($hotel))
							<option value="{{ $hotel->city }}">{{ $hotel->city }}</option>
							@endif
							<option value="Lahore"> Lahore </option>
							<option value="Sialkot"> Sialkot </option>
							
						</select>
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label for="capacity"> Capacity </label>
						<input type="number" name="capacity" required id="capacity" class="form-control" placeholder="Enter Capacity" value="@if(isset($hotel)){{ $hotel->capacity }}@endif">
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label for="rate_per_person"> Rate per Person </label>
						<input type="number" name="rate_per_person" required id="rate_per_person" class="form-control" placeholder="Enter Rate per Person" value="@if(isset($hotel)){{ $hotel->rate_per_person }}@endif">
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="phone"> Contact Number </label>
						<input type="text" required name="phone" id="phone" placeholder="Enter Contact Number" class="form-control" value="@if(isset($hotel)){{ $hotel->phone }}@endif">
					</div>			
				</div>

				<div class="col-8">
					<div class="form-group">
						<label for="address"> Address </label>
						<textarea type="text" required placeholder="Enter Address" name="address" id="address" class="form-control">@if(isset($hotel)){{ $hotel->address }}@endif</textarea>
					</div>			
				</div>

		    </div>
			
			<div class="row">
				<div class="col-12">
					<h6 class="float-left"> Facilities </h6>
				</div>
			</div>

		    <div class="row mt-3">
		    	<div class="col-3">
		    		<div class="form-group">
		    			<label for=""> Wifi </label> <br>
		    			@if( isset($hotel->facilities) AND $hotel->facilities->wifi == "1" )
		    			<input type="checkbox" value="1" name="wifi" checked >
		    			@else
		    			<input type="checkbox" value="1" name="wifi">
		    			@endif
		    		</div>
		    	</div>

		    	<div class="col-3">
		    		<div class="form-group">
		    			<label for=""> Parking </label> <br>
		    			@if( isset($hotel->facilities) AND $hotel->facilities->parking == "1" )
		    			<input type="checkbox" value="1" name="parking" checked>
		    			@else
		    			<input type="checkbox" value="1" name="parking">
		    			@endif
		    		</div>
		    	</div>

		    	<div class="col-3">
		    		<div class="form-group">
		    			<label for=""> Spa </label> <br>
		    			@if( isset($hotel->facilities) AND $hotel->facilities->spa == "1" )
		    			<input type="checkbox" value="1" name="spa" checked>
		    			@else
		    			<input type="checkbox" value="1" name="spa">
		    			@endif
		    		</div>
		    	</div>

		    	<div class="col-3">
		    		<div class="form-group">
		    			<label for=""> Ac </label> <br>
		    			@if( isset($hotel->facilities) AND $hotel->facilities->ac == "1" )
		    			<input type="checkbox" value="1" name="ac" checked>
		    			@else
		    			<input type="checkbox" value="1" name="ac">
		    			@endif
		    		</div>
		    	</div>

		    </div>

		    <div class="row">
		    	<div class="col-12">
		    		<div class="form-group">
			    		<label for="images"> Upload Images of Hotel: </label>
	    				<input type="file" name="images[]" required id="images"  multiple />
	    			</div>
		    	</div>
		    </div>

		    <div class="row mt-5 ml-3">
		    	<div class="col-2">
		    		<button class="form-control btn btn-sm btn-primary" type="submit"> @if(isset($hotel)) Update @else Add @endif </button>
		    	</div>
		    </div>

				</form>

        
      </div>

<script>
    $(document).ready(function(){
      $('#loading').fadeOut();
    });
</script>
@endsection