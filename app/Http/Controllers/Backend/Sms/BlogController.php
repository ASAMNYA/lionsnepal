<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Blog;
use App\Models\Sms\Category;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Http\Requests\Backend\Sms\CreateBlogRequest;
class BlogController extends Controller
{
         public $model;
         public $category;
         

     public function __construct(Blog $model , Category $category)
     {
        $this->model=$model;
        $this->category=$category;
        

     }   

     public function index(Blog $model , Category $category)
     {
        $blog=BLog::where('user_id','=',Auth::user()->id)->paginate(4);

            /*$blog =$this->model->latest()->paginate(4);*/

            
           
            $category_id=$this->category->pluck('title','id');
        

        return view('backend.Blog.index',compact('blog','category_id'));
     }

     public function create()
        {
                $category_id=$this->category->pluck('title','id');

                          if(Auth::user()->hasRole(3)||Auth::user()->hasRole(1))

                            {
                            return view('backend.Blog.create',compact('category_id'));
                            }

                          else
                            {
                                return redirect()->back();
                            }
                            
     
            
                

        }

public function show($id)
{

    $blogshow=Blog::findOrfail($id);

    return view('backend.Blog.show',compact('blogshow'));
}



        public function store(CreateBlogRequest $request)
        {


                 $this->validate($request,array(
                'title'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png,jpg',
                'description'=>'required',
                'category_id'=>'required'

            ));
            
            $data = $request->all();

            $user_id = Auth::User()->id;

               if ($request->hasFile('image')) 
         {
        
            $photo = $request->file('image');
            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(1000 , 9999);
            $filename = $originalNameWithoutExt . '-' . $number . '-' . $extension;
            $photo = $request->file('image');

            $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
          
            
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                'category_id'=>$request->category_id,
                'image' => $filename,
                'user_id'=>$user_id,
          
            ];
            $latest=$this->model->create($data);
          }

          else{
           $this->model->create($request->all());
          
          }

            Session::flash('flash_success', 'New Blog has been Created!.');       
            Session::flash('flash_type', 'alert-success');
          
          return redirect('admin/blog');

        }



           public function edit($id)
           {
                $data=$this->model->find(1);
                

            return view('backend.Blog.index',compact('data'));
        }



        public function update($id , CreateBlogRequest $request)
        {
           
           
                 $this->validate($request,array(
                'title'=>'required',
                'description'=>'required',
                'category_id'=>'required'

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
                
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
                'url'=>$request->url,
                'user_id'=>$user_id,         
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
           $this->model->find($id)->update($request->all());
        }
       
            Session::flash('flash_success', 'Blog has been Updated!.');       
            Session::flash('flash_type', 'alert-success');
           
           
            return redirect()->back(); 
        }

        


        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
             
        }
        
        public function blogapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }


}
