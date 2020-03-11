<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sms\MultiplePhoto;
use File;


class MultiplePhotoController extends Controller
{
     public function formupload(){

    	$data=MultiplePhoto::paginate(4);

    	return view('backend.MultiplePhoto.create',compact('data'));
    }

    public function photoupload(Request $request){

    	$this->validate($request, [
    	'photos' => 'required',
    	'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title'    => 'required'
		]);


        if($request->hasfile('photos'))
         {

            foreach($request->file('photos') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'multipleimages/', $name);  
                $data[] = $name;  
            }
         }

         $form= new MultiplePhoto();
          $number = mt_rand(1000, 9999);


         $form->title=$request->title;
         $form->photos=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
   
    }

    public function delete($id)
    {

            

        $data=MultiplePhoto::find($id);

        foreach(json_decode($data->photos, true) as $photos)
            {
        File::delete($photos);
                
            }
        $data->delete();
        return redirect()->back();
    }

    public function viewphotos($id){

    	$data=MultiplePhoto::find($id);


    	return view('backend.MultiplePhoto.viewphotos',compact('data'));
    }
    
          public function multiplephotoapi()
          
        {
    
    
                       $datas = MultiplePhoto::get();
         $multiplephoto=[];

         foreach($datas as $data)
        {
            foreach(json_decode($data->photos, true) as $photos)
            {
            
            $filephotos[]=url('publicmultipleimages').'/'.$photos;

    
            }

        }





            foreach($datas as $data)
            {
                   $multiplephoto[]=array(
                    'title'=>$data['title'],
                    'file'=>$filephotos,
                   );
            }

    
    return response()->json([
        'status' => 200,
        'data' => $multiplephoto
    ],200);
    
    
        }

}
