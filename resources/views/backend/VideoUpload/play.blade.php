@extends('backend.layouts.app')
@section('content')

{{-- 
<div class="video-code">
                            <video width="100%" height="415" src="{{asset('public/uploads/video/'. $data->file)}}" frameborder="0" allowfullscreen controls>
                                
                            </video>
                        </div><!-- // video-code --> --}}



{!!$data->file!!}
    
  @stop

