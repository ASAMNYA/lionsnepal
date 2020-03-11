<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateAddressRequest;
class AddressController extends Controller
{
    
    
    public $model;
        
        

        public function __construct(Address $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Address $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Address.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Address.create');
        }


        public function store(CreateAddressRequest $request)
        {


                 $this->validate($request,array(
                'name'=>'required'
     
            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(4);
            

            return view('backend.Address.index' , compact('data','model'));
        
		}

        public function update($id , CreateAddressRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/address');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }



}
