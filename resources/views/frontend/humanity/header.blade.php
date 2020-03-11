<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
    {{--  --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lions Club Nepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
    <link rel="icon" href="img/icons/favicon.png">
    <!-- All CSS files included -->
  {{-- <link rel="stylesheet" href="css/bootstrap.min.css"/> --}}

    <link rel="stylesheet" href=" {{url('public/css/frontend/freewings/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{url('public/css/frontend/freewings/jquery.jOrgChart.css')}}">
    <link rel="stylesheet" href=" {{url('public/css/frontend/freewings/custom.css')}}">
    <link rel="stylesheet" href=" {{url('public/css/frontend/freewings/prettify.css')}}">
    <link rel="stylesheet" href=" {{url('public/humanity/css/elements.css')}}">
    <link rel="stylesheet" href=" {{url('public/humanity/css/style.css')}}">
    <link rel="stylesheet" href=" {{url('public/humanity/css/color/red.css')}}">
    <link rel="stylesheet" href=" {{url('public/humanity/css/responsive.css')}}">
    <link rel="stylesheet" href=" {{url('public/humanity/css/mystyle.css')}}">
    <!--<link rel="stylesheet" href=" {{url('public/css/frontend/infinte-slider.css')}}">-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <!-- Modernizr Js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('public/humanity/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('public/humanity/css/owl.theme.default.min.css')}}">
    <script src="{{url('public/humanity/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    
<script src="{{url('public/humanity/js/frontend/bootstrap.min.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{url('public/humanity/css/naresh_buttom.css')}}">




@yield('after-styles')



   
</head>

<body>
    <!-- theme preloader area start -->
    <div id="humanity-preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- theme preloader area end -->
    <!-- Main wrapper start -->
    <div class="wrapper">
        <!-- Header area start -->
        <!-- Header area start -->
        <header class="header-area header-with-countdown header-bottom-bg">
            <div class="header-top-area red-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-md-8">
                            <div class="header-top-left">
                                <ul class="email-phone">
                                    <li><a href="#"><i class="fa fa-envelope"></i> Email: <span class="text-bold">info@lionsclubnepal@gmail.com</span></a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> Call us: <span class="text-bold">+9860072981</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-4">
                            <div class="header-top-right">
                                <ul class="header-social-menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="logo-wrapper customer-logos slider">
                                

                           {{-- @if(!empty(logoforindex()))


                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                              <!-- Indicators -->

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                @foreach(logoforindex() as $row)
                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <div class="container">
                                            <div class="row col-xs-12">
                                                <div class="col-md-2  col-xs-3">
                                                   <img  style="height: 100px; width: auto;" src="{{url('public/uploads/',$row->image)}}">
                                                </div>   
                                                
                                                
                                           </div>
                                      </div>
                                    </div>
                                @endforeach
                              </div>
                      
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                                </div> <!-- Carousel -->

                                 @else

                             <img  style="height: 100px; width: auto;" src="{{url('public/humanity/img/lionlogo_2c.png.jpg')}}">

                          @endif --}}
                                @foreach(logoforindex() as $row)
                                                            
                                <img style="height: 100px; width: auto;" src="{{url('public/uploads',$row->image)}}" class="slide">

                            @endforeach

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="countdown-area"><b style="color:#286090;font-size: 21px;">THE INTERNATIONAL ASSCOCIATION OF LIONS CLUB</b>
                                <br>
                                <b style="color: #286090;font-size: 18px;">(LIONS INTERNATIONAL CLUB)®</b>
                                <br>
                                <b style="color:#286090;font-size: 18px;">DISTRICT 325 B2 NEPAL</b>
                            </div>
                        </div>
                        <div class="col-md-2 hidden-sm hidden-xs">
                            <div class="header-btn">
                                <ul class="header-action">
                                    @if(Auth::check())
                                        <li><a class="btn btn-default" href="{{url('logout')}}">Logout</a></li>
                                        <li><a class="btn btn-default" href="{{url('admin/dashboard')}}">Dashboard</a></li>

                                        @else
                                        <li><a class="btn btn-default" href="{{url('login')}}">Login</a></li>
                                        @endif
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-full-width color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 hidden-xs hidden-sm">
                            <div class="menu-area">
                                <nav class="template-menu">
                                    <ul class="main-menu">
                                        <li><a href="{{url('/')}}">Home</a>
                                       
                                        </li>
                                        
                                       

                                        <li><a href="{{url('gallery')}}">Gallery<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                            <li><a href="{{url('blog-left-sidebar')}}">Recent Activity</a></li>
                                            <li><a href="{{url('audio')}}">Audio Gallery</a></li>
                                            <li><a href="{{url('video')}}">Video Gallery</a></li>
                                            <li><a href="{{url('event-grid-view')}}">Event Gallery</a></li>
                                            </ul>
                                        </li>

                                        
                                        <li><a href="{{url('about')}}">About Us</a>
                                        <ul>
                                   
                                            <li><a href="{{url('about')}}">Who we are</a></li>
                                            <li><a href="{{url('serve')}}">How we serve</a></li>
                                            <li><a href="{{url('lionsmember')}}">Be a lion</a></li>
                                        </ul>
                                        </li>

                                        <li><a href="{{url('mjf')}}">MJF</a>
                                        <ul>
                                            <li><a href="{{url('pmjf')}}">PMJF list</a></li>
                                            <li><a href="{{url('mjf')}}">MJF list</a></li>
                                        </ul>
                                        </li>

                                         <li><a href="{{url('nlf')}}">NLF</a>
                                        <ul>
                                            <li><a href="{{url('nlf')}}">NLF list</a></li>
                                            <li><a href="{{url('pnlf')}}">PNLF list</a></li>
                                        </ul>
                                        </li>


                                        <li><a href="{{url('history')}}">History</a>
                                        <ul>
                                            <li><a href="{{url('history')}}">Lions history</a></li>
                                            <li><a href="#">Past Multiple Chairpersion</a></li>
                                            <li><a href="#">Past District Governer</a></li>
                                        </ul>
                                        </li>

                                          <li><a href="#">Leo District<i class="fa fa-angle-down"></i></a>






                                        
                                        <li><a href="{{url('contact')}}">contact</a></li>
                                        <!--<li><a href="https://drive.google.com/file/d/1OEX6Yxti0mtvhcpT5iHLcagvxpxWAP2P/view">APK</a></li>-->
                                        <li><a href="{{url('allapilinks')}}">API</a></li>
                                        
                                        
                                    </ul>

                                </nav>
                            </div>
                        </div>
                        <!-- Mobile menu area start -->
                        <div class="mobile-menu-area clearfix hidden-md">
                            <nav class="mobile-menu">
                                <ul class="mobile-menu-nav">
                                    <li><a href="{{url('/')}}">Home</a>
                                       
                                    </li>
                                    <li><a href="{{url('event-grid-view')}}">event</a>
                                        
                                    </li>
                                    <li><a href="{{url('blog-left-sidebar')}}">blog</a>
                                        <ul>
                                         <li><a href="#">Gallery</a>
                                           
                                        </ul>
                                    </li>
                                     <li><a href="{{url('about')}}">About Us</a>
                                        <ul>
                                            <li><a href="#">Who we are</a></li>
                                            <li><a href="#">How we serve</a></li>
                                            <li><a href="#">Be a lion</a></li>
                                        </ul>
                                        </li>

                                        <li><a href="#">MJF</a>
                                        <ul>
                                            <li><a href="#">PMJF list</a></li>
                                            <li><a href="#">MJF list</a></li>
                                        </ul>
                                        </li>

                                         <li><a href="#">NLF</a>
                                        <ul>
                                            <li><a href="#">NLF list</a></li>
                                            <li><a href="#">PNLF list</a></li>
                                        </ul>
                                        </li>


                                        
                                        <li><a href="#">DEMO</a>
                                        <ul>
                                            <li><a href="http://krishighar.com/lionsclub/samaj-team-members">Demo 2</a></li>
                                           <li><a href="http://krishighar.com/lionsclub/family-report">Demo 3 pdf</a></li>
                                             <li><a href="http://mrsmp.gov.np/crop_statistics.php">Demo 4</a></li>
                                        </ul>
                                        </li>

                                        <li><a href="#">History</a>
                                        <ul>
                                            <li><a href="#">Lions history</a></li>
                                            <li><a href="#">Past Multiple Chairpersion</a></li>
                                            <li><a href="#">Past District Governer</a></li>
                                        </ul>
                                        </li>

                                          <li><a href="#">Leo District<i class="fa fa-angle-down"></i></a>






                                        
                                        <li><a href="{{url('contact')}}">contact</a></li>
                                        
                                    
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Mobile menu area end -->
                        <div class="col-md-2">
                            <div class="header-search text-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header area end -->

<script type="text/javascript">
    
        $(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
</script>