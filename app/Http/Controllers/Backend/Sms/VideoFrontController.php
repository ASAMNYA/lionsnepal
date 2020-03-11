<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\VideoFront;


class VideoFrontController extends Controller
{
     public $model;

        
        public function __construct(VideoFront $model)
        {

            $this->model = $model;

           
        }

        public function index(VideoFront $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.VideoFront.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.VideoFront.create');
        }


        public function store(Request $request)
        {

                
                 $this->validate($request,array(
                'title'=>'required',
                'description'=>'required'

            ));


   $latest=$this->model->create($request->all());

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);

            $data = $this->model->paginate(4);


            
            return view('backend.VideoFront.index' , compact('data','model'));
        
		}

        public function update($id , Request $request)
        {
              $this->validate($request,array(
                'title'=>'required',
                'description'=>'required'

            ));

          

            $this->model->find($id)->update($request->all());
             return redirect('admin/videofront');
           
        }

        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }



         public function video($id)

        {

            $data=$this->model->find($id);


                return view('backend.VideoFront.play' , compact('data'));

         }
         
        public function videofrontapi()  {
         $datas =VideoFront::get();

       $videos=[];
        foreach ($datas as $data) {
                preg_match('/src="([^"]+)"/', $data->description, $match);
                $url = $match[1];
           $videos[] = array(
                'video_id'=>$data['id'],
                'video_title'=> $data['title'],
                'video_description'=> $url,


            
            );
            
                                }
    return response()->json([
        'status' => 200,
        'data' => $videos
    ],200);
}

}
