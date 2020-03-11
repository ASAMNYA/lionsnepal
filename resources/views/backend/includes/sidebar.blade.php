<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image"/>
            </div><!--pull-left-->
            <div class="pull-left info">
                <p>{{ access()->user()->full_name }}</p>
                <!-- Status -->
                <a href="#"><i
                            class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}
                </a>
            </div><!--pull-left-->
        </div><!--user-panel-->

        <!-- search form (Optional) -->
        {{ Form::open(['route' => 'admin.search.index', 'method' => 'get', 'class' => 'sidebar-form']) }}
        <div class="input-group">
            {{ Form::text('q', Request::get('q'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('strings.backend.general.search_placeholder')]) }}

            <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span><!--input-group-btn-->
        </div><!--input-group-->
    {{ Form::close() }}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            

            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>


@role(1)

    

{{-- 


            <li class="{{ active_class(Active::checkUriPattern('admin/form5')) }}">
                <a href="http://lionscms.lc325b2nepal.org/">
                    <i class="fa fa-dashboard"></i>
                    <span>Lions CLub CMS</span>
                </a>
            </li> --}}


            <li class="{{ active_class(Active::checkUriPattern('admin/mjf')) }} treeview sidebar-darkblue">
                <a href="{{ route('admin.mjf') }}">
                        <i class="fa fa-header"></i>
                    <span><strong>A.</strong>&nbsp;Header</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                    <ul class="treeview-menu {{ active_class(Active::checkUriPattern('student/mjf'), 'menu-open') }}"
                        style="display: none; {{ active_class(Active::checkUriPattern('admin/mjf'), 'display: block;') }}">
                        
                    
                <li class="{{ active_class(Active::checkUriPattern('admin/logo')) }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span><strong>1.</strong>&nbsp;Home</span>
                    </a>
                </li>         

            
                    <li class="{{ active_class(Active::checkUriPattern('admin/mjf')) }} treeview sidebar-bluish">
                        <a href="#">
                            <i class="fa fa-ravelry"></i>
                            <span><strong>2.</strong>&nbsp;MJF</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/mjf'), 'menu-open') }}"
                            style="display: none; {{ active_class(Active::checkUriPattern('admin/mjf'), 'display: block;') }}">

                    <li class="{{ active_class(Active::checkUriPattern('admin/mjf')) }}">
                        <a href="{{ route('admin.mjf') }}">
                            <i class="fa fa-ravelry"></i>
                            <span><strong>2.1</strong>&nbsp;MJF</span>
                        </a>
                    </li>
                    
                     <li class="{{ active_class(Active::checkUriPattern('admin/pmjf')) }}">
                            <a href="{{ route('admin.pmjf') }}">
                                <i class="fa fa-ravelry"></i>
                                <span><strong>2.2.</strong>&nbsp;PMJF</span>

                            </a>
                        </li>
                    

                        </ul>
                    </li>



                        <li class="{{ active_class(Active::checkUriPattern('admin/nlf')) }} treeview sidebar-bluish">
                            <a href="#">
                                <i class="fa fa-clone"></i>
                                <span><strong>3.</strong>&nbsp;NLF</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                            <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/nlf'), 'menu-open') }}"
                                style="display: none; {{ active_class(Active::checkUriPattern('admin/nlf'), 'display: block;') }}">

                        <li class="{{ active_class(Active::checkUriPattern('admin/nlf')) }}">
                            <a href="{{ route('admin.nlf') }}">
                                <i class="fa fa-clone"></i>
                                <span><strong>3.1</strong>&nbsp;NLF</span>
                            </a>
                        </li>
                        
                         <li class="{{ active_class(Active::checkUriPattern('admin/pmjf')) }}">
                                <a href="{{ route('admin.pnlf') }}">
                                    <i class="fa fa-clone"></i>
                                    <span><strong>3.2.</strong>&nbsp;PNLF</span>

                                </a>
                            </li>


                        

                            </ul>
                        </li>



                    <li class="{{ active_class(Active::checkUriPattern('admin/nlf')) }} treeview sidebar-bluish">
                        <a href="#">
                            <i class="fa fa-anchor"></i>
                            <span><strong>4.</strong>&nbsp;About Us</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/aboutus'), 'menu-open') }}"
                            style="display: none; {{ active_class(Active::checkUriPattern('admin/aboutus'), 'display: block;') }}">

                    <li class="#">
                        <a href="#">
                            <i class="fa fa-anchor"></i>
                            <span><strong>4.1</strong>&nbsp;About Us</span>
                        </a>
                    </li>
                    
                     <li class="{{ active_class(Active::checkUriPattern('admin/pmjf')) }}">
                            <a href="#">
                                <i class="fa fa-anchor"></i>
                                <span><strong>4.2.</strong>&nbsp;Who We Are</span>

                            </a>
                        </li>


                     <li class="{{ active_class(Active::checkUriPattern('admin/pmjf')) }}">
                            <a href="#">
                                <i class="fa fa-anchor"></i>
                                <span><strong>4.3.</strong>&nbsp;How We Serve</span>

                            </a>
                        </li>


                          <li class="{{ active_class(Active::checkUriPattern('admin/pmjf')) }}">
                            <a href="#">
                                <i class="fa fa-anchor"></i>
                                <span><strong>4.4.</strong>&nbsp;Be A Lion</span>

                            </a>
                        </li>
                    

                        </ul>
                    </li>
                

            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }} treeview sidebar-violetblue">
                <a href="{{ route('admin.videoupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>5.</strong>&nbsp;Gallery</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/videoupload'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/videoupload'), 'display: block;') }}">
                    

            
            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }}">
                <a href="{{ route('admin.videoupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>5.1.</strong>&nbsp;Video Upload</span>

                </a>
            </li>
            
                
            <li class="{{ active_class(Active::checkUriPattern('admin/formmultiplephotos')) }}">
                <a href="{{ url('admin/formmultiplephotos') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>5.2.</strong>&nbsp;Multiple Photo Upload</span>

                </a>
            </li>


            <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                <a href="{{ route('admin.audioupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>5.3</strong>&nbsp;Audio Upload</span>
                </a>
            </li>

            

                </ul>
            </li>







                    <li class="{{ active_class(Active::checkUriPattern('admin/lionshistory')) }} treeview sidebar-bluish">
                        <a href="#">
                            <i class="fa fa-history"></i>
                            <span><strong>6.</strong>&nbsp;Lions History</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/lionshistory'), 'menu-open') }}"
                            style="display: none; {{ active_class(Active::checkUriPattern('admin/lionshistory'), 'display: block;') }}">

                    <li class="{{ active_class(Active::checkUriPattern('admin/lionshistory')) }}">
                        <a href="{{ route('admin.lionshistory') }}">
                            <i class="fa fa-history"></i>
                            <span><strong>6.1</strong>&nbsp;Lions History</span>
                        </a>
                    </li>
                    
                     <li class="{{ active_class(Active::checkUriPattern('admin/lionshistory')) }}">
                            <a href="{{ route('admin.lionshistory') }}">
                                <i class="fa fa-history"></i>
                                <span><strong>6.2.</strong>&nbsp;Past Chairperson</span>

                            </a>
                        </li>


                     <li class="{{ active_class(Active::checkUriPattern('admin/lionshistory')) }}">
                            <a href="{{ route('admin.lionshistory') }}">
                                <i class="fa fa-history"></i>
                                <span><strong>6.3.</strong>&nbsp;Past Governer</span>

                            </a>
                        </li>


                    

                        </ul>
                    </li>





                <li class="{{ active_class(Active::checkUriPattern('admin/logo')) }}">
                    <a href="{{ route('admin.logo') }}">
                        <i class="fa fa-dashboard"></i>
                        <span><strong>7.</strong>&nbsp;Logo</span>
                    </a>
                </li>

                 <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.</strong>&nbsp;Leo District</span>
                </a>
            </li>




                    </ul>
            </li>




            <li class="{{ active_class(Active::checkUriPattern('admin/videofront')) }} treeview sidebar-darkbluish">
                <a href="{{ route('admin.videofront') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>B.</strong>&nbsp;Frontpage</span>

                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                    <ul class="treeview-menu {{ active_class(Active::checkUriPattern('student/videofront'), 'menu-open') }}"
                        style="display: none; {{ active_class(Active::checkUriPattern('admin/videofront'), 'display: block;') }}">
                        

                <li class="{{ active_class(Active::checkUriPattern('admin/videofront')) }}">
                    <a href="{{ route('admin.videofront') }}">
                        <i class="fa fa-dashboard"></i>
                    <span><strong>1.</strong>&nbsp;Video Front</span>

                    </a>
                </li>

                  <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">
                    <a href="{{ route('admin.event') }}">
                        <i class="fa fa-dashboard"></i>
                    <span><strong>2.</strong>&nbsp;Upcoming Live Events</span>

                    </a>
                </li>

                  <li class="{{ active_class(Active::checkUriPattern('admin/post')) }}">
                    <a href="{{ route('admin.post') }}">
                        <i class="fa fa-dashboard"></i>
                    <span><strong>3.</strong>&nbsp;Message District Governer</span>

                    </a>
                </li>

                <li class="{{ active_class(Active::checkUriPattern('admin/team')) }}">
                    <a href="{{ route('admin.team') }}">
                        <i class="fa fa-dashboard"></i>
                        <span><strong>4.</strong>&nbsp;Message Past Governer</span>
                    </a>
                </li>



            
                    

                           <li class="{{ active_class(Active::checkUriPattern('admin/blog')) }} treeview ">
                        <a href="{{ route('admin.blog') }}">
                            <i class="fa fa-dashboard"></i>
                            <span><strong>5.</strong>&nbsp;Recent District Activities</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/blog'), 'menu-open') }}"
                            style="display: none; {{ active_class(Active::checkUriPattern('admin/blog'), 'display: block;') }}">
                            
                        <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                        <a href="{{ route('admin.category') }}">
                            <i class="fa fa-dashboard"></i>
                            <span><strong>5.1</strong>&nbsp;Category</span>
                        </a>
                        </li>
                    
                        <li class="{{ active_class(Active::checkUriPattern('admin/blog')) }}">
                            <a href="{{ route('admin.blog') }}">
                                <i class="fa fa-dashboard"></i>
                                <span><strong>5.2.</strong>&nbsp;District Activities</span>
                            </a>
                        </li>
                    

                        </ul>
                    </li>

                      <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">
                <a href="{{ route('admin.slider') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>6.</strong>Slider</span>
                </a>
            </li>


            <li class="{{ active_class(Active::checkUriPattern('admin/contentother')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span><strong>7.</strong>District Directory 2018/2019</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/contentother'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/contentother'), 'display: block;') }}">

             <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.contentother') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>7.1.</strong>Single Page Blog</span>
                </a>
            </li>

           <li class="{{ active_class(Active::checkUriPattern('admin/orglevelcat')) }}">
                <a href="{{ route('admin.orglevelcat') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>7.2.</strong>Enter Club Name</span>
                </a>
            </li>
 

       
            <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.orglevel') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>7.3</strong>Enter Club Member Info</span>
                </a>
            </li>
            

           

                </ul>
            </li>



                 <li class="{{ active_class(Active::checkUriPattern('admin/areacordinatoractivity')) }} treeview">
                <a href="{{ route('admin.areacordinatoractivity') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.</strong>Area Coordinator</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/areacordinatoractivity'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/areacordinatoractivity'), 'display: block;') }}">
                    
        <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                <a href="{{ route('admin.areacordinatorregion') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.1</strong>Coordiantor Region</span>
                </a>
            </li>
            
            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }}">
                <a href="{{ route('admin.areacordinatoractivity') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.2</strong>Coordiantor Activity</span>
                </a>
            </li>
            
            

            

                </ul>
            </li>
            



                    </ul>
                </li>


            <li class="{{ active_class(Active::checkUriPattern('admin/club')) }} treeview sidebar-bluish">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span><strong>C.</strong>&nbsp;Footer</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/club'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/club'), 'display: block;') }}">

            <li class="{{ active_class(Active::checkUriPattern('admin/club')) }}">
                <a href="{{ route('admin.club') }}">
                    <i class="fa fa-external-link-square"></i>
                    <span><strong>1.</strong>&nbsp;Club Links</span>
                </a>
            </li>

            

                </ul>
            </li>


             
                 <li class="{{ active_class(Active::checkUriPattern('admin/club')) }} treeview sidebar-bluish">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span><strong>D.</strong>&nbsp;File</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/club'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/club'), 'display: block;') }}">

             <li class="{{ active_class(Active::checkUriPattern('admin/olderfile')) }} sidebar-darkishblue">
                <a href="{{ route('admin.olderfile') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>1.</strong>&nbsp;Upload File </span>
                </a>
            </li>


            
             <li class="{{ active_class(Active::checkUriPattern('admin/olderfile')) }} sidebar-darkishblue">
                <a href="{{url('admin/viewbooks')}}">
                    <i class="fa fa-book"></i>
                    <span><strong>2.</strong>&nbsp; View Books </span>
                </a>
            </li>




             <li class="{{ active_class(Active::checkUriPattern('admin/olderfile')) }} sidebar-darkishblue">
                <a href="{{ url('admin/viewnews') }}">
                    <i class="fa fa-book"></i>
                    <span><strong>3.</strong>&nbsp; View News </span>
                </a>
            </li>



             <li class="{{ active_class(Active::checkUriPattern('admin/olderfile')) }} sidebar-darkishblue">
                <a href="{{ url('admin/viewnotice') }}">
                    <i class="fa fa-book"></i>
                    <span><strong>4.</strong>&nbsp; View Notices </span>
                </a>
            </li>




             <li class="{{ active_class(Active::checkUriPattern('admin/olderfile')) }} sidebar-darkishblue">
                <a href="{{ url('admin/viewpressrelease') }}">
                    <i class="fa fa-book"></i>
                    <span><strong>5.</strong>&nbsp; View Press Releases </span>
                </a>
            </li>

            

                </ul>
            </li>






            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }} treeview sidebar-violetblue">
                <a href="{{ route('admin.videoupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>E.</strong>&nbsp;Gallery</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/videoupload'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/videoupload'), 'display: block;') }}">
                    

            
            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }}">
                <a href="{{ route('admin.videoupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>1.</strong>&nbsp;Video Upload</span>

                </a>
            </li>
            
                
            <li class="{{ active_class(Active::checkUriPattern('admin/formmultiplephotos')) }}">
                <a href="{{ url('admin/formmultiplephotos') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>2.</strong>&nbsp;Multiple Photo Upload</span>

                </a>
            </li>


            <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                <a href="{{ route('admin.audioupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>3.</strong>&nbsp;Audio Upload</span>
                </a>
            </li>

            

                </ul>
            </li>





             

