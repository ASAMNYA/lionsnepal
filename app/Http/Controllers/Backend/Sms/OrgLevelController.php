<?php

namespace App\Http\Controllers\Backend\Sms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sms\CreateOrgLevelRequest;
use App\Models\Sms\OrgLevel;
use App\Models\Sms\OrgLevelCat;
use Session;
use DB;
use PDO;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class OrgLevelController extends Controller
{
    public $model;
    public $orglevelcat;


    public function __construct(OrgLevel $model, OrgLevelCat $orglevelcat)
    {

        $this->model = $model;
        $this->orglevelcat = $orglevelcat;


    }


    public function index(OrgLevel $model)
    {

        $data = $this->model->paginate(10);

        $data->load('parent');

        $orglevelcat = $this->orglevelcat->pluck('title', 'id');


        $keys = array_keys($orglevelcat->toArray());

        $orglevelCatSelected = count($keys) > 0 ? $keys[0] : null;

        $orgLevels = [];


        return view('backend.OrgLevel.index', compact('data', 'orglevelcat', 'orglevelCatSelected', 'orgLevels'));

    }


    public function create()
    {
        $orglevel_id = $this->orglevel->pluck('title', 'id');
        $orglevel = $this->model->pluck('title', 'orglevel_id');

        return view('backend.OrgLevel.create', compact('orglevel_id', 'orglevel'));
    }


    public function store(CreateOrgLevelRequest $request)
    {
        $this->validate($request, array(
            'title' => 'required',

            'position' => 'required',
           
            
        ));

        $data = $request->all();

        $album_id = 58585;

        if ($request->hasFile('image')) {

        $photo = $request->file('image');

        $originalName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $size = $photo->getClientSize();
        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);
        $number = mt_rand(10000, 99999);
        $filename = $originalNameWithoutExt . '-' . $number . '-' . $album_id . "." . $extension;
        
        $photo = $request->file('image');


        $p = $photo->move(
            base_path() . '/public/uploads/', $filename
        );
        
        }

        $data = [
            'title' => $request->title,
            'image' => $request->image ? $filename : 'logo.png',
            'parent_id' => $request->parent_id ? $request->parent_id : null,
            'org_level_categories_id' => $request->org_level_categories_id,
            'position' => $request->position,
            'description' => $request->description ? $request->description : null,
            'landline' => $request->landline ? $request->landline : '000000',
            'mobile' => $request->mobile ? $request->mobile : '00000000',
            'website' => $request->website ? $request->website : 'unknown',
            'address' => $request->address ? $request->address : 'unknown',
            'blood_group' => $request->blood_group ? $request->blood_group:'unknown blood_group',
            'email' => $request->email ? $request->email : 'unknown @gmail.com',
        ];
        


        $latest=$this->model->create($data);
        
    
       
    
        return redirect()->back();

    }


    public function edit($id)
    {

        $model = $this->model->find($id);

        $data = $this->model->paginate(10);
        $orgLevels = $this->getClubMembers($model->org_level_categories_id)->pluck('title', 'id');

        $orglevelcat = $this->orglevelcat->pluck('title', 'id');


        return view('backend.OrgLevel.index', compact('data', 'model', 'orglevelcat', 'orgLevels'));

    }

    public function update($id, CreateOrgLevelRequest $request)
    {

        $this->validate($request, array(
            'title' => 'required',
            'position' => 'required',
            'org_level_categories_id'=>'required',
            


        ));


        if ($request->hasFile('image')) {

            $photo = $request->file('image');


            $originalName = $photo->getClientOriginalName();

            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);

            $filename = $originalNameWithoutExt . '-' . '-' . "." . $extension;
            $photo = $request->file('image');


            $p = $photo->move(
                base_path() . '/public/uploads/', $filename
            );

         $data = [
            'title' => $request->title,
            'image' => $request->image ? $filename : 'logo.png',
            'parent_id' => $request->parent_id ? $request->parent_id : null,
            'org_level_categories_id' => $request->org_level_categories_id,
            'position' => $request->position,
            'description' => $request->description ? $request->description : null,
            'landline' => $request->landline ? $request->landline : '000000',
            'mobile' => $request->mobile ? $request->mobile : '00000000',
            'website' => $request->website ? $request->website : 'unknown',
            'address' => $request->address ? $request->address : 'unknown',
            'blood_group' => $request->blood_group ? $request->blood_group:'unknown blood_group',
            'email' => $request->email ? $request->email : 'unknown @gmail.com',
        ];
        

            $this->model->find($id)->update($data);
                
            }
         
        
        Session::flash('flash_info', 'The Member Detail has been updated.');       
        Session::flash('flash_type', 'alert-info');
        
        return redirect('admin/orglevel');


    }
    
         
    public function allfamilytree(Request $request) 
      {

        DB::connection()->getPdo()->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

        $members=[];
        $peakdata=[];
         $datas = OrgLevelCat::with('members')->get();


            




         foreach($datas as $row)
         {


                foreach($row->members as $memberdata)

                {   

                        $peakdata[]=array(
                'title'=>$memberdata['title'],
                'image'=>url('public/uploads/').'/'.$memberdata['image'],
                'position'=>$memberdata['position'],
                'description'=>$memberdata['description'],
                'email'=>$memberdata['email'],
                'landline'=>$memberdata['landline'],
                'email'=>$memberdata['email'],
                'mobile'=>$memberdata['mobile'],
                'website'=>$memberdata['website'],
                'address'=>$memberdata['address'],
                'blood_group'=>$memberdata['blood_group'],      
               );

                }


           $members[] = array(
                    'club_id'=>$row['id'],
                    'club_name'=> $row['title'],
                    'member_info'=>$peakdata

                );
            }



        // return response()->json($datas);


    //     $members = [];
    //     foreach ($datas as $data) {


    //     $member= \App\Models\Sms\OrgLevel::where('org_level_categories_id',$data['id'])->select('title','image','position','description','email','landline','mobile','website','address','blood_group')->get();
            
            
    //         foreach($member as $peakk)
    //         {
    //            $peakdata=array(
    //             'title'=>$peakk['title'],
    //             'image'=>url('public/uploads/').'/'.$peakk['image'],
    //             'position'=>$peakk['position'],
    //             'description'=>$peakk['description'],
    //             'email'=>$peakk['email'],
    //             'landline'=>$peakk['landline'],
    //             'email'=>$peakk['email'],
    //             'mobile'=>$peakk['mobile'],
    //             'website'=>$peakk['website'],
    //             'address'=>$peakk['address'],
    //             'blood_group'=>$peakk['blood_group'],      
    //            );


    //            $members[] = array(
    //                 'club_id'=>$data['id'],
    //                 'club_name'=> $data['title'],
    //                 'member_info'=>$peakdata

    //             );
    //         }


    // }



    $page = Input::get('page', 1); // Get the ?page=1 from the url
    $perPage = 15; // Number of items per page
    $offset = ($page * $perPage) - $perPage;

    return new LengthAwarePaginator(
        array_slice($members, $offset, $perPage, true), // Only grab the items we need
        count($members), // Total items
        $perPage, // Items per page
        $page, // Current page
        ['path' => $request->url(), 'query' => $request->query()] // We need this so we can keep all old query parameters from the url
    );




    // return response()->json([
    //     'status' => 200,
    //     'data' => $members
    // ],200);
}
    
    
    public function family_treeapi($id) {
     

        $data=$this->model->where('org_level_categories_id',$id)->get();


        return json_encode($data);
    }

    public function delete($id)
    {

        $this->model->find($id)->delete();
        return redirect()->back();
    }

    public function getClubMembers($id) {
        return $this->model->where('org_level_categories_id', $id)->get();
    }
    
}
