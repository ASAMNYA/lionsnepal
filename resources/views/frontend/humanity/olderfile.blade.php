 @extends('frontend.humanity.master')
 
      @section('content')
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
     
        <!-- template breadcrumb end -->
        <!-- Page content area start -->
        <section class="content">
            <!-- Single event area start -->
            <div class="single-event-section theme-section gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <article class="blog-post">
                                <div class="post-thumbnail">
                                    <img src="{!! url('public/uploads/'.$blogshow->image)!!}" alt="">
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title">{{$blogshow->title}}</h5>
                                    <ul class="event-meta">
                                        <li><a href="#"><i class="fa fa-tag"></i>{{$blogshow->category->title}}</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>{{Carbon\Carbon::parse($blogshow->created_at)->format('M-d-Y')}}</a></li>
                                    </ul>
                                    <p>{!!$blogshow->description!!}</p>
                                    
                                    
                                    
                                    
                                    <div class="post-share">
                                        <div class="post-tags">
                                            <span>Tags: </span>
                                            <ul class="post-tag-list">
                                                <li><a href="#">{{$blogshow->category->title}}</a></li>
                                               
                                            </ul>
                                        </div>
                                        <div class="post-menu">
                                            <ul class="post-menu-list">
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="sidebar-widgets right-sidebar">
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
                                        @foreach($data as $row)
                                        <ul class="post-category-list">
                                            <li><a href="#"><i class="fa fa-angle-right"></i>travel <span>{{$row->title}}</span></a></li>
                                            
                                        </ul>
                                        @endforeach
                                    </div>
                                </aside>
                                
                                <aside class="single-widget">
                                    <h4>Calendar</h4>
                                    <div id="my-calendar"></div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single event area end -->
            <!-- sponsor area start -->
            <div class="sponsor-section theme-section-2 white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sponsor-thumbnail-wrapper">
                                <div class="single-sponsor-thumb">
                                    <img src="img/sponsor/1.png" alt="">
                                </div>
                                <div class="single-sponsor-thumb">
                                    <img src="img/sponsor/2.png" alt="">
                                </div>
                                <div class="single-sponsor-thumb">
                                    <img src="img/sponsor/3.png" alt="">
                                </div>
                                <div class="single-sponsor-thumb">
                                    <img src="img/sponsor/4.png" alt="">
                                </div>
                                <div class="single-sponsor-thumb">
                                    <img src="img/sponsor/5.png" alt="">
                                </div>
                                <div class="single-sponsor-thumb">
                                    <img src="img/sponsor/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sponsor area end -->
        </section>
        @endsection