
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
        

        <div class="container">
          <div class="row">
            <div class="col-sm-9" style="margin: 0 0 0 -19px;">
              <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Event's</center></h2>
              <hr>
           </div> 
       </div>
         </div>
       </br>

        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2"><label>Club Id: </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Program Name :  </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
           <div class="form-group">
            <div class="col-md-2"><label>Member Preset :   </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> President: </label></div>
            <div class="col-md-10">
             <select class="form-control" name="">
              <option value="0"> President 1</option>
              <option value="1"> President 2</option>
              <option value="2"> President 3</option>
              <option value="3"> President 4</option>
              <option value="4"> President 5</option>
              <option value="5"> President 6</option>
              <option value="6"> President 7</option>
             </select>
            </div>
          </div>
        </form>


        <!-- <form>
            <span>Club Id: </span><input type="text" name="" placeholder=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  

           <span> Program Name :  </span><input type="text" name="" placeholder="">
           </br></br></br>

             <span>Member Preset :  </span><input type="text" name="" placeholder="">
           </br></br></br>

             
             <span> President: </span>
             <select name="">
              <option value="0"> President 1</option>
              <option value="1"> President 2</option>
              <option value="2"> President 3</option>
              <option value="3"> President 4</option>
              <option value="4"> President 5</option>
              <option value="5"> President 6</option>
              <option value="6"> President 7</option>
             </select>

           </br></br></br>
            
           
            <div class="form-inline">
            <span> Photo Upload : </span><input class="form-control" type="file" name="" placeholder="">
            </div>
           </br></br></br>
           <span>Co-Ordinator : </span><input type="text" name=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <span>Event Date : </span><input type="text" name="">

           </br></br></br>
           <span>Location : </span><input type="text" name=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <span>Time : </span><input type="time" name="">
             </br></br></br>
           <span>Output : </span><input type="text" name=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <span> Beneficare : </span><input type="text" name="">
           </br></br></br>
           <span>Minute : </span><input type="text" name="" placeholder="Memo"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="text" name="" placeholder="upload">
            </br></br></br>

           <span>Point : </span><input type="text" name="" placeholder="Memo"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <span>Comment : </span> <input type="text" name="" placeholder="upload">-->
  


            

           
            

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->

@stop