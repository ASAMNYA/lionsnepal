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
                        <h3 class="breadcrumb-title">Events</h3>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home </a></li>
                                <li>All Event</li>
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
                       @foreach($event as $row)  
                            <div class="col-md-6 col-sm-6">
                                <article class="single-event">
                                    <div class="event-thumb">
                    <a href="#"><img src="{!! url('public/uploads/'.$row->image)!!}" style="width:350px; height:250px;" alt=""></a>
                                    </div>
                                    <div class="event-content event-content-2">
                                        <h5 class="single-event-title">
                                            <a href="{{url('/eventpage',$row->id)}}">{{$row->name}}</a></h5>
                                        <ul class="event-meta">
                                            <li><a href="#"><i class="fa fa-tag"></i>Events</a></li>
                                            <li><a href="#">
                                            <i class="fa fa-calendar"></i>Date {{Carbon\Carbon::parse($row->start_date)->format('M-d-Y')}}
                                                </a></li>
                                        </ul>
                                    </div>
                                </article>
                                &nbsp;
                            </div>
                       @endforeach 
                    </div>
                    {!! $event->render() !!}
                   
                    </div>
                </div>
            </div>
            <!-- Single event area end -->
      @include('frontend.humanity.include.footerclub')
       
        </section>
        <!-- Page content area end -->
        <!-- Footer section start -->
       @endsection