  <!-- sponsor area start -->
        <div class="sponsor-section theme-section-2 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sponsor-thumbnail-wrapper" style="background: #eaeaea; padding: 15px; box-shadow: 1px 2px 3px rgba(0,0,0,0.2);">
                            
                            @foreach(footerclub() as $row)
                            <div class="single-sponsor-thumb">
                                <img src="{!! url('public/uploads/club/'.$row->icon)!!}" style="width:100px; height:100px; margin: 15px auto;
                                ">
                                <h5><strong>{{$row->title}}</strong></h5>
                                    
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sponsor area end -->