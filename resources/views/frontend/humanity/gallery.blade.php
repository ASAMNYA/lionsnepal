
@extends('frontend.humanity.master')
@section('content')


    <section class="content">


      <div class="row">
        <div class="container">       
            
             <div class="portfolio-container">
                 @foreach($data as $field)

                 <div class="portfolio-description">
                     
                    
                    <center><h4 style="color:#286090;"><a href="#">{{$field->title}}</a></h4></center>
                                            
                    

                </div>&nbsp;


                    <div class="row">
                    
                    <div class="container">

                            @foreach(json_decode($field->photos, true) as $photos)

                                    <div class="col-md-6">


                                    <div class="thumbnail">
                                    <a href="{{url('publicmultipleimages/'.$photos)}}">
                                    <img src="{{asset('publicmultipleimages/'.$photos)}}" alt="Lights" style="width:480px; height: 400px;">
                                    <div class="caption">
                                    <p>{{$photos}}</p>
                                    </div>
                                    </a>
                                    </div>

                            </div>
                            @endforeach

                        </div>
                @endforeach
                
                </div>
                
                </div>


            </div>

            </div>
        </div>



        @include('frontend.humanity.include.footerclub')

    </section>
    <!-- Page content area end -->
@endsection