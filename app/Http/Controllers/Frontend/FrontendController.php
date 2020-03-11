<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sms\AreaCordinatorActivity;
use App\Models\Sms\AreaCordinatorRegion;
use App\Models\Sms\AudioUpload;
use App\Models\Sms\Blog;
use App\Models\Sms\Category;
use App\Models\Sms\Club;
use App\Models\Sms\Contact;
use App\Models\Sms\ContentOther;
use App\Models\Sms\Department;
use App\Models\Sms\Events;
use App\Models\Sms\NewsLetter;
use App\Models\Sms\OrgLevel;
use App\Models\Sms\OlderFile;
use App\Models\Sms\OrgLevelCat;
use App\Models\Sms\Post;
use App\Models\Sms\Service;
use App\Models\Sms\Slider;
use App\Models\Sms\Student;
use App\Models\Sms\Subject;
use App\Models\Sms\Teacher;
use App\Models\Sms\Team;
use App\Models\Sms\VideoUpload;
use App\Models\Sms\LionsHistory;
use App\Models\Sms\Mjf;
use App\Models\Sms\Pmjf;
use App\Models\Sms\Nlf;
use App\Models\Sms\Pnlf;
use App\Models\Sms\MultiplePhoto;
use Illuminate\Http\Request;
use Mail;


class FrontendController extends Controller
{
    public $slider;
    public $blog;
    public $category;
    public $contact;
    public $events;
    public $post;
    public $service;
    public $subject;
    public $team;
    public $teacher;
    public $student;
    public $orglevel;
    public $orgLevelCat;
    public $audioupload;
    public $videoupload;
    public $contentother;
    public $areacordinatoractivity;
    public $club;
    public $lionshistory;
    public $mjf;
    public $pmjf;
    public $nlf;
    public $pnlf;
    public $arearegion;
    public $multiplephoto;
    public $olderfile;




    public function __construct(Slider $slider, Blog $blog, Category $category, Events $events, Contact $contact, Post $post, Service $service, Subject $subject, Team $team, Teacher $teacher, Student $student, OrgLevel $orglevel, OrgLevelCat $orgLevelCat, AudioUpload $audioupload, VideoUpload $videoupload, ContentOther $contentother, AreaCordinatorActivity $areacordinatoractivity, Club $club , LionsHistory $lionshistory,Mjf $mjf,Pmjf $pmjf,Nlf $nlf, Pnlf  $pnlf,MultiplePhoto $multiplephoto,AreaCordinatorRegion  $arearegion,OlderFile $olderfile)
    {
        $this->slider = $slider;
        $this->blog = $blog;
        $this->category = $category;
        $this->contact = $contact;
        $this->events = $events;
        $this->post = $post;
        $this->service = $service;
        $this->subject = $subject;
        $this->team = $team;
        $this->teacher = $teacher;
        $this->student = $student;
        $this->orglevel = $orglevel;
        $this->orgLevelCat = $orgLevelCat;
        $this->audioupload = $audioupload;
        $this->videoupload = $videoupload;
        $this->contentother = $contentother;
        $this->areacordinatoractivity = $areacordinatoractivity;
        $this->club = $club;
        $this->lionshistory = $lionshistory;
        $this->mjf = $mjf;
        $this->pmjf = $pmjf;
        $this->nlf = $nlf;
        $this->pnlf = $pnlf;
        $this->multiplephoto = $multiplephoto;
        $this->arearegion=$arearegion;
        $this->olderfile=$olderfile;




    }


    public function index()
    {
        $orgLevelInternational = $this->orglevel->where('org_level_categories_id', '=', 1)->get();
        $orgLevel2 = $this->orglevel->where('org_level_categories_id', '=', 2)->get();
        $org = $this->orglevel;
        $postdata = $this->post->all();

        $org_level_all = $this->orgLevelCat->all();

        $org_level_all->load('members');


        $videosdata = $this->videoupload->take(3)->latest();

        $acadata = $this->areacordinatoractivity->all();
        $regiondata=$this->arearegion->all();



        $contentother = $this->contentother->get();
        $slider = $this->slider->all();
        $event = $this->events->inRandomOrder()->take(3)->get();
        $blog = $this->blog->inRandomOrder()->take(3)->get();
        $team = $this->team->inRandomOrder()->take(3)->get();
        $team1 = $this->team->latest()->get();
        $team2 = $this->team->inRandomOrder()->take(1)->get();
        
         $olderfilenews=$this->olderfile->where('type','news')->get();
        
        $olderfilebooks=$this->olderfile->where('type','olderfile')->get();
        $olderfilenotice=$this->olderfile->where('type','notice')->get();
        $olderfilepressrelease=$this->olderfile->where('type','pressrelease')->get();



        $parentarray = [
            '0' => [

                'id' => 1,
                'name' => 'head1',
                'level' => 0
            ],
            '1' => [

                'id' => 2,
                'name' => 'head2',
                'level' => 1
            ],

            '2' => [

                'id' => 3,
                'name' => 'head3',
                'level' => 1
            ],
            '3' => [

                'id' => 4,
                'name' => 'head4',
                'level' => 1
            ],
            '4' => [

                'id' => 5,
                'name' => 'head',
                'level' => 2
            ],

            '5' => [

                'id' => 6,
                'name' => 'head',
                'level' => 3
            ],
            '6' => [

                'id' => 7,
                'name' => 'head',
                'level' => 3
            ],
        ];


        return view('frontend.humanity.index', compact('slider', 'event', 'parentarray', 'orgLevelInternational', 'team1', 'orgLevel2', 'org', 'blog', 'team', 'team2', 'org_level_all', 'org_cat_info_all', 'videosdata', 'postdata', 'contentother', 'acadata','regiondata','olderfilenews','olderfilebooks','olderfilenotice','olderfilepressrelease'));
    }


