<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Models\Sms\Club;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    public $model;
         
     public function __construct(Club $model)
     {
        $this->model=$model;
        

     }   

     public function index(Club $model)
     {
            $data = $this->model->paginate(4);
      

        return view('backend.Club.index',compact('data'));
     }

     public function create()
        {
      
            return view('backend.Club.index');

        }

        public function store(Request $request)
        {
                 $this->validate($request,array(
                'title'=>'required',
                'icon'=>'required|mimes:jpeg,bmp,png,jpg',
                                ));

            $data = $request->all();
       if ($request->hasFile('icon')) 
        		 {
        
            $file = $request->file('icon');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(1000 , 9999);
            $filename = $originalNameWithoutExt . '-' . $number . '.' . $extension;
            $file = $request->file('icon');

            $p = $file->move(
                base_path() . '/public/uploads/club/' , $filename
            );
            
            $data = [
                
                'title' => $request->title,
                'founded_year' => $request->founded_year,
                'location' => $request->location,
                'description' => $request->description,
                'icon' => $filename,
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

            return view('backend.Club.index',compact('data','model'));
        	}



        public function update($id , Request $request)
        {
                            $this->validate($request,array(
                'title'=>'required',
                                ));

            if($request->hasFile('icon'))
            
            {

            $file = $request->file('icon');
            

           $originalName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $file = $request->file('icon');


           $p = $file->move(
                base_path() . '/public/uploads/club/' , $filename
            );
            
           $data = [
                
              
                'title' => $request->title,
                'founded_year' => $request->founded_year,
                'location' => $request->location,

                'description' => $request->description,
                'icon' => $filename,
                'status'=>0,  
                
                
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
        
        public function clubapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }





    public function form1(){
            return view('backend.Club.forms.form1');
        }

        public function form2(){
            return view('backend.Club.forms.form2');
        }
        public function form3(){
            return view('backend.Club.forms.form3');
        }
        public function form4(){
            return view('backend.Club.forms.form4');
        }
        public function form5(){
            return view('backend.Club.forms.form5');
        }
        public function form6(){
            return view('backend.Club.forms.form6');
        }
        public function form7(){
            return view('backend.Club.forms.form7');
        }
        public function form8(){
            return view('backend.Club.forms.form8');
        }
        public function form9(){
            return view('backend.Club.forms.form9');
        }

        public function form10(){
            return view('backend.Club.forms.form10');
        }



}
