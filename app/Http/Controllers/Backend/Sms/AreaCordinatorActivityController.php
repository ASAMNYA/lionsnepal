<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\AreaCordinatorRegion;
use App\Models\Sms\AreaCordinatorActivity;

class AreaCordinatorActivityController extends Controller
{
          public $model;
         public $region;
         

     public function __construct(AreaCordinatorActivity $model , AreaCordinatorRegion $region)
     {
        $this->model=$model;
        $this->region=$region;
        

     }   

     public function index(AreaCordinatorActivity $model , AreaCordinatorRegion $region)
     {
            $data = $this->model->paginate(4);
      
           
            $region_id=$this->region->pluck('title','id');
        

        return view('backend.AreaCordinator.Activityindex',compact('data','region_id'));
     }

     public function create()
        {
      
            return view('backend.AreaCordinator.Activityindex');

        }

        public function store(Request $request)
        {
 
            $data = $request->all();


                 $this->validate($request,array(
                'title'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png,jpg',
                'description'=>'required',
                'region'=>'required'
            

            ));

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
                'description' => $request->description,
                'region'=>$request->region,
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
   	    		$data = $this->model->paginate(8);

            $region_id=$this->region->pluck('title','id');

                

            return view('backend.AreaCordinator.Activityindex',compact('data','model','region_id'));
        }



        public function update($id , Request $request)
        {
            
            $data = $request->all();


                 $this->validate($request,array(
                'title'=>'required',
                'description'=>'required',
                'region'=>'required'
            

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
                'description' => $request->description,
                'image' => $filename,
                'region'=>$request->region,
                
                
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
        
         public function areacordinatorapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }

}
