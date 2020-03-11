@extends('backend.layouts.app')

@section('page-header')



    <div class="w3ls">
      @foreach($data as $row)
      
        <div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

           <div class="tc-ch">
            <div class="tch-img">
              <p>{{$row->title}}</p>
              <a href="#">
              <img src="{!! url('public/uploads/'.$row->image)!!}" style="width:150px; height:150px;" class="img-responsive" alt=""></a>
            </div>
          
            <h3><a href="#">{{$row->title}}</a></h3>
              <p> {{$row->description}}</p>
            <h6>BY <a href="{{$row->title}}"></a></h6>
            
              
            
          </div>
        </div>
        @endforeach
       
      
      </div>
     



@stop
