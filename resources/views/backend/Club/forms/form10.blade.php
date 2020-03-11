
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
            </center>
           </div><!-- end of col-sm-2 -->

              <div class="col-sm-2">

            <center>
          <img align="right" src="{{asset('public/uploads/logo.png')}}" style=" margin: 19px 30px 0 0;
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
              <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Fee</center></h2>
           </div> 
       </div>
         </div>
       </br>

        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2"><label>Club id : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Member Name :</label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Due/Fee :</label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Date :</label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Receive by :</label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label></label></div>
            <div class="col-md-10"><button class="btn btn-default">Save</button></div>
          </div>
        </form>      
         
        <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">District-ID</center></h2>
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2"><label>Member Name : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Fee : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Date:  </label></div>
            <div class="col-md-10"><input class="form-control" type="date" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Recive By : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
        </form>
         <!--<form>
          
            <span>Club id : </span><input type="text" name="" placeholder="">
           </br></br></br>
             <span>Member Name : : </span><input type="text" name="" placeholder="">
             </br></br></br>
            <span> Due/Fee : </span><input type="text" name="" placeholder="">
            </br></br></br>
                    
             <span>Date :</span>
            <input type="text" name="" placeholder="">
            </br></br></br>
                    
             <span>Receive by :</span>
            <input type="text" name="" placeholder="">
            </br></br></br>

            <input type="button" value="save" name="">
            

              <h2><center style="text-shadow: -6px 0px 5px rgba(150, 150, 21, 0.75);">District-ID</center></h2>

             <span>Member Name : </span><input type="text" name="" placeholder="">
           </br></br></br>
           
        
             <span> Fee: </span><input type="text" name="" placeholder="">

              </br></br></br>
             
             <span> Date: </span><input type="date" name="" placeholder="">

              </br></br></br>
            
            <span> Receive By : </span><input type="text" name="" placeholder="">
            </br></br>

           
           </form>-->

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->


@stop