{{-- 
                  <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">
                    <a href="{{ route('admin.slider') }}">
                        <i class="fa fa-dashboard"></i>
                        <span><strong>6.</strong>&nbsp;Slider</span>
                    </a>
                </li>

                

                    <li class="{{ active_class(Active::checkUriPattern('admin/areacordinatoractivity')) }} treeview">
                        <a href="{{ route('admin.areacordinatoractivity') }}">
                            <i class="fa fa-dashboard"></i>
                            <span><strong>7.</strong>&nbsp;Area Coordinator</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/areacordinatoractivity'), 'menu-open') }}"
                            style="display: none; {{ active_class(Active::checkUriPattern('admin/areacordinatoractivity'), 'display: block;') }}">
                            
                        <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                        <a href="{{ route('admin.areacordinatorregion') }}">
                            <i class="fa fa-dashboard"></i>
                            <span><strong>7.1</strong>&nbsp;Coordiantor Region</span>
                        </a>
                        </li>
                    
                        <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }}">
                            <a href="{{ route('admin.areacordinatoractivity') }}">
                                <i class="fa fa-dashboard"></i>
                                <span><strong>7.2.</strong>&nbsp;Coordiantor Activity</span>
                            </a>
                        </li>
                    

                        </ul>
                    </li>



            <li class="{{ active_class(Active::checkUriPattern('admin/contentother')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span><strong>8.</strong>&nbsp;District Directory 2018/2019</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/contentother'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/contentother'), 'display: block;') }}">

             <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.contentother') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.1</strong>&nbsp;Single Page Blog</span>
                </a>
            </li>

           <li class="{{ active_class(Active::checkUriPattern('admin/orglevelcat')) }}">
                <a href="{{ route('admin.orglevelcat') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.2</strong>&nbsp;Enter Club Name</span>
                </a>
            </li>
 

       
            <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.orglevel') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>8.3.</strong>&nbsp;ENter Club Member Info</span>
                </a>
            </li>
           

                </ul>
            </li>


              <li class="{{ active_class(Active::checkUriPattern('admin/club')) }}">
                <a href="{{ route('admin.club') }}">
                    <i class="fa fa-dashboard"></i>
                    <span><strong>9.</strong>&nbsp;Club Links</span>
                </a>
            </li>
         

            </ul>
        </li>





            <li class="{{ active_class(Active::checkUriPattern('admin/logo')) }} treeview">
                <a href="{{ route('admin.logo') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Logos/Sliders</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                    <ul class="treeview-menu {{ active_class(Active::checkUriPattern('student/logo'), 'menu-open') }}"
                        style="display: none; {{ active_class(Active::checkUriPattern('admin/logo'), 'display: block;') }}">
                        

                             <li class="{{ active_class(Active::checkUriPattern('admin/logo')) }}">
                    <a href="{{ route('admin.logo') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Logo</span>
                    </a>
                </li>

                  <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">
                    <a href="{{ route('admin.slider') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Slider</span>
                    </a>
                </li>

                  <li class="{{ active_class(Active::checkUriPattern('admin/videofront')) }}">
                    <a href="{{ route('admin.videofront') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Video Front</span>
                    </a>
                </li>




                    </ul>
            </li>

 --}}
                          
         {{--    <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Header</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/mjf')) }}">
                <a href="{{ route('admin.mjf') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Mjf</span>
                </a>
            </li>




             <li class="{{ active_class(Active::checkUriPattern('admin/pmjf')) }}">
                <a href="{{ route('admin.pmjf') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Pmjf</span>
                </a>
            </li>
            

            <li class="{{ active_class(Active::checkUriPattern('admin/nlf')) }}">
                <a href="{{ route('admin.nlf') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Nlf</span>
                </a>
            </li>



            <li class="{{ active_class(Active::checkUriPattern('admin/pnlf')) }}">
                <a href="{{ route('admin.pnlf') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Pnlf</span>
                </a>
            </li>



            <li class="{{ active_class(Active::checkUriPattern('admin/lionshistory')) }}">
                <a href="{{ route('admin.lionshistory') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Lions History</span>
                </a>
            </li>

               
         

                </ul>
            </li>

        --}}
               
