<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Category;
use App\Models\Sms\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateCategoryRequest;
class CategoryController extends Controller
{
    public $model;
        
        

        public function __construct(Category $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Category $model)
        {

            $data = $this->model->paginate(8);


            return view('backend.Category.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Category.create');
        }


public function showblogbycategory($id ,Category $model, Blog $blog )
{

$category=$this->model->find($id);


$data=Blog::where('category_id',$id)->get();

return view('backend.Category.create',compact('data','category'));
}


















        public function store(CreateCategoryRequest $request)
        {

                 $this->validate($request,array(
                'title'=>'required'
 
            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Category.index' , compact('data','model'));
        
}

        public function update($id , CreateCategoryRequest $request)
        {

            $this->model->find($id)->update($request->all());
             return redirect('admin/category');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
