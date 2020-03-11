<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\VideoUpload;
use App\Http\Requests\Backend\Sms\CreateVideoUploadRequest;

class VideoUploadController extends Controller
{
       public $model;

        
        public function __construct(VideoUpload $model)
        {

            $this->model = $model;

           
        }




        public function index(VideoUpload $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.VideoUpload.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.VideoUpload.create');
        }


        public function store(Request $request)
        {

                
                 $this->validate($request,array(
                'title'=>'required',
                'file'=>'required'

            ));

                         $data = [
                
                'title' => $request->title,
                'file' => $request->file,
                'status'=>0,
            ];

     




            $latest=$this->model->create($data);

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);

            $data = $this->model->paginate(4);


            
            return view('backend.VideoUpload.index' , compact('data','model'));
        
		}

        public function update($id , CreateVideoUploadRequest $request)
        {

                                
                 $this->validate($request,array(
                'title'=>'required',
                'file'=>'required'

            ));
            


            $this->model->find($id)->update($request->all());
             return redirect('admin/videoupload');
           
        }

        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }



         public function video($id)

        {

            $data=$this->model->find($id);


                return view('backend.VideoUpload.play' , compact('data'));

         }
         
        public function videouploadapi() {

       $datas =VideoUpload::get();

       $videos=[];

        foreach ($datas as $data) {
                preg_match('/src="([^"]+)"/', $data->file, $match);
                $url = $match[1];
           $videos[] = array(
                'video_id'=>$data['id'],
                'video_title'=> $data['title'],
                'video_file'=> $url,
            );
            
                                }
    return response()->json([
        'status' => 200,
        'data' => $videos
    ],200);
}


}
