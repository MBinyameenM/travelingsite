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
                            <span>Hotels</span>
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
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('template/img/room/room-1.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Hotel Name</h4>
                            <h3> Rs.<span>/Perperson</span></h3>
                            <table>
                                <tbody>
<!--                                    <tr>-->
<!--                                        <td class="r-o">Size:</td>-->
<!--                                        <td>30 ft</td>-->
<!--                                    </tr>-->
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 300</td>
                                    </tr>
<!--                                    <tr>-->
<!--                                        <td class="r-o">Bed:</td>-->
<!--                                        <td>King Beds</td>-->
<!--                                    </tr>-->
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="room-details.html" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>

                </div>
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

@endsection