<?php

namespace App\Http\Controllers\Backend\Sms;

use App\Models\Sms\OrgLevelCat;
use App\Http\Requests\Backend\Sms\CreateOrgLevelCatRequest;
use App\Http\Controllers\Controller;

class OrgLevelCatController extends Controller
{
     public $model;
        
        

        public function __construct(OrgLevelCat $model )
        {

            $this->model = $model;
           
            
        }


        public function index(OrgLevelCat $model)
        {

            $data = $this->model->paginate(10);


            return view('backend.OrgLevelCat.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.OrgLevelCat.create');
        }


        public function store(CreateOrgLevelCatRequest $request)
        {


                 $this->validate($request,array(
                'title'=>'required'

            ));

           $data=$this->model->create($request->all());


            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(10);
            

            return view('backend.OrgLevelCat.index' , compact('data','model'));
        
		}

        public function update($id , CreateOrgLevelCatRequest $request)
        {
              $this->validate($request,array(
                'title'=>'required'

            ));

            $this->model->find($id)->update($request->all());
             return redirect('admin/orglevelcat');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
        
    public function familytreeapi() {

        $data = $this->model->paginate(8);
        
        return json_encode($data);
    }
}
