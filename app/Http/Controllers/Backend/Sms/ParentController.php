<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\ParentModel;
use App\Models\Sms\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateParentRequest;
use Auth;
class ParentController extends Controller
{
     
    public $model;
    public $address;
        
        

        public function __construct(ParentModel $model, Address $address)
        {

            $this->model = $model;
            $this->address = $address;
           
            
        }


        public function index(ParentModel $model)
        {


            $data = $this->model->paginate(4);
            $address=$this->address->all();
           

            



            return view('backend.Parent.index' , compact('data','address'));

        }


        public function create()
        {

            return view('backend.Parent.create');
        }


        public function store(CreateParentRequest $request)
        {
             $data = $request->all();

            $user_id = Auth::User()->id;
           

            $data = [
                
                'nick_name' => $request->nick_name,
                'gender' => $request->gender,
                'user_id'=>$user_id,
                
                
                
            ];
       



            $address=$this->model->create($data);
            $address->address()->attach($request->addresses);


            

            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
         
            $data = $this->model->paginate(4);
            

            return view('backend.Parent.index' , compact('data','model'));
        
		}

        public function update($id , CreateParentRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/parent');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }

}