    public function about()
    {


        return view('frontend.humanity.about');
    }


    public function blog_left_sidebar()
    {
        $blog = $this->blog->inRandomOrder()->take(3)->get();
        $popular = $this->blog->inRandomOrder()->take(3)->get();
        $category = $this->category->all();


        return view('frontend.humanity.blog-left-sidebar', compact('blog', 'popular', 'category'));
    }


    public function event_grid_view()
    {

        $event = $this->events->all();


        return view('frontend.humanity.event-grid-view', compact('event'));
    }


    public function contact()
    {

        return view('frontend.humanity.contact');
    }


    public function history()
    {
        $data = $this->lionshistory->get();

        return view('frontend.humanity.history',compact('data'));
    }


    public function pmjf()
    {
        $data = $this->pmjf->get();


        return view('frontend.humanity.pmjf',compact('data'));
    }


    public function mjf()
    {
        $data = $this->mjf->get();


        return view('frontend.humanity.mjf',compact('data'));
    }


       public function nlf()
    {
        $data = $this->nlf->get();
        
      


        return view('frontend.humanity.nlf',compact('data'));
    }


       public function pnlf()
    {
        $data = $this->pnlf->get();


        return view('frontend.humanity.pnlf',compact('data'));
    }


    public function lionsmember()
    {

        return view('frontend.humanity.lionsmember');
    }

    public function serve()
    {

        return view('frontend.humanity.serve');
    }

    public function audio()
    {

        $data = $this->audioupload->get();

        return view('frontend.humanity.audio', compact('data'));
    }


    public function video()
    {

        $data = $this->videoupload->get();;

        return view('frontend.humanity.video', compact('data'));
    }


    public function show($id, Category $category)

    {
        $blogshow = $this->blog->findOrfail($id);
        $data = $this->category->get();

        return view('frontend.humanity.blogsingle', compact('blogshow', 'data'));
    }


    public function eventshow($id, Category $category)

    {
        $eventshow = $this->events->findOrfail($id);
        $category = $this->category->all();
        $event = $this->events->inRandomOrder()->take(3)->get();


        return view('frontend.humanity.eventsingle', compact('eventshow', 'category', 'event'));
    }


    public function individual($id)
    {
        $data = $this->contentother->findorfail($id);
        
        $alldata = $this->contentother->get();
        return view('frontend.humanity.content', compact('data', 'alldata'));


    }


    public function newsletterstore(Request $request)
    {

        $this->validate($request, [
            'email' => 'email|required|distinct'
        ]);

        $data = array(
            'email' => $request->email,
        );


        $newsletter = new NewsLetter();
        $newsletter->email = $request->input('email');
        if ($newsletter->save()) {
            Mail::send('backend.Email.newsletter', $data, function ($msg) use ($data) {
                $msg->from('lionsclub@gmail.com');
                $msg->to($data['email']);
            });
            return redirect()->back();
        }

    }


    public function readmorepost($id)
    {
        $data = $this->post->findOrfail($id);
        return view('frontend.humanity.readmorepost', compact('data'));


    }
    
        public function gallery()
    {
        $data=$this->multiplephoto->all();

        return view('frontend.humanity.gallery',compact('data'));
    }
    
    
    public function family_tree_api()
    {

        $family_tree_cat_data = $this->orgLevelCat->get();

     return view('frontend.humanity.familytreeapi',compact('family_tree_cat_data'));
    }
        
        public function clubmemberdetail($id)
    {
        $data = $this->orglevel->findOrfail($id);
        return view('frontend.humanity.clubmemberdetail', compact('data'));


    }
    
    
    public function showblogbycat($id )
            {
        

        
        $blogcategory=$this->category->find($id)->select('title')->first();
    
        $blog=$this->blog->where('category_id',$id)->get();
        
        
        
        $popular = $this->blog->inRandomOrder()->take(3)->get();
        
        $category = $this->category->all();
        
        return view('frontend.humanity.showblogbycat', compact('blog','popular','category','blogcategory'));

            }
            
            
    public function allevent()
            {
        $event=$this->events->paginate(10);

        
        return view('frontend.humanity.allevent',compact('event'));

            }
            


}
