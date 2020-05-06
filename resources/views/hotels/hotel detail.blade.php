@extends('layouts.template')

@section('content')
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
   
<style> 
.review-add .ra-form .rating i {
    color: #f5b917;
    font-size: 20px;
    margin-top: -10%;
}
#owl-demo .item{
padding: 15px; 
}
.section-title span { font-size: 30px; }
#owl-demo { margin-bottom: 8%; }    

#custom_btns{
    position: relative;
    top: 35%;
    display: block;
    margin-left: auto; 
    margin-right: auto; 
}
.customNextBtn, .customPreviousBtn{
    ackground-color: #fff;
    box-shadow: -14.142px 14.142px 20px 0px rgba(157,157,157,0.2);
    padding: 14px;
    color: #000;
    font-weight: 500;
    border: 1px solid #f5f5f5;
    display: inline-flex;
    cursor: pointer;  
}
.customNextBtn:hover, .customPreviousBtn:hover
{
    box-shadow: -21.142px 9.142px 20px #ccc;
}
.event_category { text-decoration: none; color: #dfa974 }
.event_category:hover { font-weight: bold; color: #dfa974 }
.gtc_pictures img { min-height: 250px; margin-bottom: 5%; }
.date { font-size: 13px; font-weight: 600; color: #795548; }
.gtc_des { font-family: 'league_spartanbold'; }
 </style>

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Hotel Detail</h2>
                        <div class="bt-option">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Hotel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="{{ asset('template/img/room/room-details.jpg') }}" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{ $hotel->name }}</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <!-- <a href="#">Booking Now</a> -->
                                </div>
                            </div>

                            @if(count($hotel->events))
                        
                            
                                <h5> <b> EVENTS </b> </h5>
                                
                                @foreach( $hotel->events  as $event )
                                    <div class="col-12">
                                 <div id="top_rated_hotels" class="owl-carousel owl-theme">
                                    @foreach( $event->images  as $img )
                                    <div class="item">
                                        <div class="gtc_pictures">
                                            <img src="{{ asset('../storage/app/'.$img->path.$img->unique_identifier) }}" alt="" class="img-fluid img-thumbmnail">    
                                        </div>
                                        <div class="gtc_des">
                                            <span class="gtc_country_flag float-left"> {{ $img->name }} </span>
                                            <span class="gtc_name float-left ml-2">  </span>
                                        </div>
                                    </div>
                                    @endforeach                                                                                             
                                
                                </div>
                                
                            </div>
                            @if( count($event->images) )
                            <div class="col-lg-12 mb-3">
                                <div id="custom_btns" class="float-right">
                                  <div class="customNextBtn mt-1"><i class="fas fa-long-arrow-alt-up"></i></div>
                                  <div class="customPreviousBtn mt-2"><i class="fas fa-long-arrow-alt-down"></i></div>
                                </div>
                            </div>
                            @endif

                            <div class="col-10">
                                <h5> <i class="fas fa-calendar-alt"></i> {{ $event->title }} <i class="ml-1 fas fa-arrow-alt-circle-right"></i> <a class="event_category" href="{{ url('events/category/'.$event->category->id) }}">{{ $event->category->title }} </a> <span class="ml-5 date"> <i class="fas fa-clock"></i> {{ date_format(date_create($event->created_at),'Y-m-d') }} </span> </h5>
                                <p class="f-para">{{ $event->description }}</p>
                            </div>

                            @endforeach 
                            @endif
                         
                    <!--         <div class="map-responsive">
                               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Dar-us-Salam Mosque+Bhelowal+Jehlum+Punjab+Pakistan" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> -->
                                                 
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                    @foreach( $hotel->ratings as $rating )
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="{{ asset('template/img/room/avatar/avatar-1.jpg') }}" alt="">
                            </div>
                            <div class="ri-text">
                                <span> {{ $rating->created_at }} </span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> {{ $rating->author->name }} </h5>
                                <p> {{ $rating->review }} </p>
                            </div>
                        </div>
                    @endforeach
                        
                    </div>
                    <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="{{ url('reviews') }}" method="post" class="ra-form">
                            @csrf
                            <div class="row">
<!--                                 <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email*">
                                </div> -->
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <!-- <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i> -->
                                            <span id="rateMe3"  class="rating-faces" ></span>   
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review" name="review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="room-details-item">

                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{ $hotel->name }}</h3>

                            </div>
                            <br>
                            <h2>Rs.{{ $hotel->rate_per_person }}<span>/PerPerson</span></h2>
                            <table>
                                <tbody>
                                <tr>
                                    <td class="r-o">Contact:</td>
                                    <td>{{ $hotel->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>{{ $hotel->capacity }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Address:</td>
                                    <td>{{ $hotel->address }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-3">
                                                @if($hotel->facilities->wifi) 
                                                <img src="https://img.icons8.com/ios-filled/52/000000/wireless-cloud-access.png"/>
                                                @else
                                                <img src="{{ asset('icons\no wifi.svg') }}"/>
                                                @endif
                                                Wifi
                                            </div>
                                            <div class="col-3">
                                                @if($hotel->facilities->parking) 
                                                <img src="https://img.icons8.com/ios-filled/50/000000/parking.png"/>
                                                @else
                                                <img src="https://img.icons8.com/metro/52/000000/no-parking.png"/>
                                                @endif
                                                Parking
                                            </div>
                                            <div class="col-3">
                                                @if($hotel->facilities->spa) 
                                                <img src="{{ asset('icons\spa.jpg') }}"/>
                                                @else
                                                <img src="{{ asset('icons\no spa.jpg') }}"/>
                                                @endif
                                                Spa
                                            </div>
                                            <div class="col-3">
                                                @if($hotel->facilities->ac) 
                                                <img src="https://img.icons8.com/pastel-glyph/50/000000/air-conditioner--v2.png"/>
                                                @else
                                                <img src="{{ asset('icons\no ac.png') }}"/>
                                                @endif
                                                AC
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->
<!-- JQuery -->
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>

<script>
    $(document).ready(function(){

!function(t){var n={};function r(e){if(n[e])return n[e].exports;var o=n[e]={i:e,l:!1,exports:{}};return t[e].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=t,r.c=n,r.d=function(t,n,e){r.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,n){if(1&n&&(t=r(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var e=Object.create(null);if(r.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)r.d(e,o,function(n){return t[n]}.bind(null,o));return e},r.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(n,"a",n),n},r.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},r.p="",r(r.s=221)}({0:function(t,n,r){(function(n){var r=function(t){return t&&t.Math==Math&&t};t.exports=r("object"==typeof globalThis&&globalThis)||r("object"==typeof window&&window)||r("object"==typeof self&&self)||r("object"==typeof n&&n)||Function("return this")()}).call(this,r(57))},1:function(t,n){t.exports=function(t){try{return!!t()}catch(t){return!0}}},10:function(t,n,r){var e=r(32),o=r(13);t.exports=function(t){return e(o(t))}},100:function(t,n,r){"use strict";var e=r(3),o=r(1),a=r(30),i=r(5),u=r(16),c=r(11),f=r(58),s=r(47),l=r(34),p=r(2)("isConcatSpreadable"),v=!o((function(){var t=[];return t[p]=!1,t.concat()[0]!==t})),d=l("concat"),y=function(t){if(!i(t))return!1;var n=t[p];return void 0!==n?!!n:a(t)};e({target:"Array",proto:!0,forced:!v||!d},{concat:function(t){var n,r,e,o,a,i=u(this),l=s(i,0),p=0;for(n=-1,e=arguments.length;n<e;n++)if(a=-1===n?i:arguments[n],y(a)){if(p+(o=c(a.length))>9007199254740991)throw TypeError("Maximum allowed index exceeded");for(r=0;r<o;r++,p++)r in a&&f(l,p,a[r])}else{if(p>=9007199254740991)throw TypeError("Maximum allowed index exceeded");f(l,p++,a)}return l.length=p,l}})},11:function(t,n,r){var e=r(12),o=Math.min;t.exports=function(t){return t>0?o(e(t),9007199254740991):0}},12:function(t,n){var r=Math.ceil,e=Math.floor;t.exports=function(t){return isNaN(t=+t)?0:(t>0?e:r)(t)}},13:function(t,n){t.exports=function(t){if(null==t)throw TypeError("Can't call method on "+t);return t}},14:function(t,n,r){var e=r(0),o=r(15),a=r(6),i=r(4),u=r(21),c=r(36),f=r(22),s=f.get,l=f.enforce,p=String(c).split("toString");o("inspectSource",(function(t){return c.call(t)})),(t.exports=function(t,n,r,o){var c=!!o&&!!o.unsafe,f=!!o&&!!o.enumerable,s=!!o&&!!o.noTargetGet;"function"==typeof r&&("string"!=typeof n||i(r,"name")||a(r,"name",n),l(r).source=p.join("string"==typeof n?n:"")),t!==e?(c?!s&&t[n]&&(f=!0):delete t[n],f?t[n]=r:a(t,n,r)):f?t[n]=r:u(n,r)})(Function.prototype,"toString",(function(){return"function"==typeof this&&s(this).source||c.call(this)}))},15:function(t,n,r){var e=r(26),o=r(59);(t.exports=function(t,n){return o[t]||(o[t]=void 0!==n?n:{})})("versions",[]).push({version:"3.3.2",mode:e?"pure":"global",copyright:"© 2019 Denis Pushkarev (zloirock.ru)"})},16:function(t,n,r){var e=r(13);t.exports=function(t){return Object(e(t))}},17:function(t,n){t.exports=function(t,n){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:n}}},18:function(t,n){var r={}.toString;t.exports=function(t){return r.call(t).slice(8,-1)}},19:function(t,n,r){var e=r(5);t.exports=function(t,n){if(!e(t))return t;var r,o;if(n&&"function"==typeof(r=t.toString)&&!e(o=r.call(t)))return o;if("function"==typeof(r=t.valueOf)&&!e(o=r.call(t)))return o;if(!n&&"function"==typeof(r=t.toString)&&!e(o=r.call(t)))return o;throw TypeError("Can't convert object to primitive value")}},2:function(t,n,r){var e=r(0),o=r(15),a=r(28),i=r(46),u=e.Symbol,c=o("wks");t.exports=function(t){return c[t]||(c[t]=i&&u[t]||(i?u:a)("Symbol."+t))}},20:function(t,n){t.exports={}},21:function(t,n,r){var e=r(0),o=r(6);t.exports=function(t,n){try{o(e,t,n)}catch(r){e[t]=n}return n}},22:function(t,n,r){var e,o,a,i=r(60),u=r(0),c=r(5),f=r(6),s=r(4),l=r(23),p=r(20),v=u.WeakMap;if(i){var d=new v,y=d.get,b=d.has,h=d.set;e=function(t,n){return h.call(d,t,n),n},o=function(t){return y.call(d,t)||{}},a=function(t){return b.call(d,t)}}else{var g=l("state");p[g]=!0,e=function(t,n){return f(t,g,n),n},o=function(t){return s(t,g)?t[g]:{}},a=function(t){return s(t,g)}}t.exports={set:e,get:o,has:a,enforce:function(t){return a(t)?o(t):e(t,{})},getterFor:function(t){return function(n){var r;if(!c(n)||(r=o(n)).type!==t)throw TypeError("Incompatible receiver, "+t+" required");return r}}}},221:function(t,n,r){r(222),t.exports=r(223)},222:function(t,n,r){"use strict";r.r(n);var e;r(100);(e=jQuery).fn.mdbRate=function(){var t,n=e.fn.tooltip.Constructor.Default.whiteList;n.textarea=[],n.button=[];for(var r=e(this),o=["Very bad","Poor","OK","Good","Excellent"],a=0;a<5;a++)r.append('<i class="py-2 px-1 rate-popover" data-index="'.concat(a,'" data-html="true" data-toggle="popover"\n      data-placement="top" title="').concat(o[a],'"></i>'));t=r.children(),r.hasClass("rating-faces")?t.addClass("far fa-meh-blank"):r.hasClass("empty-stars")?t.addClass("far fa-star"):t.addClass("fas fa-star"),t.on("mouseover",(function(){!function(n){t.parent().hasClass("rating-faces")&&t.addClass("fa-meh-blank"),r.hasClass("empty-stars")&&t.removeClass("fas"),t.removeClass("fa-angry fa-frown fa-meh fa-smile fa-laugh live oneStar twoStars threeStars fourStars fiveStars amber-text");for(var o=0;o<=n;o++)if(r.hasClass("rating-faces"))switch(e(t.get(o)).removeClass("fa-meh-blank"),e(t.get(o)).addClass("live"),n){case"0":e(t.get(o)).addClass("fa-angry");break;case"1":e(t.get(o)).addClass("fa-frown");break;case"2":e(t.get(o)).addClass("fa-meh");break;case"3":e(t.get(o)).addClass("fa-smile");break;case"4":e(t.get(o)).addClass("fa-laugh")}else if(r.hasClass("empty-stars"))switch(e(t.get(o)).addClass("fas"),n){case"0":e(t.get(o)).addClass("oneStar");break;case"1":e(t.get(o)).addClass("twoStars");break;case"2":e(t.get(o)).addClass("threeStars");break;case"3":e(t.get(o)).addClass("fourStars");break;case"4":e(t.get(o)).addClass("fiveStars")}else e(t.get(o)).addClass("amber-text")}(e(this).attr("data-index"))})),t.on("click",(function(){t.popover("hide")})),r.on("click","#voteSubmitButton",(function(){t.popover("hide")})),r.on("click","#closePopoverButton",(function(){t.popover("hide")})),r.hasClass("feedback")&&e((function(){t.popover({container:r,content:'<div class="my-0 py-0"> <textarea type="text" style="font-size: 0.78rem" class="md-textarea form-control py-0" placeholder="Write us what can we improve" rows="3"></textarea> <button id="voteSubmitButton" type="submit" class="btn btn-sm btn-primary">Submit!</button> <button id="closePopoverButton" class="btn btn-flat btn-sm">Close</button>  </div>'})})),t.tooltip()}},223:function(t,n,r){},23:function(t,n,r){var e=r(15),o=r(28),a=e("keys");t.exports=function(t){return a[t]||(a[t]=o(t))}},24:function(t,n,r){var e=r(8),o=r(42),a=r(17),i=r(10),u=r(19),c=r(4),f=r(35),s=Object.getOwnPropertyDescriptor;n.f=e?s:function(t,n){if(t=i(t),n=u(n,!0),f)try{return s(t,n)}catch(t){}if(c(t,n))return a(!o.f.call(t,n),t[n])}},26:function(t,n){t.exports=!1},27:function(t,n,r){var e=r(39),o=r(29).concat("length","prototype");n.f=Object.getOwnPropertyNames||function(t){return e(t,o)}},28:function(t,n){var r=0,e=Math.random();t.exports=function(t){return"Symbol("+String(void 0===t?"":t)+")_"+(++r+e).toString(36)}},29:function(t,n){t.exports=["constructor","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toLocaleString","toString","valueOf"]},3:function(t,n,r){var e=r(0),o=r(24).f,a=r(6),i=r(14),u=r(21),c=r(43),f=r(50);t.exports=function(t,n){var r,s,l,p,v,d=t.target,y=t.global,b=t.stat;if(r=y?e:b?e[d]||u(d,{}):(e[d]||{}).prototype)for(s in n){if(p=n[s],l=t.noTargetGet?(v=o(r,s))&&v.value:r[s],!f(y?s:d+(b?".":"#")+s,t.forced)&&void 0!==l){if(typeof p==typeof l)continue;c(p,l)}(t.sham||l&&l.sham)&&a(p,"sham",!0),i(r,s,p,t)}}},30:function(t,n,r){var e=r(18);t.exports=Array.isArray||function(t){return"Array"==e(t)}},31:function(t,n,r){var e=r(12),o=Math.max,a=Math.min;t.exports=function(t,n){var r=e(t);return r<0?o(r+n,0):a(r,n)}},32:function(t,n,r){var e=r(1),o=r(18),a="".split;t.exports=e((function(){return!Object("z").propertyIsEnumerable(0)}))?function(t){return"String"==o(t)?a.call(t,""):Object(t)}:Object},34:function(t,n,r){var e=r(1),o=r(2)("species");t.exports=function(t){return!e((function(){var n=[];return(n.constructor={})[o]=function(){return{foo:1}},1!==n[t](Boolean).foo}))}},35:function(t,n,r){var e=r(8),o=r(1),a=r(38);t.exports=!e&&!o((function(){return 7!=Object.defineProperty(a("div"),"a",{get:function(){return 7}}).a}))},36:function(t,n,r){var e=r(15);t.exports=e("native-function-to-string",Function.toString)},37:function(t,n,r){var e=r(44),o=r(0),a=function(t){return"function"==typeof t?t:void 0};t.exports=function(t,n){return arguments.length<2?a(e[t])||a(o[t]):e[t]&&e[t][n]||o[t]&&o[t][n]}},38:function(t,n,r){var e=r(0),o=r(5),a=e.document,i=o(a)&&o(a.createElement);t.exports=function(t){return i?a.createElement(t):{}}},39:function(t,n,r){var e=r(4),o=r(10),a=r(41).indexOf,i=r(20);t.exports=function(t,n){var r,u=o(t),c=0,f=[];for(r in u)!e(i,r)&&e(u,r)&&f.push(r);for(;n.length>c;)e(u,r=n[c++])&&(~a(f,r)||f.push(r));return f}},4:function(t,n){var r={}.hasOwnProperty;t.exports=function(t,n){return r.call(t,n)}},41:function(t,n,r){var e=r(10),o=r(11),a=r(31),i=function(t){return function(n,r,i){var u,c=e(n),f=o(c.length),s=a(i,f);if(t&&r!=r){for(;f>s;)if((u=c[s++])!=u)return!0}else for(;f>s;s++)if((t||s in c)&&c[s]===r)return t||s||0;return!t&&-1}};t.exports={includes:i(!0),indexOf:i(!1)}},42:function(t,n,r){"use strict";var e={}.propertyIsEnumerable,o=Object.getOwnPropertyDescriptor,a=o&&!e.call({1:2},1);n.f=a?function(t){var n=o(this,t);return!!n&&n.enumerable}:e},43:function(t,n,r){var e=r(4),o=r(61),a=r(24),i=r(9);t.exports=function(t,n){for(var r=o(n),u=i.f,c=a.f,f=0;f<r.length;f++){var s=r[f];e(t,s)||u(t,s,c(n,s))}}},44:function(t,n,r){t.exports=r(0)},45:function(t,n){n.f=Object.getOwnPropertySymbols},46:function(t,n,r){var e=r(1);t.exports=!!Object.getOwnPropertySymbols&&!e((function(){return!String(Symbol())}))},47:function(t,n,r){var e=r(5),o=r(30),a=r(2)("species");t.exports=function(t,n){var r;return o(t)&&("function"!=typeof(r=t.constructor)||r!==Array&&!o(r.prototype)?e(r)&&null===(r=r[a])&&(r=void 0):r=void 0),new(void 0===r?Array:r)(0===n?0:n)}},5:function(t,n){t.exports=function(t){return"object"==typeof t?null!==t:"function"==typeof t}},50:function(t,n,r){var e=r(1),o=/#|\.prototype\./,a=function(t,n){var r=u[i(t)];return r==f||r!=c&&("function"==typeof n?e(n):!!n)},i=a.normalize=function(t){return String(t).replace(o,".").toLowerCase()},u=a.data={},c=a.NATIVE="N",f=a.POLYFILL="P";t.exports=a},57:function(t,n){var r;r=function(){return this}();try{r=r||new Function("return this")()}catch(t){"object"==typeof window&&(r=window)}t.exports=r},58:function(t,n,r){"use strict";var e=r(19),o=r(9),a=r(17);t.exports=function(t,n,r){var i=e(n);i in t?o.f(t,i,a(0,r)):t[i]=r}},59:function(t,n,r){var e=r(0),o=r(21),a=e["__core-js_shared__"]||o("__core-js_shared__",{});t.exports=a},6:function(t,n,r){var e=r(8),o=r(9),a=r(17);t.exports=e?function(t,n,r){return o.f(t,n,a(1,r))}:function(t,n,r){return t[n]=r,t}},60:function(t,n,r){var e=r(0),o=r(36),a=e.WeakMap;t.exports="function"==typeof a&&/native code/.test(o.call(a))},61:function(t,n,r){var e=r(37),o=r(27),a=r(45),i=r(7);t.exports=e("Reflect","ownKeys")||function(t){var n=o.f(i(t)),r=a.f;return r?n.concat(r(t)):n}},7:function(t,n,r){var e=r(5);t.exports=function(t){if(!e(t))throw TypeError(String(t)+" is not an object");return t}},8:function(t,n,r){var e=r(1);t.exports=!e((function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a}))},9:function(t,n,r){var e=r(8),o=r(35),a=r(7),i=r(19),u=Object.defineProperty;n.f=e?u:function(t,n,r){if(a(t),n=i(n,!0),a(r),o)try{return u(t,n,r)}catch(t){}if("get"in r||"set"in r)throw TypeError("Accessors not supported");return"value"in r&&(t[n]=r.value),t}}});
 $('#rateMe3').mdbRate();
 $('#rateMe3').click(function(){
    console.log($(this).val());
 });
  const owl = $("#top_rated_hotels");
          owl.owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            lazyLoad: true,
            autoplay:true,
            infinite: true,
            smartSpeed: 800,
            nav: false,
            items: 3,

          });
          $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
          });
          $('.customPreviousBtn').click(function() {
            owl.trigger('prev.owl.carousel');
          });
    });
</script>

@endsection