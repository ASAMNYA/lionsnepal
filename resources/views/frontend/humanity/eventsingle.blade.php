 @extends('frontend.humanity.master')
      @section('content')
        <!-- Header area end -->
        <!-- Full width search section start -->
        <div class="full-width-search-wrapper">
            <div class="search-area">
                <p class="search-closer"><i class="fa fa-times"></i></p>
                <form action="#" class="full-width-search-form">
                    <input type="text" placeholder="Enter keyword.." id="search-keyword">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!-- Full width search section end -->
        <!-- Header area end -->
        <!-- template breadcrumb start -->
        <!--<div class="theme-section breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">Single Event</h3>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home </a></li>
                                <li>Single Event</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- template breadcrumb end -->
        <!-- Page content area start -->
        <section class="content">
            <!-- Single event area start -->
            <div class="single-event-section theme-section gray-bg">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="sidebar-widgets">
                                <aside class="single-widget">
                                    <div class="search-widget">
                                        <form action="#" class="search-form">
                                            <input type="text" placeholder="Search.....">
                                            <button type="submit"><i class="bi bi-search"></i></button>
                                        </form>
                                    </div>
                                </aside>
                                <aside class="single-widget">
                                    <h4>Categories</h4>
                                    <div class="categories">
                                        @foreach($category as $row)
                                        <ul class="post-category-list">
                                            <li><a href="#"><i class="fa fa-angle-right"></i>{{$row->title}}<span>[8]</span></a></li>
                                            
                                        </ul>
                                        @endforeach
                                    </div>
                                </aside>
                                <!--<aside class="single-widget">-->
                                <!--    <h4>popular events</h4>-->
                                <!--    <div class="popular-news">-->
                                <!--        @foreach($event as $row)-->
                                <!--        <div class="single-popular-news">-->
                                <!--            <div class="popular-news-thumb">-->
                                <!--                <a href="#"><img src="img/event/widget/1.jpg" alt=""></a>-->
                                <!--            </div>-->
                                <!--            <div class="popular-news-content">-->
                                <!--                <h6><a href="#">food campaigning for children</a></h6>-->
                                <!--                <p><a href="#">4 Aug 2017</a></p>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        @endforeach-->
                                        
                                <!--    </div>-->
                                <!--</aside>-->
                                <aside class="single-widget">
                                    <h4>Tags</h4>
                                    <div class="tags">
                                        <a href="#">charity</a>
                                        <a href="#">event</a>
                                        <a href="#">education</a>
                                        <a href="#">health</a>
                                        <a href="#">food</a>
                                        <a href="#">home</a>
                                    </div>
                                </aside>
                                <aside class="single-widget">
                                    <h4>Calendar</h4>
                                    <div id="my-calendar"></div>
                                </aside>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <article class="single-event">
                                <div class="event-thumb">
                                    <a href="#"><img src="{!! url('public/uploads/'.$eventshow->image)!!}" alt=""></a>
                                    <p class="event-post-date"><span>{{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}</span></p>
                                </div>
                                <div class="event-content">
                                    <h5 class="single-event-title">{{$eventshow->name}}</h5>
                                    <p>{!!$eventshow->description!!}</p>
                                    
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single event area end -->
      @include('frontend.humanity.include.footerclub')
       
        </section>
        <!-- Page content area end -->
        <!-- Footer section start -->
       @endsection