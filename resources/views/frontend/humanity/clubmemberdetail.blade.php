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
                                    <img src="{!! url('public/uploads/'.$data->image)!!}" alt="">
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title">{{$data->title}}</h5>
                                    <ul class="event-meta">
                                        <li><a href="#"><i class="fa fa-tag"></i>{{$data->title}}</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>{{Carbon\Carbon::parse($data->created_at)->format('M-d-Y')}}</a></li>
                                    </ul>
                                  
                                    <p>Position :{!!$data->position!!}</br>     Email :{!!$data->email!!}</br>           Mobile No :{!!$data->mobile!!}</br>    
                                       LandLine :{!!$data->landline!!}</br>
                                          Address : {!!$data->address!!}</br>
                                          Blood Group {!!$data->blood_group!!}</br>
                                         Website {!!$data->website!!}</br>
                                        Description: {!!$data->description!!}</p>                       
                                    
                                    
                                    
                                    <div class="post-share">
                                      
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