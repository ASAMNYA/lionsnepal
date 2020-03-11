<?php

namespace App\Http\Controllers\Backend\Sms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateEventRequest;
use App\Models\Sms\Events;
use Auth;

class EventController extends Controller
{
       public $model;

	 public function __construct(Events $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){

	 	 $data = $this->model->paginate(4);
	 	return view('backend.Event.index',compact('data'));
	 }

	         public function create()
        {

            return view('backend.Event.create');
        }


        public function store(CreateEventRequest $request)
        {



                 $this->validate($request,array(
               
                'status' => 'required',
                'start_time' =>'required',
                'end_time' =>'required', 
                'start_date' =>'required', 
                'end_date' =>'required',
                'name' =>'required',
                'description' =>'required',
                'image' =>'required|mimes:jpeg,bmp,png,jpg,gif',
                'location'=>'required',

                            ));


        	$data = $request->all();
            $user_id = Auth::User()->id;
            $photo = $request->file('image');
            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number . '-' . $extension;
            $photo = $request->file('image');


            $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
            

            
            $data = [
                
                'status' => $request->status,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'name' => $request->name,
                 'user_id'=>$user_id,
                 'location'=>$request->location,
                'description' => $request->description,
                'image' => $filename,
                
                
            ];

            $this->model->create($data);
            
             return redirect('admin/event');
        }

		public function edit($id)
       	 {

            $model = $this->model->find($id);

            $data = $this->model->paginate(4);
            

            return view('backend.Event.create' , compact('data','model'));
        
		}



        public function update($id , CreateEventRequest $request)
        {
            
                 $this->validate($request,array(
               
                'status' => 'required',
                'start_time' =>'required',
                'end_time' =>'required', 
                'start_date' =>'required', 
                'end_date' =>'required',
                'name' =>'required',
                'description' =>'required',
                'location'=>'required',

                            ));

            if($request->hasFile('image'))
            
            {

            $photo = $request->file('image');
            $user_id = Auth::User()->id;
            

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
                
                'status' => $request->status,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'name' => $request->name,
                'description' => $request->description,
                'image' => $filename,
                'user_id'=>$user_id,

                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
    
             return redirect('admin/event');
            
        }


            
        




        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }

      public function eventapi() {

        $data = $this->model->paginate(200);
    
                return json_encode($data);
    }

}
