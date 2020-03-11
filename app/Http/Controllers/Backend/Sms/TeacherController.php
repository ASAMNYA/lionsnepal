<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateTeacherRequest;
class TeacherController extends Controller
{
     public $model;
        
        

        public function __construct(Teacher $model)
        {

            $this->model = $model;

           
            
        }
        public function showallteachers(){
            $data=$this->model->all();
            return view('backend.Teacher.showall',compact('data'));

        }



        public function index($id,Teacher $model)
        {
            $data = $this->model->find($id)->get();
    
            // $data = $this->model->paginate(4);
            return view('backend.Teacher.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Teacher.create');
        }


        public function store(CreateTeacherRequest $request)
        {
            



            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(4);
            

            return view('backend.Teacher.index' , compact('data','model'));
        
		}

        public function update($id , CreateTeacherRequest $request)
        {

            if ($request->hasFile('image')) 
         {
            
            $photo = $request->file('image');
            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number . '.' . $extension;
            $photo = $request->file('image');

            $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
            
            }
            else{
              $filename='default.jpg';
            }
            $data = [
                
                'gender' => $request->gender,
                'age' => $request->age,
                'start_date'=>$request->start_date,
                'job_experience'=>$request->job_experience,
                'subject'=>$request->subject,
                'image' => $filename,
                'other_detail'=>$request->other_detail,
                     
            ];

          $this->model->find($id)->update($data);

             return redirect('admin/showallteacher');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }


}
