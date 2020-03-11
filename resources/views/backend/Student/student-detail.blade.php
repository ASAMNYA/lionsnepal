@extends('backend.layouts.app')


@section('after-styles')


    <link rel="stylesheet" type="text/css" href="{{asset('public/css/id_css.css')}}">
@endsection

@section('content')
        



        <div class="id-card-tag"></div>
    <div class="id-card-tag-strip"></div>
    <div class="id-card-hook"></div>
    <div class="id-card-holder">
        <div class="id-card">
            <div class="header">
          <div class="container">
            <div class="row">
            <div class="col-sm-1">
                <img src="{{asset('public/uploads/default/logo.png')}}">
            </div>
            <div class="col-sm-1">
                <div class="qr-code">
                <img src="{{asset('public/uploads/default/qr.png')}}" style="width: 50px">
            </div>
            </div>  
           </div>
          </div>
         </div>
            
            <div class="photo">
                <img src="{{asset('public/uploads/default/defaultstudent.jpg')}}">
            </div>
             <h2>ID CARD</h2>
            <table cellpadding="0" cellspacing="0" >
                <tr>
                    <td><span>Name : </span> </td>
                    <td><i> {{$data->studentname->first_name}} {{$data->studentname->last_name}}</i></td>
                </tr>

                
                <tr>
                    <td><span>CRN : </span></td>
                    <td><i> 2069/BCT/24</i></td>
                </tr>
                <tr>
                    <td><span>Batch : </span> </td>
                    <td><i>2069</i></td>
                </tr>
                <tr>
                    <td><span>Address : </span></td>
                    <td><i>Sharadanagar-5, chitwan</i>  </td>
                </tr>
                <tr>
                    <td><span>DOB : </span></td>
                    <td><i>{{$data->dob}}</i></td>
                </tr>
                <tr>
                    <td><span>Valid upto : </span></td>
                    <td><i>2074-03-10</i></td>
                </tr>
    
            </table>

            
            
            
        </div>
    </div>
    
  @stop