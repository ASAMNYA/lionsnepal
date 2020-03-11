@extends('backend.layouts.app')


 @section('after-styles')
     <link rel="stylesheet" type="text/css" href="{{('public/css/frontend/freewings/mystyle.css')}}">
     <style type="text/css">
       .save_button {
    min-width: 100px;
    max-width: 100px;
}
     </style>
@section('content')

  <div class="container-fluid ">
    <div class="container">
      <div class="row">
    


       <div class="col-sm-9" style="border: 4px solid grey;border-radius: 11px;">
        <div class="container">
          <div class="row">
           <div class="col-sm-7">

            <center>
          <img src="{{asset('public/uploads/ma.png')}}" height="150" width="680">
         <hr>
            </center>
           </div><!-- end of col-sm-2 -->

              <div class="col-sm-2">

            <center>
          <img align="right" src="{{asset('public/uploads/logo.png')}}" style=" margin: 16px 34px 0 0;
    border: 3px inset;
    border-radius: 7px;
    height: 104px;
    width: 114px;">
            </center>
           </div><!-- end of col-sm-2 -->
            </div>
           </div>
         
          </br>
          </br>
          </br>
          </br>
         <div class="container">
          <div class="row">
            <center>
           <div class="col-sm-2">
             <button type="button">Logo</button></br></br>
           </div><!-- end of col-sm-2 -->

            <div class="col-sm-2">
             <button type="button">Logo</button></br></br>
           </div><!-- end of col-sm-2 -->

            <div class="col-sm-2">
             <button type="button">Logo</button></br></br>
           </div><!-- end of col-sm-2 -->
           </center>
             </div><!-- end of row -->
         </div><!-- end of container -->
         <h3>Serial no:</h3>

        <div class="container">
          <div class="row">
            <div class="col-sm-9" style="margin: 0 0 0 -19px;">
              <h2 style="border: 2px inset;border-radius: 5px;background-color: #f1f1f1;padding: 8px;"><center>Lion’s Username Create</center></h2>
              <hr>




           </div> 
          </div>
       </div>
       </br>
         <!--<form>
           <span>Club name :  </span><input type="text" name="" placeholder="">
           </br></br></br>
            <span>Club id : </span><input type="text" name="" placeholder="">
           </br></br></br>
            <span>Password : </span><input type="text" name="" placeholder="">
           </br></br></br>
            <span> E-mail : </span><input type="text" name="" placeholder="">
            </br></br></br>
            <span>Club Photo :</span><input type="text" name="" placeholder="">
            </br></br></br>
            <span>Address : </span><input type="text" name="" placeholder="">
            </br></br></br>
            <span>Time Schedule :</span><input type="text" name="" placeholder="">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </br></br></br> 

            <span>Other info :</span>
            <textarea rows="4" cols="20"  ></textarea>-->
<div class="col-md-12">
  <form class="form-horizontal">    
  <div class="form-group">
    <div class="col-md-2">
      <label>Club Name :</label>
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="fullname" placeholder="enter club name"/>     
    </div>
  </div>


  <div class="form-group">
    <div class="col-md-2">
      <label>Club id : </label>
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="fullname" placeholder="enter club id"/>      
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-md-2">
      <label>Password :</label>
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control"  placeholder="enter password"/>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">
      <label> E-mail :</label>     
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="email" placeholder="name@club.com" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">
      <label> Club Photo :</label>     
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="photo" placeholder="photo max size 5MB" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">
      <label>Address : </label>     
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="Address" placeholder="Address e.g.houseno.8,place" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-md-2">
      <label>Time Schedule : </label>     
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="time schedule" placeholder="club time schedule" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">
      <label>Other info :</label>     
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="personal description" placeholder="info" />
    </div>
  </div>    
</form>
</div>

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->

 
 @stop