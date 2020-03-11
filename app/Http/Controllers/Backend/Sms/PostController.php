<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreatePostRequest;
use Auth;
class PostController extends Controller
{
   
    public $model;
        
        

        public function __construct(Post $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Post $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Post.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Post.create');
        }


        public function store(CreatePostRequest $request)
        {

            $this->validate($request,array(
                'title'=>'required',
                'image'=>'required',
                'description'=>'required',
                
             
            ));
                 

            $data = $request->all();
            $user_id = Auth::User()->id;


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
                
                'user_id'=>$user_id,
              
                'image'      => $filename,
            
                
                
            ];


            $this->model->create($data);
            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Post.index' , compact('data','model'));
        
}

        public function update($id , CreatePostRequest $request)
        {
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
                
                'title' => $request->title,
                'description' => $request->description,
                
                'user_id'=>$user_id,
              
                'image'      => $filename,
                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
       

                        
           
           
             return redirect('admin/post');
        
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
