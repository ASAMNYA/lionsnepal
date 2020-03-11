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
                        &nbsp;
                        
                        
                        <div class="col-md-10 col-sm-12">
                            <h3>All Events</h3>
                            @foreach($event as $row)
                            <article class="blog-post">
                                <div class="post-thumbnail">
                                    <a href="{{url('/eventpage',$row->id)}}"><img src="{!! url('public/uploads/'.$row->image)!!}" alt=""></a>
                                    
                                </div>
                                
                                <div class="post-content">
                                    <h5 class="post-title"><a href="{{url('/eventpage',$row->id)}}">{{$row->name}}</a></h5>
                                    <ul class="event-meta">

                                        <li><i class="fa fa-calendar"></i>&nbsp;{{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}</li>

                                    </ul>
                                    {!! Str::words($row->description, 8,'....')  !!}
                                    <a class="text-link" href="{{url('/eventpage',$row->id)}}">learn more</a>
                                </div>

                            </article>
                            <br/>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single event area end -->
      @include('frontend.humanity.include.footerclub')
            
        </section>
        <!-- Page content area end -->
      @endsection