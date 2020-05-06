@extends('layouts.template')

@section('content')

	    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>Dawood recendency,Lahore.</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>(+92) 336 6296427 </td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>numankhalidbutt@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Dawood Residency, Lahore"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection