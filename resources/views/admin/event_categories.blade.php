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
    #form { display: none; }
    #form_btn:hover { cursor: pointer; }

</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    
@section('page-name','Event Categories')
@section('wrap-content')
<div id="loading"></div>            
      <div class="container">
       
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
          <div class="col-8 table-responsive">
              <table class="table table-bordered table-hover" id="categoryTable"> 
                <thead>
                  <tr>
                    <th> Title </th>
                    <th> Actions </th>
                  </tr>
                </thead> 

                <tbody>
                  @foreach( $EventCategories as $category )
                  <tr>
                    <td> {{ $category->title }} </td>
                    <td> 
                       <a href="{{ url('event_categories/'.$category->id.'/edit') }}" class="ml-3 float-left btn btn-sm btn-primary"> Edit </a>
                        <form method="post" action="{{ url('event_categories/'.$category->id) }}">
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
          
          <div class="col-4">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"> 
                    <h5 id="form_btn"> Add Event Category </h5> 
                  </li>
                </ol>
              </nav>
            <form action="{{ url('event_categories') }}" method="post" class="p-3" id="form">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="title" required placeholder="Enter Title">
                </div>

               <div class="form-group">
                <button type="submit" class="btn btn-sm form-control btn-success"> Add </button>
              </div>
            </form>

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

      $('#form_btn').click(function(){
        $('#form').toggle(250);
        $('#form input:text').focus();
      });
    
    const table =$('#categoryTable').DataTable( {
            "scrollY": "330",
            "scrollCollapse": true,
            order: [[ 1, 'asc' ]]
        } );

      $('.btn-delete').click(function(){
          if(! confirm('Are you sure you want to delete this record ?')) return false;
      });


    });
</script>
@endsection