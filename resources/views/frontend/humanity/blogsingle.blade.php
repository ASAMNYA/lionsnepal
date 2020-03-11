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
                                            <span>Tags:</span>{{$blogshow->category->title}}
                                           
                                        </div>
                                        <div class="post-menu">
                                           
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="sidebar-widgets right-sidebar">
                                <aside class="single-widget">
                                    <div class="search-widget">
                                       
                                    </div>
                                </aside>
                                <aside class="single-widget">
                                    <h4>Categories</h4>
                                    <div class="categories">
                                        @foreach($data as $row)
                                        <ul class="post-category-list">
                                            <li><a href="#"><i class="fa fa-angle-right"></i> {{$row->title}}</a></li>
                                            
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
      @include('frontend.humanity.include.footerclub')
           
        </section>
        @endsection