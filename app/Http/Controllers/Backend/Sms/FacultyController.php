<?php

namespace App\Http\Controllers\Backend\Sms;

use App\Models\Sms\Faculty;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateFacultyRequest;

class FacultyController extends Controller
{
     public $model;
        
        

        public function __construct(Faculty $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Faculty $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Faculty.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Faculty.create');
        }


        public function store(CreateFacultyRequest $request)
        {


           $data=$this->model->create($request->all());
           

            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(4);
            

            return view('backend.Faculty.index' , compact('data','model'));
        
		}

        public function update($id , CreateFacultyRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/faculty');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }

}
