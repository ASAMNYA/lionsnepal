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
        

        <div class="container">
          <div class="row">
            <div class="col-sm-9" style="margin: 0 0 0 -19px;">
              <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Member Info</center></h2>
              <hr>
           </div> 
       </div>
         </div>
       </br>

        <form class="form-horizontal">
          <div class="form-group">
              <div class="col-md-2"> <label>Occupation: </label></div>
              <div class="col-md-4">
              <input type="text" class="form-control" name="" placeholder="Occupation">
            </div>
            <div class="col-md-2"><label> Office name :  </label></div>
            <div class="col-md-4"><input type="text" class="form-control" name="" placeholder="office"></div>
            </div>
            <div class="form-group">
              <div class="col-md-2"><label>Business : </label></div>
              <div class="col-md-10"><input class="form-control" type="text" name="" placeholder="buisness"></div>
            </div>
            <div class="form-group">
              <div class="col-md-2"><label> Education: </label></div>
              <div class="col-md-10">
              <select class="form-control" name="">
              <option value="0"> Education 1</option>
              <option value="1"> Education 2</option>
              <option value="2"> Education 3</option>
              <option value="3"> Education 4</option>
              <option value="4"> Education 5</option>
              <option value="5"> Education 6</option>
              <option value="6"> Education 7</option>
             </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"><label>CV : </label></div>
              <div class="col-md-10"><input class="form-control" type="file" name="" placeholder=""></div>
            </div>
        </form>

         

        <!-- <form>
           
            <span>Occupation: </span><input type="text" name="" placeholder=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  

           <span>Office name :  </span><input type="text" name="" placeholder="">
           </br></br></br>

             <span>Business :  </span><input type="text" name="" placeholder="">
           </br></br></br>

             
             <span> Education: </span>
             <select name="">
              <option value="0"> Education 1</option>
              <option value="1"> Education 2</option>
              <option value="2"> Education 3</option>
              <option value="3"> Education 4</option>
              <option value="4"> Education 5</option>
              <option value="5"> Education 6</option>
              <option value="6"> Education 7</option>
             </select>

           </br></br></br>
            
           
            <div class="form-inline">
            <span> CV : </span><input class="form-control" type="file" name="" placeholder="">
            </div>
           </br></br></br>-->

            

           
            

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->
@stop