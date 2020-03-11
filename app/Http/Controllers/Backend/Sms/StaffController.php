<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\Staff;

use App\Http\Requests\Backend\Sms\CreateStaffRequest;
use Session;

class StaffController extends Controller
{
      public $model;
        
        

    public function __construct(Staff $model )
   {

       $this->model = $model;
   }


   public function index(Staff $model)
   { 
      
       $data = $this->model->paginate(4);
      return view('backend.form.staff' , compact('data'));

   }


   public function create()
    {

      return view('backend.form.staff');
    }


    public function store(CreateStaffRequest $request)
    {

        $data = $request->all();
        
        $photo = $request->file('image');
       if ($request->hasFile('image')) 
       {

         $originalName = $photo->getClientOriginalName();
         $extension = $photo->getClientOriginalExtension();
         $size = $photo->getClientSize();
         $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);
         $filename = $originalNameWithoutExt . '-' . '-' . "." . $extension;
         $photo = $request->file('image');
         $p = $photo->move( base_path() . '/public/uploads/entrance/', $filename );


            $data = [

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'per_state' => $request->per_state,
            'per_municipality' => $request->per_municipality,
            'per_ward_no' => $request->per_ward_no,
            'per_address' => $request->per_address, 
            'temp_state' => $request->temp_state,   
            'temp_municipality' => $request->temp_municipality,
            'temp_ward_no' => $request->temp_ward_no,
            'temp_address' => $request->temp_address,
            'email' => $request->email,
            'faculty' => $request->faculty,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'mobile' => $request->mobile,
            'phone' => $request->phone,

            'image' => $filename,
                      ];
           $this->model->create($data);
        } 
   
      else
       {

         $this->model->create($data);
        }

        Session::flash('flash_success','Staff has been successfully created');


        return redirect()->back();
    }


    public function edit($id)
    {

    	$model = $this->model->find($id);
   	    $data = $this->model->paginate(4);
        return view('backend.form.Staff' , compact('data','model'));
    }



    public function update($id , CreateStaffRequest $request)
   {     
     $data = $request->all();
    $photo = $request->file('image');

    if ($request->hasFile('image')) 
    {

      $originalName = $photo->getClientOriginalName();

      $extension = $photo->getClientOriginalExtension();
      $size = $photo->getClientSize();
      $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);

      $filename = $originalNameWithoutExt . '-' . '-' . "." . $extension;
      $photo = $request->file('image');

      $p = $photo->move(
        base_path() . '/public/uploads/photo', $filename
      );
      
      $data = [
             'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'per_state' => $request->per_state,
            'per_municipality' => $request->per_municipality,
            'per_ward_no' => $request->per_ward_no,
            'per_address' => $request->per_address, 
            'temp_state' => $request->temp_state,   
            'temp_municipality' => $request->temp_municipality,
            'temp_ward_no' => $request->temp_ward_no,
            'temp_address' => $request->temp_address,
            'email' => $request->email,
            'fateher_first_name' => $request->fateher_first_name,
            'father_last_name' => $request->father_last_name,
            'father_middle_name' => $request->father_middle_name,
            'faculty' => $request->faculty,
            'course' => $request->course,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'Guardian_mobile' => $request->Guardian_mobile,
            'guardian_phone' => $request->guardian_phone,
            'file' => $request->file,
      ];

      $this->model->find($id)->update($data);
    } 
    else
    {

      $this->model->find($id)->update($request->all());
    }



    Session::flash('flash_success','Staff has been successfully updated');
   return redirect('admin/Staff');
   
           
    }


    public function delete($id)
    {

    $this->model->find($id)->delete();
        Session::flash('flash_success','Staff has been successfully deleted');

    return redirect()->back();
   }
}
