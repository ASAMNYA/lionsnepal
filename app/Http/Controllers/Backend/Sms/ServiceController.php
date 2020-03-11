<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateServiceRequest;

class ServiceController extends Controller
{
   
    public $model;
        
        

        public function __construct(Service $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Service $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Service.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Service.create');
        }


        public function store(CreateServiceRequest $request)
        {


            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Service.index' , compact('data','model'));
        
}

        public function update($id , CreateServiceRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/service');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
