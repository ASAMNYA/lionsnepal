@extends('frontend.humanity.master')
      @section('content')

      <div class="container" style="margin-top: 20px;">
      	<div class="content">
      	    &nbsp;
      		@foreach($data as $row)
      		<h5 class="text-center">{{$row->name}}</h5>
      		<p>{!!$row->description!!}</p>
      		@endforeach
</p>

</div>
</div>
@endsection