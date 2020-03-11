  @extends('frontend.humanity.master')
      @section('content')
      
      <style>
          .area-heading
          {
          width:100%;    
          }
      </style>
        <!-- Full width search section start -->
        <!--<div class="full-width-search-wrapper">-->
        <!--    <div class="search-area">-->
        <!--        <p class="search-closer"><i class="fa fa-times"></i></p>-->
        <!--        <form action="#" class="full-width-search-form">-->
        <!--            <input type="text" placeholder="Enter keyword.." id="search-keyword">-->
        <!--            <button type="submit"><i class="fa fa-search"></i></button>-->
        <!--        </form>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Full width search section end -->
        <!-- Header area end -->
        <!-- template breadcrumb start -->
        
        <!-- template breadcrumb end -->
        <!-- Page content area start -->
        <section class="content">
                <br/>
            <!-- Contact area start -->
            <div id="humanity-contact-id" class="theme-section contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="area-heading text-center">
                                <h2 class="area-title">Contact us</h2>
                                <p>We Serve</p>
                                    <div class="row">
                                                       
                        <div class="col-md-12 col-sm-12">
                            <div class="contact-page-area">
                                <form id="humanity-contact-form" action="#" method="POST" class="contcat-form">
                                    <div class="form-head fix">
                                        <div class="marg-area">
                                            <input type="text" name="title" placeholder="Title" Required>
                                        </div>
                                        <div class="marg-area">
                                            <input type="email" name="email" placeholder="Email" Required>
                                        </div>
                                    </div>
                                        <div class="marg-area">
                                            <input type="tel" name="phone" placeholder="Phone" Required>
                                        </div>
                                    <div class="form-body">
                                        <textarea name="message" class="text-area" rows="10" placeholder="Message" Required></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit">send message</button>
                                </form>
                                <p class="humanity-form-send-message"></p>
                            </div>
                        </div>                           
                    </div> 
                            </div>
                            
                        </div>
                    </div>
                    
                                  
                </div>
            </div>
            <!-- Contact area end -->

        </section>
        <!-- Page content area end -->
       @endsection