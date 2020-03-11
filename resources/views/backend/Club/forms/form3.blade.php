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
          <img align="right" src="{{asset('public/uploads/logo.png')}}" style=" margin: 19px 36px 0 0;
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
              <h2><center style="border: 2px inset;background-color: #f1f1f1;border-radius: 5px;">Club Info</center></h2>
              <hr>
           </div> 
       </div>
         </div>
       </br>
         <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-2">
              <label>Club Serial No.: </label>
            </div>
            <div class="col-md-10">
              <input type="text" name="" class="form-control" placeholder=""/>
            </div>
          </div> 
            
          <div class="form-group">
            <div class="col-md-2">
              <label>Club name :  </label>
            </div>
            <div class="col-md-10">
              <input type="text" name="" class="form-control" placeholder=""/>
            </div>
          </div> 

           
           </br></br></br>

         </form>
          </div>

           <div class="col-sm-9" style="border: 4px solid grey; border: 4px solid grey;
    border-radius: 11px;">

          <h2><center style="border: 2px inset;border-radius: 5px;background-color: #f1f1f1;padding: 10px;">Member Info</center></h2>
              <hr>
            </br></br></br>

            <form class="form-horizontal">
              <div class="form-group">
                <div class="col-md-2"> <label>Father's Name : </label></div>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="" placeholder="First Name"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" name="" placeholder="Middle Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-md-4">
                  <input type="text"  class="form-control" name="" placeholder="Last Name">
                </div>
              </div>

               <div class="form-group">
                <div class="col-md-2"> <label>Address :  </label></div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="" placeholder=" Address" class="form-control">
             &nbsp;&nbsp;
                </div>
              </div>

            <div class="form-group">
              <div class="col-md-2"> <label> Sex :  </label></div>
              <div class="col-md-4">
              <select class="form-control" name="">
              <option value="0"> Male</option>
              <option value="1"> Female</option>
             </select>
            </div>
            <div class="col-md-2"><label> DOB : </label></div>
            <div class="col-md-4"><input type="Date" class="form-control" name="" placeholder="Date"></div>
            </div>
            <div class="form-group">
              <div class="col-md-2"><label> Photo : </label></div>
              <div class="col-md-10"><input class="form-control" type="file" name="" placeholder=""></div>
            </div>
            
             <div class="form-group">
                <div class="col-md-2"> <label>Permanent Address : </label></div>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="" placeholder="State"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" name="" placeholder="Municipality">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-md-4">
                  <input type="text"  class="form-control" name="" placeholder="Ward">
                </div>
              </div> 
            
            <div class="form-group">
              <div class="col-md-2"> <label> Blood Group :  </label></div>
              <div class="col-md-4">
              <select class="form-control" name="">
              <option value="0">O-positive </option>
              <option value="1">O-negative </option>
              <option value="2">A-positive:</option>
              <option value="3">A-negative</option>
              <option value="4">B-positive</option>
              <option value="4">B-negative </option>
              <option value="4"> AB-positive</option>
              <option value="4">AB-negative</option>
             </select>
            </div>
            </form>

    

           
            

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->

  @stop