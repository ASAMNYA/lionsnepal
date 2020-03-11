@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
<h2>{{$data->title}}</h2>

<audio autoplay controls>

<source src="{{asset('public/uploads/audio/'.$data->file)}}" type="audio/mpeg">

</audio>
 </div>







    
  @stop

