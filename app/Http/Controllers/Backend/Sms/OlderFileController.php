<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\OlderFile;


class OlderFileController extends Controller
{

	 public $model;
         
     public function __construct(OlderFile $model)
     {
        $this->model=$model;
        

     }   

     public function index(OlderFile $model)
     {
            $data = $this->model->paginate(4);
      

        return view('backend.OlderFile.index',compact('data'));
     }

     public function create()
        {
      
            return view('backend.OlderFile.index');

        }

        public function store(Request $request)
        {
                


                 $this->validate($request,array(
                'title'=>'required',
                'file'=>'required|mimes:jpeg,bmp,png,jpg',
                'description'=>'required',
                'year'=>'required'
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
                'description' => $request->description,
                'file' => $filename,
                'status'=>0,
                'year'=>$request->year        

            ];
            $latest=$this->model->create($data);
            }
            else
            {
           $this->model->create($request->all());
                
            }


            return redirect()->back();
     	   		

 		   }

           public function edit($id)
           {
                $model=$this->model->find($id);
   	    		$data = $this->model->paginate(8);

            return view('backend.OlderFile.index',compact('data','model'));
        	}



        public function update($id , Request $request)
        {
            

                 $this->validate($request,array(
                'title'=>'required',
                'description'=>'required',
                'year'=>'required'
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
                'description' => $request->description,
                'file' => $filename,
                'status'=>0,
                'year'=>$request->year  
                
                
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
        
              public function olderfileapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }
    
    
    
    public function viewbooks()
    {

        $data=$this->model->where('type','olderfile')->paginate(8);

        
            return view('backend.OlderFile.showall',compact('data'));


    }
     public function viewnews()
    {
        $data=$this->model->where('type','news')->paginate(8);
            return view('backend.OlderFile.showall',compact('data'));
        



    }


      public function viewnotice()
    {
        $data=$this->model->where('type','notice')->paginate(8);

        return view('backend.OlderFile.showall',compact('data'));
      

    }


      public function viewpressrelease()
    {
        $data=$this->model->where('type','pressrelease')->paginate(8);

        return view('backend.OlderFile.showall',compact('data'));
        

    }
    
       public function lionsbookapi()
    {

        $data=$this->model->where('type','olderfile')->get();

        $books=[];

        foreach($data as $datas)
        {
            $books[]=array(

                'title'=>$datas['title'],
                'description'=>$datas['description'],
                'file'=>url('public/uploads/').'/'.$datas['file'],
            );

        }
        return response()->json([
            'status'=>200,
            'data'=>$books
        ],200);




    }


     public function lionsnewsapi()
    {
        $data=$this->model->where('type','news')->get();

        $news=[];

        foreach($data as $row)
        {
            $news[]=[
                'title'=>$row['title'],
                'description'=>$row['description'],
                'file'=>url('public/uploads/').'/'.$row['file'],
            ];


        }

        return response()->json([
            'status'=>200,
            'data'=>$news
        ],200);



            
        



    }


      public function lionsnoticeapi()
    {
        $data=$this->model->where('type','notice')->get();

        $notice=[];

        foreach($data as $row)
        {
            $notice[]=[
                'title'=>$row['title'],
                'description'=>$row['description'],
                'file'=>url('public/uploads/').'/'.$row['file'],
            ];


        }

        return response()->json([
            'status'=>200,
            'data'=>$notice
        ],200);


      

    }


      public function lionspressreleaseapi()
    {
        $data=$this->model->where('type','pressrelease')->get();

        $pressrelease=[];

        foreach($data as $row)
        {
            $pressrelease[]=[
                'title'=>$row['title'],
                'description'=>$row['description'],
                'file'=>url('public/uploads/').'/'.$row['file'],
            ];


        }

        return response()->json([
            'status'=>200,
            'data'=>$pressrelease
        ],200);


    }




}
