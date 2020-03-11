<?php

namespace App\Http\Controllers\Backend\Sms;
use App\Models\Sms\Team;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateTeamRequest;
class TeamController extends Controller
{
   
    public $model;
        
        

        public function __construct(Team $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Team $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Team.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Team.create');
        }


        public function store(CreateTeamRequest $request)
        {

                 $this->validate($request,array(
                'name'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png,jpg',
                'position'=>'required',
                'club'=>'required'

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
                
                'name' => $request->name,
                'position' => $request->position,
                'club' => $request->club,
                'image'      => $filename,
                
            ];


            $this->model->create($data);
            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Team.index' , compact('data','model'));
        
}

        public function update($id , CreateTeamRequest $request)
        {
              $this->validate($request,array(
                'name'=>'required',
                'position'=>'required',
                'club'=>'required'

            ));

      //         if($request->hasFile('image'))
            
      //       {

      //       $file = $request->file('image');
            

      //      $originalName = $file->getClientOriginalName();

      //       $extension = $file->getClientOriginalExtension();
      //       $size = $file->getClientSize();
      //       $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
      //       $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
      //       $file = $request->file('image');


      //      $p = $file->move(
      //           base_path() . '/public/uploads/' , $filename
      //       );
            
      //      $data = [
                
              
      //           'name' => $request->name,
      //           'position' => $request->position,
      //           'club' => $request->club,
      //           'image'      => $filename,
                
                
      //       ];

      //     $this->model->find($id)->update($data);
      // }
      // else
      // {
        

      //      $this->model->find($id)->update($request->all());
      //   }
              if($request->hasFile('image'))
            
            {

            $file = $request->file('image');
            

           $originalName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $file = $request->file('image');


           $p = $file->move(
                base_path() . '/public/uploads/' , $filename
            );
            
           $data = [
                
              
                'name' => $request->name,
                'position' => $request->position,
                'club' => $request->club,
                'image'      => $filename,
                
                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
        
        

             return redirect('admin/team');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
        public function teamapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }
}
