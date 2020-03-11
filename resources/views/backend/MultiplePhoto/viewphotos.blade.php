@extends('backend.layouts.app')

@section('page-header')
    <h4>{{$data->title}}</h4>

@endsection

@section('content')

                   

     <div class="row">
    

        @foreach(json_decode($data->photos, true) as $photos)

  <div class="col-md-4">
        
    
    <div class="thumbnail">
      <a href="{{url('publicmultipleimages/'.$photos)}}">
        <img src="{{asset('publicmultipleimages/'.$photos)}}" alt="Lights" style="width:100%">
        <div class="caption">
          <p>{{$photos}}</p>
        </div>
      </a>
    </div>

  </div>
    @endforeach

</div>



    
     @endsection

