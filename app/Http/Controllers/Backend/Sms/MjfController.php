<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Mjf;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateMjfRequest;
class MjfController extends Controller
{
    public $model;
        
        

        public function __construct(Mjf $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Mjf $model)
        {

            $data = $this->model->paginate(10);


            return view('backend.Mjf.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Mjf.create');
        }


        public function store(CreateMjfRequest $request)
        {

              $this->validate($request,array(
                'name'=>'required',
                
                'description'=>'required'

            ));

      
              if($request->hasFile('image'))
            
            {

            $file = $request->file('image');
            

           $originalName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $file = $request->file('image');


           $p = $file->move(
                base_path() . '/public/uploads/' , $filename
            );
            
           $data = [
                
              
               'name' => $request->name,
                'description' => $request->description,
                'image'      => $filename ,
                
                
            ];

          $this->model->create($data);
      }
      else
      {
           $data = [
                
              
               'name' => $request->name,
                'description' => $request->description,
                'image'      => 'default.jpg',
                
                
            ];

          $this->model->create($data);
                }
        
            return redirect()->back();
        }



        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(10);
            

            return view('backend.Mjf.index' , compact('data','model'));
        
}

        public function update($id , CreateMjfRequest $request)
        {
              $this->validate($request,array(
                'name'=>'required',
                
                'description'=>'required'

            ));

      
              if($request->hasFile('image'))
            
            {

            $file = $request->file('image');
            

           $originalName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $file = $request->file('image');


           $p = $file->move(
                base_path() . '/public/uploads/' , $filename
            );
            
           $data = [
                
              
               'name' => $request->name,
                'description' => $request->description,
                'image'      => $filename ,
                
                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
        
        

             return redirect('admin/mjf');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
        public function mjfapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }
}
