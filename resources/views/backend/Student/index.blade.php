@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">
    
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.student.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              student
                </h3>


            </div>
            <div class="box-body">

            


            <div class="form-group">
                {{ Form::label('gender','Gender', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    
            {{ Form::radio('gender', 'male') }}Male<br>
            {{ Form::radio('gender', 'female') }}Female

                </div><!--col-lg-10-->
            </div><!--form control-->

             

           <div class="form-group">
                {{ Form::label('dob','dob', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('dob', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the dob']) }}
                </div>
            </div>
            







           <div class="form-group">
                {{ Form::label('other detail','other detail', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('other_detail', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the other detail']) }}
                </div>
            </div>
            

             
              <div class="form-group">
                {{ Form::label('parent','parent', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {!!Form::select('parent_id',$parent_id)!!}
                </div>
            </div>
            
              {{-- {!!Form::hidden('user_id',Auth::User()->id)!!} --}}

{{-- 
        <div class="form-group">
                <label class="col-lg-4" for="address">Address</label>
              <div class="col-lg-12">
                <select class="form-control select2-multi" name="addresses[]" multiple="multiple">
                     @foreach($student as $t)
                <option value="{{$t->id}}">{{$t->name}}</option>
                @endforeach
                
                </select>
            </div>
         
        </div>

         <div class="form-group">
                <label class="col-lg-4" for="classparent">Class Name</label>
              <div class="col-lg-12">
                <select class="form-control select2-multi" name="classparent[]" multiple="multiple">
                     @foreach($classparent as $t)
                <option value="{{$t->id}}">{{$t->class_name}}</option>
                @endforeach
                
                </select>
            </div>
         
        </div>
               --}}  
                           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.student', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>


    
  @stop

  @section('after-scripts')



 

            <script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
    $('.select2-multi').select2();
</script>

@stop