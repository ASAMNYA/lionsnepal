<?php

    namespace App\Http\Controllers\Backend;

    use App\Http\Controllers\Controller;
    use App\Repositories\Backend\File\FileRepositoryInterface;
    use App\Repositories\Backend\Gallery\AlbumRepositoryInterface;
    use App\Repositories\Backend\Photo\PhotoRepositoryInterface;
    use App\Models\Sms\OrgLevelCat;
    use App\Models\Sms\OrgLevel;
    use App\Models\Sms\Events;


    /**
     * Class DashboardController.
     */
    class DashboardController extends Controller
    {

        /**
         * @return \Illuminate\View\View
         */

        private $album;

        /**
         * @var PhotoRepositoryInterface
         */
        private $photo;

        /**
         * @var FileRepositoryInterface
         */
        private $file;


        /**
         * AlbumController constructor.
         *
         * @param AlbumRepositoryInterface $album
         */
        public function __construct(AlbumRepositoryInterface $album,PhotoRepositoryInterface $photo,FileRepositoryInterface $file)
        {

            $this->album = $album;
            $this->photo = $photo;
            $this->file = $file;
        }


        public function index()
        {
            
            

            $data = $this->album->all($type=1);

            $count = $this->album->count($type=1);
            $photo = $this->photo;
            $file = $this->file;
            $orgcatdata=OrgLevelCat::count();
            $orgdata=OrgLevel::count();
            $eventdata=Events::count();
            $actualevent=Events::paginate(6);
            
            return view('backend.gallery.album.index' , compact('data' , 'count','photo','file','orgcatdata','orgdata','eventdata','actualevent'));

        }
    }
