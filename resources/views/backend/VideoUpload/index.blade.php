@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.videoupload.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'files'=> 'true', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.videoupload.store', 'class' => 'form-horizontal','files'=> 'true', 'role' => 'form', 'method' => 'post', 'files'=> 'true']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Upload A Video Via Youtube
                </h3>


            </div>
            <div class="box-body">


       

            <div class="form-group">
                {{ Form::label('Title','Title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}

                </div>
            </div>

       <div class="form-group">
                {{ Form::label('Embed Code','Embed Code', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('file', NULL, ['class' => 'form-control', 'placeholder' =>'Please Copy The Embed Code From Youtube']) }}

                </div>
            </div>



              
                    
    
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.videoupload', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/videoupload') !!}" class="btn btn-primary">Upload A</a>
              Video
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>S.N</th>
                          
                        
                            <th>Title</th>
                            
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                

                                <td><a href="{!! url('admin/video/play',$field->id)!!}">{!! $field->title !!}</a></td>


                                <td>{!! $field->status !!}</td>

                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.videoupload.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.videoupload.delete', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                    

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

      {{$data->links()}}
                </div>
            </div>
        </div>
    </div>



    
  @stop

