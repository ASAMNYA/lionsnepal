


@extends('frontend.humanity.master')
@section('content')
    <!-- Full width search section start -->
    <div class="full-width-search-wrapper">
        <div class="search-area">
            <p class="search-closer"><i class="fa fa-times"></i></p>

        </div>
    </div>
    <!-- Full width search section end -->
    <!-- Slider area start -->
    <section id="slider-section" class="slider-class">
        <div>
            <div class="single-slider videoWrapper">

                @if(!empty(videoforindex()->title))

                
                {!! videoforindex()->description !!}
                @else
                 
                    <iframe src="https://www.youtube.com/embed/wb2LoYoz8Pg"
                             frameborder="0">
                    </iframe>

                @endif

            </div>
        </div>
    </section>
    <!-- Slider area end -->
    <!-- Page content area start -->
    <section class="content">
        <!-- Donet section start -->
        <div class="donet-section theme-section theme-section-ex-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 slid">
                        <div class="area-heading text-center">
                            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                  $("#toggle").click(function() {
                                    var elem = $("#toggle").text();
                                    if (elem == "Read More") {
                                      //Stuff to do when btn is in the read more state
                                      $("#toggle").text("Read Less");
                                      $("#text").slideDown();
                                    } else {
                                      //Stuff to do when btn is in the read less state
                                      $("#toggle").text("Read More");
                                      $("#text").slideUp();
                                    }
                                  });
                                });
                            </script>
                            <style type="text/css">
                                .text {
                                    display: none;
                                }
                                .btn-container{
                                    margin: auto;
                                    height:11px;
                                    width:166.23px; 
                                }
                                #toggle{
                                    background: #d6ae00;
                                }
                                button{
                                  cursor:pointer;
                                  border:none;
                                  padding:2px;
                                  font-size:14px;
                                  background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
                                  color:white;
                                  font-family:cursive;
                                  box-sizing:border-box;
                                }

                            </style>
                            <h3 class="area-title">Welcome TO Lions Club 325 B2 Nepal</h3>
                            Former Prime minister Lion Matrika Prashad Koirala established the first lion Club
                            in Nepal, Lions Club Of Biratnagar in 1971A.D (2043 B.S). Since then, the number has
                            been increasing and It has reached 800 till the date. Lions Club of Nepal falls
                            under the district 325, further divided into 4 multiple districts; A1, A2, B1 and
                            B2.
                            <div>
                                <br>
                                <span id="text" >
                                    District 325B2 is standing as a big district in context of Nepal expanding from far
                                    western region of country to some regions of Kathmandu valley covering about 60% of
                                    geographical area.
                                </span>
                            </div>
                            <div class="btn-container">
                                <button id="toggle">Read Less</button>
                            </div>  

                    </div>
                    <br>
                    
