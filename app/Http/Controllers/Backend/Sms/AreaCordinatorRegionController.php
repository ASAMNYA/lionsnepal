<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\AreaCordinatorRegion;


class AreaCordinatorRegionController extends Controller
{
    

	public $model;
        
        

        public function __construct(AreaCordinatorRegion $model )
        {

            $this->model = $model;
           
            
        }


        public function index(AreaCordinatorRegion $model)
        {

            $data = $this->model->paginate(8);


            return view('backend.AreaCordinator.Regionindex' , compact('data'));

        }


        public function create()
        {

            return view('backend.AreaCordinator.Regionindex');
        }



        public function store(Request $request)
        {

                 $this->validate($request,array(
                'title'=>'required'
 
            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.AreaCordinator.Regionindex' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
            
                 $this->validate($request,array(
                'title'=>'required'
 
            ));

            $this->model->find($id)->update($request->all());
             return redirect('admin/areacordinatorregion');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }


}
