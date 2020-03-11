  @extends('frontend.humanity.master')
      @section('content')



<body>
  
<div class="container text-center">    
 
  <div class="row">
  	@foreach($data as $row)
    <div class="col-sm-4">
	<img src="{{asset('public/uploads/default.jpg')}}">
     <audio controls="controls">
		<source src="{{asset('public/uploads/audio/'.$row->file)}}" type="audio/mpeg">

	</audio>
 		<p>{{$row->title}}</p>
    </div>
 @endforeach

  
  </div>
</div>

      @include('frontend.humanity.include.footerclub')


</body>
@endsection
