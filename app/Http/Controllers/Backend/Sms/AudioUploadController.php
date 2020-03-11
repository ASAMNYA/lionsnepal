<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\AudioUpload;
use App\Http\Requests\Backend\Sms\CreateAudioUploadRequest;


class AudioUploadController extends Controller
{
    public $model;

        
        public function __construct(AudioUpload $model)
        {

            $this->model = $model;

           
        }




        public function index(AudioUpload $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.AudioUpload.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.AudioUpload.create');
        }


        public function store(CreateAudioUploadRequest $request)
        {
            $this->validate($request,array(
                    'title'=>'required',
                    'file'=>'required',
            ));
         

                if ($request->hasFile('file')) 
         {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number .  "." .$extension;
            $file = $request->file('file');
            $p = $file->move(
                base_path() . '/public/uploads/audio/' , $filename
            );
            
            
            $data = [
                
                'title' => $request->title,
                'file' => $filename,
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

            $model = $this->model->find($id);

            $data = $this->model->paginate(4);


            
            return view('backend.AudioUpload.index' , compact('data','model'));
        
		}

        public function update($id , CreateAudioUploadRequest $request)
        {

                $this->validate($request,array(
                    'title'=>'required',
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
                base_path() . '/public/uploads/audio/' , $filename
            );
            
           $data = [
                
              
                'title' => $request->title,

                'file'      => $filename,
                
                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
           
             return redirect('admin/audioupload');
           
        }

        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }

        public function audio($id)

        {

            $data=$this->model->find($id);


                return view('backend.AudioUpload.play' , compact('data'));

         }
        public function audiouploadapi() {
         $datas = AudioUpload::get();
         $audio=[];

            foreach($datas as $data)
            {
                   $audio[]=array(
                    'title'=>$data['title'],
                    'file'=>url('public/uploads/audio/').'/'.$data['file'],
                   );
            }

    
    return response()->json([
        'status' => 200,
        'data' => $audio
    ],200);
    }

}
