@extends('layouts.template')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Events</h2>
                        <div class="bt-option">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Events</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row">
                @foreach( $events as $event )
                @if( count($event->images) )
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item set-bg" data-setbg="{{ asset('../storage/app/'.$event->images->first()['path'].$event->images->first()['unique_identifier']) }}")>
                        <div class="bi-text">
                            <span class="b-tag"><a href=""> {{ $event->category->title }} </a> </span>
                            <h4><a href="./blog-details.html"> {{ $event->title }} </a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>  {{ date_format( date_create($event->created_at), 'Y-m-d' ) }} </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                <div class="col-lg-12">
                    <div class="load-more">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    
<script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $.each($('.set-bg'), function( index, value ) {
                console.log(`url(${($(this).attr("data-setbg"))})`);
                $(this).css('background-image',`url(${($(this).attr("data-setbg"))})`);
            });
    });
</script>

@endsection