<!--start-->
                     <div class="clearfix"></div>
                       <div class="container mail">

                          <div id="notic"  class="row">
                        
                        
                              <div  class="  col-md-12 one" style=" width: 71%; margin-top: -2%; margin-left: 160px;">
                                   <nav class="navbar navbar-default">                          
                                      <div class="navbar-header">
                                          <button type="button" data-target="#navbar3" data-toggle="collapse" class="navbar-toggle">
                                              <span class="sr-only">Toggle navigation</span>
                                              <span class="icon-bar"></span>
                                              <span class="icon-bar"></span>
                                              <span class="icon-bar"></span>
                                          </button>
                                       </div>
                                     <div  id="navbar3" class="navbar-collapse collapse">       
                                         <ul class="nav nav-tabs">
                                             <li class="active"><a data-toggle="tab" href="#menu2" style="font-size:16px;"><strong>News</strong></a></li>                              
                                             <li class="mynotice"><a data-toggle="tab" href="#menu22" style="font-size:16px;"><strong>  Notice</strong></a></li>
                                             <li  class="mynotice"><a data-toggle="tab" href="#menu32" style="font-size:16px;"><strong>Press Release</strong></a></li>
                                             <li  class="mynotice"><a data-toggle="tab" href="#menu42" style="font-size:16px;"><strong>Books</strong></a></li>
                                    
                                         </ul>
                                     </div>
                                  </nav>

                        <div class="tab-content">
                            <style>.tab-content .tab-pane{
                                border: 1px solid #286090 !important;
                            }</style>
            
                                     <!-- TAB (HOME) start -->
            
                                       <!-- TAB (HOME) close -->
                
            
                            <div id="menu2" class="tab-pane fade in active  " style="border: 1px solid #bbb; padding: 15px; border-radius: 7px; box-shadow: 1px 2px 3px rgba(0,0,0,0.4);">
                                @foreach($olderfilenews as $row)
                                <div class="row">
                                    {{--  @foreach($olderfilenews->take(1) as $row) --}}
                                    <div class="col-md-2" style="padding-top:30px; padding-right:20px;">
                                        <img src="{!!
                                        url('public/uploads/'.$row->file)!!}">
                                        <br><br>
                                    </div>
                                    {{-- @endforeach --}}
                                    <div class="col-md-10">
                                        <h3 style="margin-left: 0px; padding: 0px;; border-bottom: 2px solid #286090; padding-bottom: 10px;">{!! $row->title !!}</h3>
                                            <p>
                                            {!!$row->description !!}
                                            </p>
                                        <p>{!! $row->created_at->DiffForhumans() !!} </p>
                                        
                                    </div>
                                </div> 
                                @endforeach  
                                <a href="#" class="btn btn-primary pull-right btn-xs">View More</a> <br><br> 
                            </div>

                               <div id="menu22" class="tab-pane fade in  " style="border: 1px solid #bbb; padding: 15px; border-radius: 7px; box-shadow: 1px 2px 3px rgba(0,0,0,0.4);">
                                @foreach($olderfilenews as $row)
                                <div class="row">
                                    {{--  @foreach($olderfilenews->take(1) as $row) --}}
                                    <div class="col-md-2" style="padding-top:30px; padding-right:20px;">
                                        <img src="{!!
                                        url('public/uploads/'.$row->file)!!}">
                                        <br><br>
                                    </div>
                                    {{-- @endforeach --}}
                                    <div class="col-md-10">
                                        <h3 style="margin-left: 0px; padding: 0px;; border-bottom: 2px solid #286090; padding-bottom: 10px;">{!! $row->title !!}</h3>
                                            <p>
                                            {!!$row->description !!}
                                            </p>
                                        <p>{!! $row->created_at->DiffForhumans() !!} </p>
                                        
                                    </div>
                                </div> 
                                @endforeach  
                                <a href="#" class="btn btn-primary pull-right btn-xs">View More</a> <br><br> 
                            </div>

                               <div id="menu32" class="tab-pane fade in   " style="border: 1px solid #bbb; padding: 15px; border-radius: 7px; box-shadow: 1px 2px 3px rgba(0,0,0,0.4);">
                                @foreach($olderfilenews as $row)
                                <div class="row">
                                    {{--  @foreach($olderfilenews->take(1) as $row) --}}
                                    <div class="col-md-2" style="padding-top:30px; padding-right:20px;">
                                        <img src="{!!
                                        url('public/uploads/'.$row->file)!!}">
                                        <br><br>
                                    </div>
                                    {{-- @endforeach --}}
                                    <div class="col-md-10">
                                        <h3 style="margin-left: 0px; padding: 0px;; border-bottom: 2px solid #286090; padding-bottom: 10px;">{!! $row->title !!}</h3>
                                            <p>
                                            {!!$row->description !!}
                                            </p>
                                        <p>{!! $row->created_at->DiffForhumans() !!} </p>
                                        
                                    </div>
                                </div> 
                                @endforeach  
                                <a href="#" class="btn btn-primary pull-right btn-xs">View More</a> <br><br> 
                            </div>
                            <div id="menu42" class="tab-pane fade in   " style="border: 1px solid #bbb; padding: 15px; border-radius: 7px; box-shadow: 1px 2px 3px rgba(0,0,0,0.4);">
                                @foreach($olderfilenews as $row)
                                <div class="row">
                                    {{--  @foreach($olderfilenews->take(1) as $row) --}}
                                    <div class="col-md-2" style="padding-top:30px; padding-right:20px;">
                                        <img src="{!!
                                        url('public/uploads/'.$row->file)!!}">
                                        <br><br>
                                    </div>
                                    {{-- @endforeach --}}
                                    <div class="col-md-10">
                                        <h3 style="margin-left: 0px; padding: 0px;; border-bottom: 2px solid #286090; padding-bottom: 10px;">{!! $row->title !!}</h3>
                                            <p>
                                            {!!$row->description !!}
                                            </p>
                                        <p>{!! $row->created_at->DiffForhumans() !!} </p>
                                        
                                    </div>
                                </div> 
                                @endforeach  
                                <a href="#" class="btn btn-primary pull-right btn-xs">View More</a> <br><br> 
                            </div>
 <!--close of menu22  -->
                             </div>  <!-- tab-content -->
                            </div>     
                           </div>       
                       </div>                     

                    
                    
                    
                    
                </div>
                <div class="row">
                    <div class="col-md-12 slid">
                        <div class="donate-feature-list navigation-style-1 message-wrapper">


                            @if(empty($postdata->image))

                                @foreach($postdata as $row)


                                    <div class="single-donet">
                                        <div class="donet-thumbnail">
                                            <img src="{{url('public/uploads/',$row->image)}}"
                                                 style="width:325px; height:325px; " alt="">
                                        </div>
                                        <div class="donet-content">
                                            <div class="donet-content-heading">
                                                <h3><a href="{{url('post/readmore',$row->id)}}">{{$row->title}}</a></h3>
                                                <ul class="event-meta">

                                                </ul>

                                                <p>{!!$row->description!!}</p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            @else
                                <div class="single-donet">
                                    <div class="donet-thumbnail">
                                        <img src="{{url('public/humanity/img/feature/1.jpg')}}"
                                             style="width:325px; height:325; " alt="">
                                    </div>
                                    <div class="donet-content">
                                        <div class="donet-content-heading">
                                            <h3><a href="#">Message from District Governer</a></h3>
                                            <ul class="event-meta">
                                                {{-- <li><a href="#"><i class="fa fa-tag"></i></a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i></a></li>
                                            --}} </ul>
                                            <p>our District is organising Mega Tree plantation program at dream project
                                                "Lions Park" place at Tarkeswor, View Tower on August 29, 2017 sharp
                                                time 8:00am. More than 110 clubs and over 500 Lions are going to
                                                particpate and planning to...</p>
                                        </div>
                                    </div>
                                </div>

                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="directory_tree">
            <div class="row">
                <div class="container">
                    <div class="book-like">

                        <div class="area-heading text-center">
                            <h2 class="area-title">District Directory 2018/2019</h2>

                        </div>
                        {{--links container starts --}}
                        <div class="btns-container">
                            @foreach($contentother as $row)
                                <a href="{{url('content/other',$row->id)}}"
                                   class="btn btn-primary leo-btn">{{$row->title}}</a>
                            @endforeach
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" id="loadMore">See More</button>
                        </div>
                        {{--links container ends--}}
                        <div id="table-of-content">
                            <div class="">
                                <div class="tabs_wrapper">
                                    <ul class="tabs well well-sm pre-scrollable">
                                        @php
                                            $indexx=0;
                                        @endphp
                                        @foreach($org_level_all as $clubdata)
                                            <li class="{{ $loop->first ? 'active' : '' }}"
                                                rel="tab{{$clubdata->id}}"><img src="{{url('public/uploads/logo.png')}}"
                                                                                alt="">{{$indexx++}}.
                                                &nbsp;{{$clubdata->title}}</li>
                                        @endforeach
                                    </ul>

                                    <div class="tab_container">
                                        @foreach($org_level_all as $cat)
                                            <h3 class="{{ $loop->first? 'active': '' }} tab_drawer_heading"
                                                rel="tab{{ $cat->id }}"><img src="{{url('public/uploads/logo.png')}}"
                                                                             alt="">{{$cat->title}}</h3>
                                            <div id="tab{{ $cat->id }}" class="tab_content">
                                                {{--<h2 class="text-center">{{$cat->title}}</h2>--}}
                                                <ul id="org-{{ $cat->id }}" style="display: none">
                                                    @php
                                                        $members = $cat->members->toTree();
                                                    @endphp

                                                    @include('frontend.humanity.chart-partials', ['members' => $members])
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- .tab_container -->
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Donet section end -->
        <!-- Event section start  -->
        <div class="event-section theme-section gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading text-center">
                            <h2 class="area-title">Upcoming Lions Events</h2>
                           
                        </div>

                        <div class="row">
                    @foreach($event as $row)
                        <div class="col-md-4 col-sm-6">
                            <article class="single-event">
                                <div class="event-thumb">
                                    <a href="#"><img src="{!! url('public/uploads/'.$row->image)!!}"
                                                     style="width:350px; height:250px;" alt=""></a>
                                </div>
                                <div class="event-content event-content-2">
                                    <h5 class="single-event-title"><a
                                                href="{{url('/eventpage',$row->id)}}">{{$row->name}}</a></h5>
                                    <ul class="event-meta">
                                        <li><a href="#"><i class="fa fa-tag"></i>Events</a></li>
                                        <li><a href="#"><i
                                                        class="fa fa-calendar"></i>Date {{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}
                                            </a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <a href="{{url('see_all/event')}}"> <button class="btn btn-primary pull-right" id="loadMore">See More Event </button></a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Event section end  -->
        <!-- portfolio area starts -->
        <div class="portfolio-area theme-section white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 areastyle">
                        <div class="area-heading text-center">
                            <h2 class="area-title">Area Cordinator</h2>
                            <p>Area Coordinator works as a bridge between the District and the other lions club. Area
                                coordinator is provided with the duty to report the events and activities of the lions
                                club to the District. He is responsible of reporting all the club progress and ongoing
                                projects at the district meetings. The lions club is also equally responsible to report
                                the club activities to the district and here area coordinator works as a channel. He
                                propose the funds essential for the different club activities and region coordinator is
                                responsible of providing all those information of their respective clubs.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-filter">
                            <ul class="protfolio-filter">
                                <li class="active"><a href="#" data-filter="*">All</a></li>
                                @foreach($regiondata as $field)
                                
                                    <li><a href="#"
                                           data-filter=".cat-{{$field->id}}">{{$field->title}}</a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>

                        <div class="portfolio-container">
                            @foreach($acadata as $field)

                                <div class="cat-{{$field->arearegion->id}} portfolio-item">
                                    <div class="item-content">
                                        <div class="item-thumnail">
                                            <img src="{{url('public/uploads/'.$field->image)}}"
                                                 style="width:377px; height: 200px;" alt="image">
                                            <div class="view-btn">
                                                <a class="view-gallery" data-gall="myGallery"
                                                   href="{{url('public/uploads/'.$field->image)}}"><i
                                                            class="bi bi-plus">{{$field->title}}</i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-description">
                                            <div class="description-content">
                                                <h4><a href="#">{{$field->title}}</a></h4>
                                                <ul class="portfolio-cat">
                                                    <li><a href="#">children</a></li>
                                                    <li><a href="#">Food</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="load-more text-center">
                            <a href="#" class="btn btn-default load-more-btn" style="margin-top: -34px;">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- portfolio area ends -->
        <!-- volunteer section start -->
        <div class="theme-section theme-section-ex-padding gray-bg" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading text-center">
                            <h2 class="area-title">Gallery</h2>
                        </div>
                        <section id="slider-section" class="slider-class">
            <div class="owl-carousel owl-theme">
                @foreach($slider as $row)
                    <div class="single-slider">
                        <img src="{{ url('/public/uploads',$row->image)}}">
                    </div>
                @endforeach
            </div>
        </section>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call to action end -->
        <!-- Donor area starts -->
        <div class="donor-section theme-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading text-center">
                            <h2 class="area-title"><a href='{!! url('/lionsmember'); !!}'>Contact Us</a></h2>
                            <p></p>
                        </div>
                    <div class="row">
                    <div class="col-md-12 no-shadow">
                        <div class="donor-section-wrapper">
                            <div class="single-donor-info">
                                <form action="#">
                                    <div class="donor-information-wrapper">
                                        <h2 class="donor-title">Contact Us</h2>
                                        <div class="donor-information">
                                            <div class="form-group">
                                                <input type="text" class="amount-input" placeholder="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="amount-input" placeholder="Phone" required>
                                                <input type="email" class="amount-input" placeholder="Email" required>
                                            </div>
                                            {{--<div class="donor-amount">--}}
                                            {{--<div class="single-donor-amount">--}}
                                            {{--</div>--}}
                                            {{--<div class="single-donor-amount">--}}
                                            {{--</div>--}}
                                            {{--<div class="single-donor-amount">--}}
                                            {{--</div>--}}
                                            {{--<div class="single-donor-amount">--}}
                                            {{-- <input id="custom-amount" type="number" name="amount" placeholder="Custom Amount"> --}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="form-group">
                                                <textarea rows="3" placeholder="Type your message" required></textarea>
                                            </div>
                                            <button type="submit" class="btn-default btn">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="donor-thumb single-donor-info">
                                @foreach($team2 as $row)
                                    <div class="donor-thumb-wrapper">
                                        <h2 class="donor-title">Active Member</h2>
                                        <img src="{!! url('public/uploads/'.$row->image)!!}" alt="">
                                        <div class="donor-message">
                                            <h3>{{$row->name}}</h3>
                                            {{--
                                            <p>Donated amount :<span> 1500 USD</span></p>
                                            --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- donor area end -->
        <!-- Counter section start -->
    {{--
    <div class="counter-section theme-section-2">
       <div class="container">
          <div class="row">
             <div class="col-md-3 col-sm-6 ">
                <div class="single-counter text-center ">
                   <div class="counter-icon ">
                      <i class="bi bi-love"></i>
                   </div>
                   <div class="counter-content ">
                      <p class="counter ">485</p>
                      <h3>causes solved</h3>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-sm-6 ">
                <div class="single-counter text-center ">
                   <div class="counter-icon ">
                      <i class="bi bi-group"></i>
                   </div>
                   <div class="counter-content ">
                      <p class="counter ">866</p>
                      <h3>volunteers</h3>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-sm-6 ">
                <div class="single-counter text-center ">
                   <div class="counter-icon ">
                      <i class="bi bi-like"></i>
                   </div>
                   <div class="counter-content ">
                      <p class="counter">897</p>
                      <h3>honorable donor</h3>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-sm-6 ">
                <div class="single-counter text-center ">
                   <div class="counter-icon">
                      <i class="bi bi-emo-smile"></i>
                   </div>
                   <div class="counter-content ">
                      <p class="counter ">2050</p>
                      <h3>saved children</h3>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    --}}
    <!-- Counter section end -->
        <!-- Testimonial area start -->
        <div class="theme-section theme-section-ex-padding testimonial-section gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading text-center">
                            <h2 class="area-title">Message From Past District Governer</h2>
                            <p>Message From Our Beloved Members And What They Have To Say</p>
                        </div>
                        <div class="row ">
                    <div class="col-md-12">
                        <div class="testimonial-wrapper navigation-style-1">
                            @foreach($team as $row)
                                <div class="single-testimonial ">
                                    <blockquote>
                                        <img src="{!! url('public/uploads/'.$row->image)!!}" alt=" "
                                             class="client-image" style="height: 194px;width: 259px">
                                        <p class="client-name ">{{$row->name}}<span
                                                    class="designation ">Position:-{{$row->position}}</span></p>
                                        <p class="client-name "><span class="designation ">Club:-{{$row->club}}</span>
                                        </p>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cumque,
                                            quibusdam.</p>-->
                                    </blockquote>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Testimonial area end -->
        <!-- Blog area start -->
        <div class="theme-section blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading text-center">
                            <h2 class="area-title">Recent District Activities</h2>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sunt a recusandae
                                molestias nobis reprehenderit eaque laborum, veritatis accusantium aspernatur?</p>-->
                        </div>
                        <div class="row">
                    @foreach($blog as $row)
                        <div class="col-md-4 col-sm-6">
                            <article class="blog-post">
                                <div class="post-thumbnail">
                                    <a href="{{url('/blogshow',$row->id)}}"><img
                                                src="{!! url('public/uploads/'.$row->image)!!}"
                                                style="width:350px; height:250px;" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="{{url('/blogshow',$row->id)}}">{{$row->title}}</a>
                                    </h5>
                                    <ul class="event-meta">
                                        <li><a href="#"><i class="fa fa-user"></i>{{$row->user->first_name}}</a></li>
                                        <li><a href="#"><i
                                                        class="fa fa-calendar"></i>{{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}
                                            </a></li>
                                    </ul>
                                    <p>{!! Str::words($row->description, 8,'....')  !!}</p>
                                    <a class="text-link" href="{{url('/blogshow',$row->id)}}">learn more</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Blog area end -->


        @include('frontend.humanity.include.footerclub')

    </section>



    <!-- Page content area end -->
@endsection





