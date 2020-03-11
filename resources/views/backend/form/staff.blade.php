@extends('backend.layouts.app')
@section('content')
{{ Form::open(['route' => 'student.staff.store', 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true', 'method' => 'post']) }}
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title></title>
     <link  rel="stylesheet" href="{{url('public/css/frontend/bootstrap.min.css')}}">
     <style type="text/css">
       .save_button {
    min-width: 100px;
    max-width: 100px;
}
     </style>
</head>

<body> 
  <div class="container-fluid ">
    <div class="container">
      <div class="row">
       

       <div class="col-sm-9">
           <h2><center>Staff Info</center></h2>
          </br>
          </br>
          </br>
          </br>
         <div class="container">
          <div class="row">
           
             </div><!-- end of row -->
         </div><!-- end of container -->
         <h3>Serial no:</h3>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
         
         </div> 
         <div class="col-sm-5">
         <img src=" {{url('public/uploads/images.png')}}" style=" width: 40%">
               <span>image:</span><input type="file"  name="image" placeholder=""/>
          
         </div>
       </div>
         </div>
       </br>
         <form>
           <span>Name of Applicant : </span><input type="text" name="first_name" placeholder="First Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="middle_name" placeholder="Middle Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last_name" placeholder="Last Name">
           </br></br></br>
            <span>Permanent Address : </span><select name="per_state">
              <option value="0">State</option>
              <option value="1">State1</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
            <select name="per_municipality">
              <option value="0">Municipality1</option>
              <option value="2">Municipality2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="per_ward_no">
              <option value="0">Ward No1</option>
              <option value="1">Ward No2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="per_address" placeholder="Address">

          </br></br></br>

            <span>Temporary Address : </span><select name="temp_state">
              <option value="0">State</option>
              <option value="1">State1</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
            <select name="temp_municipality">
              <option value="0">Municipality1</option>
              <option value="1">Municipality2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="temp_ward_no">
              <option value="0">Ward No1</option>
              <option value="1">Ward No2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="temp_address" placeholder="Address">

           </br></br></br>
             
           <span>Email : </span><input type="text" name="email" placeholder="">
           </br></br></br>

           

            <span>Faculty : </span>
            <select name="faculty">
              <option value="0">faculty0</option>
              <option value="1">faculty1</option>
            </select>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        
              </br></br></br> 
             <span>D.O.B</span> <input type="Date" name="dob"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <span>Sex : </span> <input type="radio" name="sex"/>Male  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="sex"/>Female
             </br></br></br>  
             <span>Contact no : </span><input type="text" name="mobile" placeholder="Mobile no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" placeholder="phone no">

              
          
            

              </br></br></br> 
           

             <div>
                <p>------------------------------</p>
              <span>Signature</span>
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
               
             </div>  

                </form>

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->
</body>
</html>
  @stop
