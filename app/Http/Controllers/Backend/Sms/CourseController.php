<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateCourseRequest;
class CourseController extends Controller
{
    public $model;
        
        

        public function __construct(Course $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Course $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Course.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Course.create');
        }


        public function store(CreateCourseRequest $request)
        {


            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(4);
            

            return view('backend.Course.index' , compact('data','model'));
        
		}

        public function update($id , CreateCourseRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/course');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }

}
