 <!-- Footer section start -->
        <footer class="theme-footer-section">
            <!-- Footer top section start -->
            <div class="footer-top-area color red-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <aside class="footer-widget">
                                <a class="logo" href="{{url('/')}}">LIONSCLUB</a>
                                <div class="footer-widget-content">
                                    <p>Lions Club of Nepal falls under the district 325, further divided into 4 multiple districts; A1, A2, B1 and B2</p>
                                    <ul class="contact-address">
                                        <li><i class="fa fa-map-marker"></i> Biratnagar ,  Nepal</li>
                                        <li><i class="fa fa-phone"></i> +8 12 234 313</li>
                                        <li><a href="mailto:admin@yourdomain.com"><i class="fa fa-envelope-o"></i> mail@leonepal.com</a></li>
                                    </ul>
                                    <ul class="contact-social-menu">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">tags</h3>
                                <div class="footer-widget-content">
                                    <ul class="footer-tags">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('gallery')}}">Gallery</a></li>
                                        <li><a href="{{url('about')}}">About us</a></li>
                                        <li><a href="{{url('history')}}">History</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                        <li><a href="{{url('nlf')}}">NLF</a></li>
                                        <li><a href="{{url('mjf')}}">MJF</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="footer-widget">
                                <h3 class="footer-widget-title">quick links</h3>
                                <div class="footer-widget-content">
                                    <ul class="quick-link">
                                        <li><a href="{{url('about')}}">about us</a></li>
                                        <li><a href="{{url('blog-left-sidebar')}}">Recent Activities</a></li>
                                        <li><a href="{{url('event-grid-view')}}">upcoming events</a></li>
                                        <li><a href="#">popular news</a></li>
                                        <li><a href="{{url('contact')}}">contact us</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Subscribe</h3>
                                <div class="footer-widget-content">
                                    <p>Enter your mail address and click 'Subscribe' to get in touch our upcoming events and news.</p>
                                    <p>We Promise We Won't Send You Spam!</p>
                                    {{ Form::open(['url' => 'newsletter', 'class' => 'form-horizontal subscribe-form', 'files'=>'true','role' => 'form', 'method' => 'post']) }}
                                    
                                        <input name="email" placeholder="Your Email Address" required="" type="email">
                                        <button class="subscribe-btn" type="submit">
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer top section end -->
            <!-- Footer Bottom section start -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-right-info">
                                <p>&copy; 2018 <span>lionsclub</span>. All right reserved by <a href="http://cxwebexperts.com/">Freewings</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-main-menu">
                                <ul class="footer-menu">
                                    <li><a href="{{url('/')}}">home</a></li>
                                    <li><a href="{{url('about')}}">about</a></li>
                                    <li><a href="{{url('blog-left-sidebar')}}">causes</a></li>
                                    <li><a href="{{url('event-grid-view')}}">event</a></li>
                                    <li><a href="{{url('video')}}">gallery</a></li>
                                    <li><a href="{{url('contact')}}">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom section end -->
        </footer>
        <!-- Footer section end -->
    </div>
    <!-- Main wrapper end -->
    <!-- All JavaScript files included -->
    <script type="text/javascript" src="{{url('public/js/frontend/freewings/prettify.js')}}"></script>
    
    <script src="{{url('public/humanity/js/jquery.js')}}"></script>
    <script src="{{url('public/humanity/js/vendor/jquery-1.12.4.min.js')}}"></script>

<script src="{{url('public/humanity/js/owl.carousel.min.js')}}"></script>
 

    <script type="text/javascript" src="{{url('public/js/frontend/freewings/jquery-ui.min.js')}}"></script>

    
    <!-- jQuery includes -->
  

    <script type="text/javascript" src="{{url('public/js/frontend/freewings/jquery.jOrgChart.js')}}"></script>
    <script src="{{url('public/humanity/js/plugins.js')}}"></script>
    <script src="{{url('public/humanity/js/scripts.js')}}"></script>


 <script>
    jQuery(document).ready(function() {

$('.slider-class .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    autoplay: true,
    items: 1,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

       
         $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
    });
    </script>
<script>
@if(isset($org_level_all))
    @foreach($org_level_all as $cat)
        $("#org-{{ $cat->id }}").jOrgChart({
            chartElement : '#tab{{ $cat->id }}',
            dragAndDrop  : false
        });
    @endforeach
@endif

         $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
    
    </script>

 <script>
     $(".tab_content").hide();
     $(".tab_content:first").show();

     /* if in tab mode */
     $("ul.tabs li").click(function () {

         $(".tab_content").hide();
         var activeTab = $(this).attr("rel");
         $("#" + activeTab).fadeIn();

         $("ul.tabs li").removeClass("active");
         $(this).addClass("active");

         $(".tab_drawer_heading").removeClass("d_active");
         $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

         /*$(".tabs").css("margin-top", function(){
            return ($(".tab_container").outerHeight() - $(".tabs").outerHeight() ) / 2;
         });*/
     });

     $(".tab_drawer_heading").click(function () {

         $(".tab_content").hide();
         var d_activeTab = $(this).attr("rel");
         $("#" + d_activeTab).fadeIn();

         $(".tab_drawer_heading").removeClass("d_active");
         $(this).addClass("d_active");

         $("ul.tabs li").removeClass("active");
         $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
     });


     var isAllShowing = false;

     var hideAdditionalThumbs = function() {
         var elements = $('.btns-container .leo-btn');
         if (elements.length > 5) {
             for (var i = 5; i < elements.length; i++) {
                 $(elements[i]).hide();
             }
         }
     };
     hideAdditionalThumbs();

     $('#loadMore').click(function() // show them all
     {
         if (isAllShowing){
             hideAdditionalThumbs();
             isAllShowing = false;
             $('#loadMore').html('See More');
         } else {
             $('.btns-container .leo-btn').show();
             isAllShowing = true;
             $('#loadMore').html('See Less');
         }
     });

     $('#showLess').click(hideAdditionalThumbs);





 </script>

 <script type="text/javascript">
   


   $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
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

 
 @yield('after-scripts')
</body>

</html>