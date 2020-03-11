  @extends('frontend.humanity.master')
      @section('content')



<body>
  
<div class="container text-center">    
 
  <div class="row">
      <h4 class="text-center">API Links</h4>
<ul class="list-group">
              
                <li class="list-group-item"><a href="{{url('/api/family_tree')}}">Family Tree Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/family_tree_api')}}">Club Names Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/area-cordiantor')}}">Area Cordinator Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/blog')}}">Blog Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/audioupload')}}">Audio Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/club')}}">Club Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/contact')}}">Contact Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/contentother')}}">Content Other</a></li>
                <li class="list-group-item"><a href="{{url('/api/event')}}">Event Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/logo')}}">Logo Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/multiplephoto')}}">Multiple Photo Api</a></li>
                <!--<li class="list-group-item"><a href="{{url('/api/olderfile')}}">Older File Api</a></li>-->
                <li class="list-group-item"><a href="{{url('/api/slider')}}">Slider Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/team')}}">Team Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/videofront')}}">Video Front Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/videoupload')}}">Video Upload Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/mjf')}}">MJF APi</a></li>
                <li class="list-group-item"><a href="{{url('/api/nlf')}}">Nlf Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/pmjf')}}">Pmjf Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/pnlf')}}">Pnlf Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/lionshistory')}}">Lions History Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/lionsbookapi')}}">Book Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/lionsnewsapi')}}">News Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/lionspressreleaseapi')}}">Press Release Api</a></li>
                <li class="list-group-item"><a href="{{url('/api/lionsnoticeapi')}}">Notice Api</a></li>              
</ul>





  
  </div>
</div>

      @include('frontend.humanity.include.footerclub')


</body>
@endsection
