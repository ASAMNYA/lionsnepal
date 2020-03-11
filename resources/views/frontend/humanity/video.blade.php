  @extends('frontend.humanity.master')
      @section('content')


<div class="container-fluid pb-video-container">
   <div class="col-md-12">
       <h3 class="text-center">Lions Video Gallery</h3>
       <hr/>
       &nbsp;
       <div class="row pb-row">
            @foreach($data as $row)
           <div class="col-md-6 pb-video">
             {!! $row->file!!}
              
               <label class="form-control label-warning text-center">{{$row->title}}</label>
           </div>
               @endforeach
           
          
       </div>
      
   </div>
</div>
      @include('frontend.humanity.include.footerclub')


<style>
   .pb-video-container {
       padding-top: 20px;
       background: #bdc3c7;
       font-family: Lato;
   }

   .pb-video {
       border: 1px solid #e6e6e6;
       padding: 5px;
   }

       .pb-video:hover {
           background: #2c3e50;
       }

   .pb-video-frame {
       transition: width 2s, height 2s;
   }

       .pb-video-frame:hover {
           height: 300px;
       }

   .pb-row {
       margin-bottom: 10px;
   }
</style>

@endsection
