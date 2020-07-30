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

    
@section('page-name','Users')
@section('wrap-content')
<div id="loading"></div>            
      <div class="container">
        
      @if(session('success'))
        <div class="row">
          <div class="offset-3 col-md-6">
            <div class="alert alert-success" id="ajax_success_alert">
               <strong> Success !</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          </div>
        </div>
      @endif

        <div class="row">
          <div class="col-12">

                  <div class="table-responsive" >
                    <table class="table table-bordered table-hover" id="userTable"> 
                    <thead>
                      <tr>
                        <th> Name </th>
                        <th> E-mail </th>
                        <th> Role </th>
                        <th> Change Role </th>
                        <th> Status </th>
                        <th> Delete </th>
                      </tr>
                    </thead> 

                    <tbody>
                      @foreach( $users as $user )
                      <tr>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td>
                            @if( $user->user_role == 1 ) Admin
                            @elseif ( $user->user_role == 2 ) Manager
                            @else Users
                            @endif 
                        </td>
                        <td>
                            <a href="{{ url('change_user_role/'.$user->id) }}">
                              @if( $user->user_role == 1 ) Make Manager
                              @else Make Admin
                              @endif 
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('change_user_status/'.$user->id) }}">
                              @if( $user->status == 1 ) Block
                              @else Unblock
                              @endif 
                            </a>
                        </td>
                        <td> 
                           <form method="post" action="{{ url('users/'.$user->id) }}">
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
    
    const table =$('#userTable').DataTable( {
            "scrollY": "330",
            "scrollCollapse": true,
            order: [[ 1, 'asc' ]]
        } );


    });
</script>
@endsection