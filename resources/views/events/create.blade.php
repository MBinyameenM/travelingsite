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

        
			
			@if(isset($event))
			@section('page-name','Manage Event')
			    <form action="{{ url('events/'.$event->id) }}" method="post" enctype="multipart/form-data" >
			    	@method('PATCH')
			@else
			@section('page-name','Add Event')
			    <form action="{{ url('events') }}" method="post" enctype="multipart/form-data">
			@endif
				@csrf
			<div class="row">	
				<div class="col-4">
					<div class="form-group">
						<label for="title"> Title </label>
						<input type="text" id="title" name="title"title class="form-control" placeholder="Enter Title" required value="@if(isset($event)){{ $event->title }}@endif" autofocus>
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label for="hotel_id"> Select Hotel </label>
						<select required id="hotel_id" name="hotel_id" class="form-control">
							@if(isset($event))
							<option value="{{ $event->hotel_id }}">{{ \App\Hotels::select('name')->where('id',$event->hotel_id)->get()[0]->name }}</option>
							@endif
							@foreach( \App\Hotels::select('name','id')->orderBy('name','asc')->get() as $hotel )
							<option value="{{ $hotel->id }}"> {{ $hotel->name }} </option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label for="rate"> Rate </label>
						<input type="number" name="rate" required id="rate" class="form-control" placeholder="Enter Rate" value="@if(isset($event)){{ $event->rate }}@endif">
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="category_id"> Select Category </label>
						<select required id="category_id" name="category_id" class="form-control">
							@if(isset($event))
							<option value="{{ $event->category_id }}">{{ \App\EventCategories::select('title')->where('id',$event->category_id)->get()[0]->title }}</option>
							@endif
							@foreach( \App\EventCategories::select('title','id')->orderBy('title','asc')->get() as $category )
							<option value="{{ $category->id }}"> {{ $category->title }} </option>
							@endforeach
						</select>
					</div>			
				</div>
		    </div>

		    <div class="row">
		    	<div class="col-12">
					<div class="form-group">
						<label for="description"> Description </label>
						<textarea type="text" rows="6" placeholder="Enter Description" name="description" id="description" class="form-control">@if(isset($event)){{ $event->description }}@endif</textarea>
					</div>			
		    	</div>

		    	<div class="form-group">
		    		<label for="images"> Upload Images of Event: </label>
    				<input type="file" name="images[]" id="images"  multiple />
    			</div>
		    </div>
			

		    <div class="row mt-5 ml-3">
		    	<div class="col-2">
		    		<button class="form-control btn btn-sm btn-primary" type="submit"> @if( isset($event) ) Update @else Add @endif </button>
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