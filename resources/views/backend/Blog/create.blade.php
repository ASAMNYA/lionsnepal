@extends('backend.layouts.app')
@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">

	@section('content')

		 <div class="col-md-8">


	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
                    Recent District Activities
                </h3>


            </div>

            <div class="box-body">		


{{ Form::open(['route' => 'admin.blog.store', 'class' => 'form-horizontal', 'files'=> 'true','role' => 'form', 'method' => 'post']) }} 


				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control" required="required">
			</div>

             <div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="editor1" class="form-control" required="required"></textarea>
			</div>
           
	
		</div>
	</div>


	
</div>

<div class="col-md-4">
	 <div class="box box-primary">

			 <div class="form-group">
			
			<label for="image">Image</label>
			<input type="file" name="image" accept=".jpg,.png,.JPEG,.bmp," class="form-control">
        </div>


		

</div>
            
        <div class="form-group">
            
            <label class="col-lg-4"> Category:</label> 
            
            <div class="col-lg-10">
                {!!Form::select('category_id',$category_id)!!}

                
            </div>
        </div>

        <br/>
      </br/>
         <div class="pull-right">
                {{ Form::submit(trans('publish'), ['class' => 'btn btn-primary btn-3x']) }}
            </div><!--pull-right-->


</div>
    

 







	

@endsection

