
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
          <img align="right"  src="{{asset('public/uploads/logo.png')}}" style=" margin: 19px 30px 0 0;
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
              <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Audio</center></h2>
           </div> 
       </div>
         </div>
       </br>

        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2"><label>Club id : </label></div>
            <div class="col-md-10">
              <input class="form-control" type="text" name="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Year : </label></div>
            <div class="col-md-10">
              <select class="form-control" name="">
              <option value="0">2001</option>
              <option value="1">2002</option>
              <option value="2">2003</option>
              <option value="3">2004</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> President : </label></div>
            <div class="col-md-10">
              <input class="form-control" type="text" name="" placeholder="">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-2"><label> Audio :</label></div>
            <div class="col-md-10">
              <input class="form-control" type="file" name="" placeholder="" accept="audio/*">
            </div>
          </div>
          
        </form><!-- first from close-->


        <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Video</center></h2>
              <hr>

        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2"><label>Club id : </label></div>
            <div class="col-md-10">
              <input class="form-control" type="text" name="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Year : </label></div>
            <div class="col-md-10">
              <select class="form-control" name="">
              <option value="0">2001</option>
              <option value="1">2002</option>
              <option value="2">2003</option>
              <option value="3">2004</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> President : </label></div>
            <div class="col-md-10">
              <input class="form-control" type="text" name="" placeholder="">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-2"><label> Video :</label></div>
            <div class="col-md-10">
              <input class="form-control" type="file" name="" placeholder="" accept="audio/*">
            </div>
          </div>
          
        </form class="form-horizontal"><!-- first second close-->

         <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Member</center></h2>
         <form>
           <div class="form-group">
            <div class="col-md-2"><label>Approve: </label></div>
            <div class="col-md-10">
              <input class="form-control" type="file" name="" placeholder="" accept="video/*">
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <div class="form-group">
            <div class="col-md-2"><label> Group SMS : </label></div>
            <div class="col-md-10">
              <input class="form-control" type="text" name="" placeholder="">
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </form>
         <!--<form>
          
            <span>Club id : </span><input type="text" name="" placeholder="">
           </br></br></br>
            <span>Year : </span>
            <select name="">
              <option value="0">2001</option>
              <option value="1">2002</option>
              <option value="2">2003</option>
              <option value="3">2004</option>
             </br></br></br>
            <span> President : </span><input type="text" name="" placeholder="">
            </br></br></br>
            <div class="form-inline">           
             <span>Audio :</span>
             <input class="form-control" type="file" name="" placeholder="" accept="audio/*">
            </div>-->
          

            <!--  <h2><center style="text-shadow: -6px 0px 5px rgba(150, 150, 21, 0.75);">Video</center></h2>
              <hr>

             <span>Club id : </span><input type="text" name="" placeholder="">
           </br></br></br>
            <span>Year : </span>
            <select name="">
              <option value="0">2001</option>
              <option value="1">2002</option>
              <option value="2">2003</option>
              <option value="3">2004</option>
           </select>
           </br></br></br>

            <span> President : </span><input type="text" name="" placeholder="">
            </br></br></br>
            <div class="form-inline">           
             <span>Video :</span>
             <input class="form-control" type="file" name="" placeholder="" accept="video/*">
            </div>-->
            

            <!-- <h2><center style="text-shadow: -6px 0px 5px rgba(150, 150, 21, 0.75);">Member</center></h2>

             <span>Approve: </span><input type="text" name="" placeholder="">
          
           </br></br></br>

            <span> Group SMS : </span><input type="text" name="" placeholder="">
            </br></br></br>-->
           
            
           </form>

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->
@stop