{{-- 


             <li class="{{ active_class(Active::checkUriPattern('admin/post')) }}">
                <a href="{{ route('admin.post') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Message District Governer</span>
                </a>
            </li>


             <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>District Directory 2018/2019</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

             <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.contentother') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Single Page Blog</span>
                </a>
            </li>

           <li class="{{ active_class(Active::checkUriPattern('admin/orglevelcat')) }}">
                <a href="{{ route('admin.orglevelcat') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Enter Club Name</span>
                </a>
            </li>
 

       
            <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.orglevel') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>ENter Club Member Info</span>
                </a>
            </li>
            

           

                </ul>
            </li>
            
                <li class="{{ active_class(Active::checkUriPattern('admin/event')) }}">
                <a href="{{ route('admin.event') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Upcoming Lions Events</span>
                </a>
            </li>

            <li class="{{ active_class(Active::checkUriPattern('admin/areacordinatoractivity')) }} treeview">
                <a href="{{ route('admin.areacordinatoractivity') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Area Coordinator</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/areacordinatoractivity'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/areacordinatoractivity'), 'display: block;') }}">
                    
        <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                <a href="{{ route('admin.areacordinatorregion') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Area Coordiantor Region</span>
                </a>
            </li>
            
            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }}">
                <a href="{{ route('admin.areacordinatoractivity') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Area Coordiantor Activity</span>
                </a>
            </li>
            
            

            

                </ul>
            </li>


                <li class="{{ active_class(Active::checkUriPattern('admin/events')) }} treeview">
                <a href="{{ route('admin.videoupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Gallery</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('student/level'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/events'), 'display: block;') }}">
                    

            
            <li class="{{ active_class(Active::checkUriPattern('admin/videoupload')) }}">
                <a href="{{ route('admin.videoupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Video Upload</span>

                </a>
            </li>
            
                
            <li class="{{ active_class(Active::checkUriPattern('admin/formmultiplephotos')) }}">
                <a href="{{ url('admin/formmultiplephotos') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Multiple Photo Upload</span>

                </a>
            </li>


            <li class="{{ active_class(Active::checkUriPattern('admin/audioupload')) }}">
                <a href="{{ route('admin.audioupload') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Audio Upload</span>
                </a>
            </li>

            

                </ul>
            </li>
            
             <li class="{{ active_class(Active::checkUriPattern('admin/team')) }}">
                <a href="{{ route('admin.team') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Message from Past Governer</span>
                </a>
            </li>



            <li class="{{ active_class(Active::checkUriPattern('admin/blog')) }}">
                <a href="{{ route('admin.blog') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Recent District Activities</span>
                </a>
            </li>

        <li class="{{ active_class(Active::checkUriPattern('admin/club')) }}">
                <a href="{{ route('admin.club') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Club Links</span>
                </a>
            </li>
         


                 
        
            
        
       

        

           

             

          


    
        
                    
            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Extra</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

            <li class="{{ active_class(Active::checkUriPattern('admin/category')) }}">
                <a href="{{ route('admin.category') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Category</span>
                </a>
            </li>

            <li class="{{ active_class(Active::checkUriPattern('admin/olderfile')) }}">
                <a href="{{ route('admin.olderfile') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>OlderFile</span>
                </a>
            </li>

                
            

                </ul>
            </li>

          
 --}}      
        <li class="{{ active_class(Active::checkUriPattern('logout')) }} treeview sidebarcolor-darksilver">
                <a href="#">
                    <i class="fa fa-sign-out"></i>
                     <span><strong>F.</strong>&nbsp;Logout</span>

                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('logout'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('logout'), 'display: block;') }}">

                <li class="{{ active_class(Active::checkUriPattern('logout')) }}">
                        <a href="{{url('logout')}}">
                            <i class="fa fa-sign-out-alt"></i>
                        <span><strong>1.</strong>&nbsp;Logout</span>
                            
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                </li>

                    <li class="{{ active_class(Active::checkUriPattern('/')) }} sidebarcolor-bluish">
                        <a href="{{url('/')}}">
                            <i class="fa fa-circle-o"></i>
                     <span><strong>G .</strong>&nbsp;Website Display</span>

                        </a>
                    </li>

                


            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview sidebar-darkishviolet">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span><strong>H.</strong>&nbsp;{{ trans('menus.backend.access.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">
                    <li class="{{ active_class(Active::checkUriPattern('admin/access/user*')) }}">
                        <a href="{{ route('admin.access.user.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span><strong>1.</strong>&nbsp;{{ trans('labels.backend.access.users.management') }}</span>
                        </a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/access/role*')) }}">
                        <a href="{{ route('admin.access.role.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span><strong>2.</strong>&nbsp;{{ trans('labels.backend.access.roles.management') }}</span>
                        </a>
                    </li>
                </ul>

       @endauth 
{{-- @if(Auth::check())
 <li class="{{ active_class(Active::checkUriPattern('admin/orglevel')) }}">
                <a href="{{ route('admin.orglevel') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Club Member Info</span>
                </a>
            </li>
            
@endif --}}



            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>