<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Notice;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateNoticeRequest;

class NoticeController extends Controller
{
    public $model;
        
        

        public function __construct(Notice $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Notice $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Notice.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Notice.create');
        }


        public function store(CreateNoticeRequest $request)
        {


                 $this->validate($request,array(
                'title'=>'required',
                'body'=>'required'
         
            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Notice.index' , compact('data','model'));
        
}

        public function update($id , CreateNoticeRequest $request)
        {
            
                 $this->validate($request,array(
                'title'=>'required',
                'body'=>'required'
         
            ));

            $this->model->find($id)->update($request->all());
             return redirect('admin/notice');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
