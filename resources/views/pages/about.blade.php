@extends('layouts.template')

@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="{{ route('home') }}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->


    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Welcome To BHCS.</h2>
                            <h4> BHCS's global hotel search </h4>
                            <p>
                                BHCS's hotel search allows users to compare hotel prices in just a few clicks from more than site. With thousands of visits annually to our site, travellers regularly use the hotel comparison to compare deals in the same city. Get information for hotels and events like Waleema or Birthdays and you can find the right hotel on BHCS quickly and easily.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <h4> Hotel reviews help you find your ideal hotel    </h4>
                            <p>
                                To get an extended overview of a hotel property, BHCS shows the average rating and extensive reviews from other users too. BHCS makes it easy for you to find information about your Hotel for events , including the ideal hotel for you.
                            </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection