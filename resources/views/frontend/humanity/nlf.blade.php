@extends('frontend.humanity.master')
      @section('content')

      <div class="container">
          &nbsp;
      	<div class="content">
      		@foreach($data as $row)
      		<h5 class="text-center">{{$row->name}}</h5>
      		<p>{!!$row->description!!}</p>
      		@endforeach
</p>

</div>
</div>
@endsection