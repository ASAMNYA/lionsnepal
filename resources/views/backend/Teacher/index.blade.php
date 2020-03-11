@extends('backend.layouts.app')
@section('page-header')
    <head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    </head>

@endsection
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.teacher.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'files'=> 'true', 'method' => 'PATCH']) }}

@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              {{$model->teachername->first_name}} &nbsp;{{$model->teachername->last_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Profile 
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
                {{ Form::label('age','Age', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('age', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the age']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

                        <div class="form-group">
                {{ Form::label('Start Date','Start Date', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('start_date', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the start date ']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
                

            <div class="form-group">
                {{ Form::label('Job Experience','Job Experience', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('job_experience', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Job Experience ']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
                    
                    <div class="form-group">
                {{ Form::label('Subject','Subject', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('subject', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Subject ']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


                <div class="form-group">
                    {!! Form::label('image' ,'Image:',['class'=>'col-lg-2 control-label']) !!}
                        <div class="col-lg-5">
                            {!! Form::file('image',null,['class'=>'form-control']) !!}
                        </div>
                </div>


           <div class="form-group">
                {{ Form::label('Other Detail','Other Detail', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">


                    {{ Form::textarea('other_detail', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter other detail']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.showallteacher', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/showallteacher') !!}" class="btn btn-primary">Teacher</a>
              Profile
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Gender</th>
                            <th>Age</th>

                            <th>Starting Date</th>
                            <th>Job Experience</th>
                            <th>Subject</th>
                            <th>Image</th>
                            
                            <th>Other Detail</th>
                           
                            
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td>{!! $field->gender !!}</td>
                                <td>{!! $field->age !!}</td>

                                <td>{!! $field->start_date !!}</td>
                                <td>{!! $field->job_experience !!}</td>
                                <td>{!! $field->subject !!}</td>

                                <td>{!! $field->other_detail !!}</td>
                                <td><img src="{!! url('public/uploads/'.$field->image)!!}" style="width:150px; height:150px;">
                               
                                
                                
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.teacher.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.teacher.delete', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                    

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
{!!$data->render() !!}
                    </table>
                </div>
            </div>
        </div>
    </div>



    
  @stop



@section('after-scripts')

 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

            <script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
@endsection