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
        <div class="" style="height:5% !important">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- template breadcrumb end -->
        <!-- Page content area start -->
        <section class="content">
            <!-- Single event area start -->
            <div class="single-event-section theme-section gray-bg">
                <!--<h1 style="margin: 0 0 9px 119px;">{{$data->title}}</h1>-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 toppage">
                            <div class="sidebar-widgets right-sidebar">
                                <aside class="single-widget">
                                    <div class="search-widget">
                                        <form action="#" class="search-form">
                                            <input type="text" placeholder="Search....." disabled="">
                                            <button type="submit" disabled=""><i class="bi bi-search"></i></button>
                                        </form>
                                    </div>
                                </aside>

                                <aside class="single-widget">
                                    <h4>Table Of Content</h4>
                                    <div class="popular-news">
                                        @foreach($alldata as $row)
                                        <div class="single-popular-news">
                                            <div class="popular-news-thumb">
                                                <a href="{{url('content/other',$row->id)}}"><img src="{{url('public/uploads/'.$row->file)}}" alt="" style="width:100px;height: 100px "></a>
                                            </div>
                                            <div class="popular-news-content">
                                                <h6><a href="{{url('content/other/'.$row->id)}}">{{$row->title}}</a></h6>
                                                <p>{{$row->created_at->diffForHumans()}}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </aside>
                                <aside class="single-widget">
                                    <h4>Calendar</h4>
                                    <div id="my-calendar"></div>
                                </aside>
                            </div>
                        </div>
                        <div class="col-md-8 toppage">
                            <article class="blog-post">
                                <div class="post-thumbnail">
                                    <img src="{!! url('public/uploads/'.$data->file) !!}" alt="">
                                </div>
                                <div class="post-content">
                                    <center><h5 class="post-title">{{$data->title}}</h5></center>
                                    
                                    {!!$data->body!!}
                                    
                                    {{-- <div class="row">
                                        <div class="col-sm-6">
                                            <div class="post-content-inner">
                                                <img src="img/blog/1.jpg" alt="">
                                                <!--<p>Lorem ipsum dolor sit amet.</p>-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-content-inner">
                                                
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                    
                                </div>
                            </article>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Single event area end -->
      @include('frontend.humanity.include.footerclub')
           
        </section>
        @endsection