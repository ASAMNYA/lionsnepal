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
          <img align="center"  src="{{asset('public/uploads/logo.png')}}" style=" margin: 19px 30px 0 0;
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
            <div class="col-sm-6" style="margin: 0 0 0 30px;">
              <h2><center style="border: 2px inset;border-radius: 5px;background-color: #f1f1f1;padding: 10px;">Lion’s Club Info</center></h2>
              <hr>
           </div> 
           <div class="col-sm-2">
              <img src="{{asset('public/uploads/logo.png')}}" align="center" style="margin: 3px 30px 0 72px;
    border: 3px inset;
    border-radius: 7px;
    height: 104px;
    width: 114px;">
            </div>
           </div>
         </div>
       </br>

  <form class="form-horizontal">    
  <div class="form-group">
    <div class="col-md-2">
      <label>Serial no: </label>
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="fullname" placeholder="enter club name" style="margin: 0 0 0 -10px;" />     
    </div>
  </div> 

    <div class="form-group">
    <div class="col-md-2">
      <label>Club Serial No.: </label>
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control" name="fullname" placeholder="enter club name" style="margin: 0 0 0 -9px;" />     
    </div>
  </div> 

    <div class="form-group">
    <div class="col-md-2">
      <label>Club ID : </label>
    </div>
    <div class="col-md-10">
    <select class="form-control" id="sel1" style="margin: 0 0 0 -10px;">
    <option>Club1</option>
    <option>Club2</option>
    <option>Club3</option>
    <option>Club4</option>
  </select>   
    </div>
  </div> 

<div class="form-group">
  <div class="col-md-6">
    <div class="col-md-2"><label>Chatter Day: </label></div>
    <div class="col-md-8"><input type="Date" class="form-control" name="" placeholder="" style="margin: 0 0 0 54px;"></div>
  </div>
  
  <div class="col-md-6">
    <div class="col-md-2"><label> Time: </label></div> 
    <div class="col-md-4"><input type="Time" class="form-control" name="" placeholder="Time"></div>
  </div>
</div>

  <div class="form-group">
    <div class="col-md-2">
      <label>Chatter Certificate Upload : </label>
    </div>
    <div class="col-md-10">
      <input type="file" class="form-control" name="" placeholder="enter club name" style="margin: 0 0 0 -9px;" />     
    </div>
  </div> 


            
            <!--<center><h2>Club Post</h2></center>
            <hr>
            
             
             <span>President : </span>
             <select name="">
               <option value="">president1</option>
               <option value="">president1</option>
             </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <span>Year : </span>
             <select name="">
              <option value="">president1</option>
              <option value="">2000</option>
              <option value="">2001</option>
              <option value="">2002</option>
             </select>
              </br></br></br> 
              

             <span>Secretery : </span>
             <select name="">
               <option value="">Secretery1</option>
               <option value="">Secretery1</option>
             </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <span>Other Post : </span>
             <select name="">
              <option value="">other post 1</option>
              <option value="">other post 2</option>
              
             </select>
              </br></br></br> 

             <span>Treasure : </span>
             <select name="">
               <option value="">Treasure1</option>
               <option value="">Treasure1</option>
             </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <span>Other Post : </span>
             <select name="">
              <option value="">other post 1</option>
              <option value="">other post 2</option>
              
             </select>
          
            

              </br></br></br> 
           
                <div class="form-inline">
            <span> Upload Document : </span>
            <input class="form-control" type="file" name=""> 
           </div>-->

       </form>
               
       </div><!-- end of col-sm-9 -->

       <div class="col-sm-9" style="border: 4px solid grey;border-radius: 13px;">
        <div><center><h2 style="background-color: #f1f1f1; padding: 15px;border-radius: 8px;">Club Post</h2></center></div>
            <hr>
            
        <div class="col-sm-12">
          <div class="col-sm-6">
            <div class="col-sm-6">
              <label>President : </label>
              <br>
              <br>
              <br>
              <label>Secretery :</label> 
              <br>
              <br>
              <br>
              <label>Treasure : </label>
            </div>

            <div class="col-sm-6">
              <select class="form-control" name="">
               <option value="">president1</option>
               <option value="">president1</option>
             </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
             <br>
             <select class="form-control" name="">
               <option value="">Secretery1</option>
               <option value="">Secretery1</option>
             </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <br>
           
             <select class="form-control" name="">
               <option value="">Treasure1</option>
               <option value="">Treasure1</option>
             </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>


            <div class="col-sm-6"></div>
          <br>
          </div> 
          <div class="col-sm-6">
            <div class="col-sm-6">
              <label>Year : </label>
              <br>
              <br>
              <br>
              <label>Other Post : </label>
              <br>
              <br>
              <br>
              <label>Other Post : </label>
            </div>
            <div class="col-sm-6">
              <select class="form-control" name="">
              <option value="">president1</option>
              <option value="">2000</option>
              <option value="">2001</option>
              <option value="">2002</option>
             </select>
             <br>
             <select class="form-control" name="">
              <option value="">other post 1</option>
              <option value="">other post 2</option>
             </select>
             <br>
             <select class="form-control" name="">
              <option value="">other post 1</option>
              <option value="">other post 2</option>
             </select>
           </div>
           <br>
          </div>

          <br>
          <br>
          <div class="col-sm-12" style="margin: 16px 0 0 0;padding: 10px;">
          <div class="col-sm-6"><label> Upload Document : </label></div>
          <div class="col-sm-6"><input class="form-control" type="file" name=""></div> 
        </div>
       </div>

        </div>
        

        

     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->
    
  @stop