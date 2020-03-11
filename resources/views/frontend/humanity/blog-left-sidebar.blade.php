  @extends('frontend.humanity.master')
      @section('content')
        <!-- Full width search section start -->
        
        <!-- Full width search section end -->
        <!-- Header area end -->
        <!-- template breadcrumb start -->
      
        <!-- template breadcrumb end -->
        <!-- Page content area start -->
        <section class="content">
            <!-- Single event area start -->
            <div class="single-blog-section theme-section gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="sidebar-widgets">
                               
                                <aside class="single-widget">
                                    <hr/>
                                    <h4>Categories</h4>
                                    <div class="categories">

                                        @foreach($category as $row)
                                        <ul class="post-category-list">
                                            <li><a href="{{url('showblogbycat',$row->id)}}"><i class="fa fa-angle-right"></i>{{$row->title}}</a></li>
                                            <br/>
                                            
                                        </ul>
                                        @endforeach
                                    </div>
                                </aside>
                                <aside class="single-widget">
                                    <h4>Other Activity</h4>
                                    <div class="popular-news">
                                        @foreach($popular as $row)
                                        <div class="single-popular-news">
                                            <div class="popular-news-thumb">
                                                <a href="{{url('/blogshow',$row->id)}}"><img src="{!! url('public/uploads/'.$row->image)!!}" style="width:120px; height:80px;alt=""></a>
                                            </div>
                                            <div class="popular-news-content">
                                                <h6><a href="{{url('/blogshow',$row->id)}}">{{$row->title}}</a></h6>
                                                <p><a href="#">{{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}</a></p>
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
                        <div class="col-md-8 col-sm-12">
                            <h3> Recent Activity</h3>
                            @foreach($blog as $row)
                            <article class="blog-post">
                                <div class="post-thumbnail">
                                    <a href="{{url('/blogshow',$row->id)}}"><img src="{!! url('public/uploads/'.$row->image)!!}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="{{url('/blogshow',$row->id)}}">{{$row->title}}</a></h5>
                                    <ul class="event-meta">
                                        <li><a href="#"><i class="fa fa-tag"></i>{{$row->category->title}}</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>{{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}</a></li>
                                    </ul>
                                    {!! Str::words($row->description, 8,'....')  !!}
                                    <a class="text-link" href="{{url('/blogshow',$row->id)}}">learn more</a>
                                </div>
                            </article>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            &nbsp;
            <!-- Single event area end -->
      @include('frontend.humanity.include.footerclub')
            
        </section>
        <!-- Page content area end -->
      @endsection