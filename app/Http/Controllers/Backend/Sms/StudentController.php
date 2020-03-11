<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Student;
use App\Models\Sms\Address;
use App\Models\Sms\ParentModel;
use App\Models\Sms\ClassParent;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\Backend\Sms\CreateStudentRequest;
class StudentController extends Controller
{
   
   public $model;
   public $parentmodel;
   public $address;
   public $classparent;
        
        

        public function __construct(Student $model , ParentModel $parentmodel ,Address $address,ClassParent $classparent)
        {

            $this->model = $model;
            $this->parentmodel = $parentmodel;
            $this->address = $address;
            $this->classparent = $classparent;
           
            
        }


        public function showallstudents(Student $model)
        {

            $data = $this->model->paginate(8);



            return view('backend.Student.showallstudent' , compact('data'));

        }


        public function studentcardall(Student $model)
        {

            $data = $this->model->paginate(8);



            return view('backend.Student.studentcardall' , compact('data'));

        }



        public function studentdetail($id)
        {

            $data = $this->model->find($id);



            return view('backend.Student.student-detail' , compact('data'));

        }



        public function index(Student $model)
        {

            $data = $this->model->paginate(4);
            $parent_id = $this->parentmodel->pluck('nick_name','id');
            $student=$this->address->all();
            $classparent=$this->classparent->all();
    
        


            return view('backend.Student.index' , compact('data','parent_id','student','classparent'));

        }


        public function create()
        {

            return view('backend.Student.create');
        }


        public function store(CreateStudentRequest $request)
        {
             $data = $request->all();


            $user_id = Auth::User()->id;
            $parent_id=$request->parent_id;


            $data = [
                
                'gender' => $request->gender,
                'dob' => $request->dob,
                'other_detail'=>$request->other_detail,
                'user_id'=>$user_id,
                'parent_id'=>$parent_id,
                
                
            ];


            $student=$this->model->create($data);
            $student->address()->attach($request->addresses);

            $student->classparent()->attach($request->classparent);




            

            return redirect()->back();

        }


        public function edit($id)
        {


            // $data = $this->model->paginate(4);
            // $parent_id = $this->parentmodel->pluck('nick_name','id');
            // $student=$this->address->all();
            // $classparent=$this->classparent->all();



            $model = $this->model->find($id);
            $parent_id = $this->parentmodel->pluck('nick_name','id');
            $student=$this->address->all();
            $classparent=$this->classparent->all();

            $data = $this->model->paginate(4);
            

            return view('backend.Student.index' , compact('data','model','parent_id','student','classparent'));
        
		}

        public function update($id , CreateStudentRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/allstudent');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }

}
