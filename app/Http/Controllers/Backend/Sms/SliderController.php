<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Slider;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateSliderRequest;

class SliderController extends Controller
{
    public $model;
        
        

        public function __construct(Slider $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Slider $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Slider.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Slider.create');
        }


        public function store(CreateSliderRequest $request)
        {   


                 $this->validate($request,array(
                'title'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png,jpg',
                'description'=>'required',
                'order'=>'required|numeric'
            ));

			$data = $request->all();

            $album_id = $request->album_id;
            
            $photo = $request->file('image');      
            $originalName = $photo->getClientOriginalName();

            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(1000 , 9999);
            $filename = $originalNameWithoutExt . '-' . $number . '-' . $album_id . "." . $extension;
            $photo = $request->file('image');


            $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
         
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                'order' => $request->order,
                'image'      => $filename ,

            ];


            $this->model->create($data);
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Slider.index' , compact('data','model'));
        
		}

        public function update($id , CreateSliderRequest $request)
        {
            

                 $this->validate($request,array(
                'title'=>'required',
                'description'=>'required',
                'order'=>'required|numeric'
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
                'order' => $request->order,
                'image'      => $filename ,

            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
       

             return redirect('admin/slider');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
        
         public function sliderapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }
}
