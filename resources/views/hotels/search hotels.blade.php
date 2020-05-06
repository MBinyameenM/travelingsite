@extends('layouts.template')

@section('content')

       <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Hotels</h2>
                        <div class="bt-option">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Searched Hotels</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->


   
    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
            @foreach( $hotels as $hotel )
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('../storage/app/'.$hotel->images->first()->path.$hotel->images->first()->unique_identifier) }}" alt="">
                        <div class="ri-text">
                            <h4> {{ $hotel->name }} </h4>
                            <h3> Rs. {{ $hotel->rate_per_person }}<span>/Perperson</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">City:</td>
                                        <td>{{ $hotel->city }}</td>
                                    </tr>

                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>{{ $hotel->capacity }}</td>
                                    </tr>

                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>
                                            @if($hotel->facilities->wifi) Wifi, @endif
                                            @if($hotel->facilities->parking) Parking, @endif
                                            @if($hotel->facilities->spa) Spa, @endif
                                            @if($hotel->facilities->ac) Ac. @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('hotels/'.$hotel->id) }}" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

                </div>
               <!--  <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

@endsection