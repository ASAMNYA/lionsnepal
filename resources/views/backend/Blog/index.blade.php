@extends('backend.layouts.app')

	@section('content')

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="box-title">
            
              Recent District Activities
                </h1>
</div>





                          @if(Auth::user()->hasRole(1))
                             <a name="add" href="{!! url('admin/blog/create') !!}"><i class="fa fa-plus-circle fa-2x"></i> </a>
            

                          

                        @endif
           
		</div>



    <div class="w3ls">
      @foreach($blog as $row)
        <div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
           <div class="tc-ch">
            <div class="tch-img">
              <p>{{$row->category->title}}</p>
              <a href="{{url('/admin/blog',$row->id)}}">
              <img src="{!! url('public/uploads/'.$row->image)!!}" style="width:150px; height:150px;" class="img-responsive" alt=""></a>
            </div>
          
            <h3><a href="{{url('/admin/blog',$row->id)}}">{{$row->title}}</a></h3>
              <p> {!!$row->description!!}</p>
            <h6>BY <a href="{{$row->category->title}}">{{$row->user->first_name}}</a>   {{$row->created_at->format('d-m-Y')}}</h6>
            
              
                                             <td class="col-md-1"> 
                                  {!! link_to_route('admin.blog.delete', 'Delete', array($row->id),
                                              array('class' => 'fa fa-trash-o fa-fw')) !!}
                                    
                                    

                                    {!! Form::close() !!}
          </div>
        </div>
        @endforeach
         {!! $blog->render() !!}
      </div>
     
	


@endsection