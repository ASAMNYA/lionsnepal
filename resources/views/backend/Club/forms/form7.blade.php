

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
              <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Club Award</center></h2>
              <hr>
           </div> 
       </div>
         </div>
       </br>

        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2"><label> First Name : </label></div>
            <div class="col-md-10">
              <select class="form-control" name="">
              <option value="0"> name 1</option>
              <option value="1"> name 2</option>
              <option value="2"> name 3</option>
              <option value="3"> name 4</option>
              <option value="4"> name 5</option>
              <option value="5"> name 6</option>
              <option value="6"> name 7</option>
             </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>Program  : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Award Title : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>  Year :  </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>  By Whom :  </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Treasure : </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>
           <div class="form-group">
            <div class="col-md-2"><label>  Photo : </label></div>
            <div class="col-md-10"><input class="form-control" type="file" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label>  Photo : </label></div>
            <div class="col-md-10"><input class="form-control" type="file" name="" placeholder=""></div>
          </div>
          <div class="form-group">
            <div class="col-md-2"><label> Guardian no :    </label></div>
            <div class="col-md-10"><input class="form-control" type="text" name="" placeholder=""></div>
          </div>

           <div class="form-group">
            <div class="col-md-2"><label>.</label></div>
            <div class="col-md-5"><button class="btn btn-sucess">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger">Lock</button></div>
            
          </div>
        </form>


      <!--   <form>

              <span> First Name : </span>
             <select name="">
              <option value="0"> name 1</option>
              <option value="1"> name 2</option>
              <option value="2"> name 3</option>
              <option value="3"> name 4</option>
              <option value="4"> name 5</option>
              <option value="5"> name 6</option>
              <option value="6"> name 7</option>
             </select>

           </br></br></br>

            <span>Program  : </span><input type="text" name="" placeholder="">
           </br></br></br>


           <span> Award Title :  </span><input type="text" name="" placeholder="">
           </br></br></br>

            <span> year :  </span><input type="text" name="" placeholder="">
           </br></br></br>

            <span> By Whom :  </span><input type="text" name="" placeholder="">

           </br></br></br>

             <span>Treasure :  </span><input type="text" name="" placeholder="">
           </br></br></br>

            <div class="form-inline">
            <span> Photo : </span><input class="form-control" type="file" name="" placeholder="">
            </div>
           </br></br></br>

           <span>Guest: </span><input type="text" name=""> 
           </br></br></br>

           <span>Guardian no : </span><input type="text" name="">
             </br></br></br>
<button>save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>Lock</button>-->

           

        
           


            

           
            

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->

 @stop