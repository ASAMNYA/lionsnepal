<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Models\Sms\ContentOther;
use App\Http\Controllers\Controller;

class ContentOtherController extends Controller
{
     public $model;
         
     public function __construct(ContentOther $model)
     {
        $this->model=$model;
        

     }   

     public function index(ContentOther $model)
     {
            $data = $this->model->paginate(4);
      

        return view('backend.ContentOther.index',compact('data'));
     }

     public function create()
        {
      
            return view('backend.ContentOther.index');

        }

        public function store(Request $request)
        {
                


                 $this->validate($request,array(
                'title'=>'required',
                'file'=>'required|mimes:jpeg,bmp,png,jpg,gif',
                'body'=>'required'
                                ));

            $data = $request->all();


               if ($request->hasFile('file')) 
        		 {
        
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(1000 , 9999);
            $filename = $originalNameWithoutExt . '-' . $number . '.' . $extension;
            $file = $request->file('file');

            $p = $file->move(
                base_path() . '/public/uploads/' , $filename
            );
            
            $data = [
                
                'title' => $request->title,
                'body' => $request->body,
                'file' => $filename,
                'status'=>0,          
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
   	    		$data = $this->model->paginate(8);

            return view('backend.ContentOther.index',compact('data','model'));
        	}



        public function update($id , Request $request)
        {
            

                 $this->validate($request,array(
                'title'=>'required',
                'body'=>'required'
                                ));
           
            if($request->hasFile('file'))
            
            {

            $file = $request->file('file');
            

           $originalName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $file = $request->file('file');


           $p = $file->move(
                base_path() . '/public/uploads/' , $filename
            );
            
           $data = [
                
                'title' => $request->title,
                'body' => $request->body,
                'file' => $filename,
          
                
                
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

      public function contentotherapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }



}
