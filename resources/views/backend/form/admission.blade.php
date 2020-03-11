@extends('backend.layouts.app')
@section('content')
{{ Form::open(['route' => 'student.admission.store', 'class' => 'form-horizontal', 'role' => 'form', 'file'=>'true' ,'method' => 'post']) }}

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
     {{--   <div class="col-sm-3">

          <div>
            <p>Login User Info: </p>
            <p>fname Date: 2074/11/06 </p>
            <p>Time: 12:00</p> 
            <p>Type: admin</p>
          </div>

         </br>
         <table class="button" width="40%">
          <button type="button" class="save_button">Home</button></br>
          <button type="button" class="save_button">Username</button></br>
          <button type="button" class="save_button">password</button></br>
          <button type="button" class="save_button">Policy Define</button></br></br><p>----------------------------</p></br>
          <button type="button" class="save_button">Admission Form</button></br>
          <button type="button" class="save_button">Entrance Form</button></br>
          <button type="button" class="save_button">Student Record</button></br>
          <button type="button" class="save_button">Staff Info</button></br>
          <button type="button" class="save_button">Department</button></br>
          <button type="button" class="save_button">syllabus</button></br>
          <button type="button" class="save_button">Attendance</button></br>
          <button type="button" class="save_button">Notice</button></br>
          <button type="button" class="save_button">Program Events</button></br>
          <button type="button" class="save_button">Account</button></br>
          <button type="button" class="save_button">Library Info</button></br>
          <button type="button" class="save_button">Student Id Card</button></br>
          <button type="button" class="save_button">Video Upload</button></br>
          <button type="button" class="save_button">Audio Upload</button></br>
          <button type="button" class="save_button">Gallery</button></br>
          <button type="button" class="save_button">User manage</button></br>
          <button type="button" class="save_button">Subject Manage</button></br>
          <button type="button" class="save_button">Department Manage</button></br>
          <button type="button" class="save_button">Student Blog</button></br>
          <button type="button" class="save_button">Approve Info</button></br>
          <button type="button" class="save_button"> Bulk Email</button></br>
         </table>
       </div>< --}}


       <div class="col-sm-9">
         <h2><center>Admission Form</center></h2>
          </br>
          </br>
          </br>
          </br>
         <h3>Serial no: <input type="text" placeholder="<?php echo(rand(1400,40000));?>" readonly></h3>

         <div class="container">
          
        
       </br>
         <form>
           <span>Name of Applicant : </span><input type="text" name="first_name" placeholder="Frist Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="middle_name" placeholder="Middle Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last_name" placeholder="Last Name">
           </br></br></br>
            <span>Permanent Address : </span><select name="per_state">
              <option value="0">State1</option>
              <option value="1">State2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
            <select name="per_municipality">
              <option value="0">Municipality1</option>
              <option value="1">Municipality2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="per_ward_no">
              <option value="0">Ward No1</option>
              <option value="1">Ward No2</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="per_address" placeholder="Address">

          </br></br></br>

            <span>Temporary Address : </span><select name="temp_state">
              <option value="0">State1</option>
              <option value="1">State2</option>
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

           <span> Father's Name : </span><input type="text" name="father_first_name" placeholder="First Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="father_middle_name" placeholder="Middle Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="father_last_name" placeholder="Last Name">
           </br></br></br>

            <span>Faculty : </span>
            <select name="faculty">
              <option value="0">Faculty1</option>
              <option value="1">Faculty2</option>
            </select>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <span>Course : </span>
            <select name="course">
              <option value="0">Course1</option>
              <option value="1">Course2</option>
            </select> 
              </br></br></br> 
             <span>D.O.B : </span> <input type="Date" name="dob"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <span>Sex : </span> <input type="radio" name="sex"/>Male  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="sex"/>Female
             </br></br></br>  
             <span>Contact no : </span><input type="text" name="mobile" placeholder="Mobile no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" placeholder="phone no">

              </br></br></br> 

             <span>Guardian no : </span><input type="text" name="Guardian_mobile" placeholder="Mobile no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="guardian_phone" placeholder="phone no">

              </br></br></br> 
             <div class="form-inline">

               <span>Upload Document:</span><input type="file" class="form-control" name="file" placeholder=""/>

             </div> 
              </br></br></br> 

             <div>
                <p>------------------------------</p>
              <span>Approve</span>
                {{ Form::submit(trans('Approve'), ['class' => 'btn btn-success btn-xs','disabled']) }}
               
             </div>  

                </form>

       </div><!-- end of col-sm-9 -->
     </div><!--end of row -->
   </div><!-- end of container-->
 </div> <!-- end of container-fluid-->
</body>
</html>
  @stop