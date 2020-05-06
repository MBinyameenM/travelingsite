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

    
@section('page-name','Events')
@section('wrap-content')
<div id="loading"></div>            
      <div class="container">

        <div class="row mb-2">
          <div class="col-12">
          <a href="{{ url('events/create') }}" class="mr-5 btn btn-sm btn-success float-right"> Add Event </a>
          </div>
        </div>
       
       @if(session('success')) 
        <div class="row">
          <div class="offset-3 col-md-6">
            <div class="alert alert-success">
               <a href="#" class="close" >&times;</a>
               <strong> Success !</strong> {{ session('success') }}
            </div>
          </div>
        </div>
        @endif

        <div class="row">
          <div class="col-12">

                  <div class="table-responsive" >
                    <table class="table table-bordered table-hover" id="eventTable"> 
                    <thead>
                      <tr>
                        <th> Title </th>
                        <th> Hotel </th>
                        <th> Category </th>
                        <th> Rate </th>
                        <th> Discription </th>
                        <th> Detail </th>
                        <th> Actions </th>
                      </tr>
                    </thead> 

                    <tbody>
                      @foreach( $Events as $event )
                      <tr>
                        <td> {{ $event->title }} </td>
                        <td> {{ $event->hotel->name }} </td>
                        <td> {{ $event->category->title }} </td>
                        <td> Rs. {{ number_format ($event->rate,0) }} </td>
                        <td> {{ $event->description }} </td>
                        <td> <a href=""> View Details </a> </td>
                        <td> 
                           <a href="{{ url('events/'.$event->id.'/edit') }}" class="mb-1 ml-3 float-left btn btn-sm btn-primary"> Edit </a>
                            <form method="post" action="{{ url('events/'.$event->id) }}">
                            @method('DELETE')
                            @csrf 
                            <button type="submit" class="float-left btn btn-sm btn-danger ml-2"> Delete </button> 
                            </form>
                        </td>
                      </tr>
                      @endforeach
                   </tbody>
              </table>
          </div>


          </div>
        </div>
      </div>

<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" ></script> -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer ></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js
" defer></script>
<script>
    $(document).ready(function(){

      $('#loading').fadeOut();
    
    const table =$('#eventTable').DataTable( {
            "scrollY": "330",
            "scrollCollapse": true,
            order: [[ 1, 'asc' ]]
        } );


    });
</script>
@endsection