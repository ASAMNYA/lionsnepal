<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Models\Sms\Logo;
use App\Http\Controllers\Controller;

class LogoController extends Controller
{
         public $model;
         

     public function __construct(Logo $model)
     {
        $this->model=$model;
        

     }   

     public function index(Logo $model)
     {
            $data = $this->model->paginate(10);
      
           
        

        return view('backend.Logo.index',compact('data'));
     }

     public function create()
        {
      
            return view('backend.Logo.index');

        }

        public function store(Request $request)
        {
    


                 $this->validate($request,array(
                'title'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png,jpg'
               
            ));
            $data = $request->all();


               if ($request->hasFile('image')) 
         {
        
            $photo = $request->file('image');
            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(1000 , 9999);
            $filename = $originalNameWithoutExt . '-' . $number . '.' . $extension;
            $photo = $request->file('image');

            $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
            
            $data = [
                'title' => $request->title,
                'image' => $filename,
            ];

            $latest=$this->model->create($data);
                }
            
            else{
           $this->model->create($request->all());
            
            }


            return redirect()->back();

                            

        }



           public function edit($id)
           {
                $model=$this->model->find($id);
   	    		$data = $this->model->paginate(10);


                

            return view('backend.Logo.index',compact('data','model'));
        }



        public function update($id , Request $request)
        {
             $this->validate($request,array(
                'title'=>'required',
               
            ));
            if($request->hasFile('image'))
            
            {

            $photo = $request->file('image');
            

           $originalName = $photo->getClientOriginalName();

            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $photo = $request->file('image');


           $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
            
           $data = [
                
                'title' => $request->title,
                'image' => $filename,
            ];

          $this->model->find($id)->update($data);
          }
          else
          {
            

           $this->model->find($id)->update($request->all());
            }
       
           
           
            return redirect()->back(); 
        }

        


        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }
        
              public function logoapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }

}
