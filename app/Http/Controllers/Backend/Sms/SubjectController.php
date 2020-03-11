<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Subject;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateSubjectRequest;
class SubjectController extends Controller
{
   public $model;
        
        

        public function __construct(Subject $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Subject $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Subject.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Subject.create');
        }


        public function store(CreateSubjectRequest $request)
        {


            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(4);
            

            return view('backend.Subject.index' , compact('data','model'));
        
		}

        public function update($id , CreateSubjectRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/subject');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }


}
