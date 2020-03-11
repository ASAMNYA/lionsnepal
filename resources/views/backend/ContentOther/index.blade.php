@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.contentother.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'files'=> 'true', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.contentother.store', 'class' => 'form-horizontal','files'=> 'true', 'role' => 'form', 'files'=> 'true','method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
          Single Page Blog
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
                {{ Form::label('Body','Body', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('body', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the description']) }}

                </div>
            </div>

            <div class="form-group">
                {{ Form::label('File',' File', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::file('file', NULL, ['class' => 'form-control', 'autofocus' => 'autofocus'])}}
        
                    <br/>
                              <p class="text-danger">Note: Please Only Upload jpeg,png,gif</p>
                </div>
                </div>



                    
    
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.contentother', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/contentother') !!}" class="btn btn-primary">Add Single Page Blog</a>
             
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                        
                            <th>Title</th>
                            <th>Body</th>
                            
                            <th>File</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                
                                <td>{!! $field->title !!}</td>
                                <td>{!! $field->body !!}</td>
                                
                                <td><img src="{!! url('public/uploads/'.$field->file)!!}" style="width:150px; height:150px;"></td>

                                <td class="col-md-1"> 
                                {!! link_to_route('admin.contentother.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.contentother.delete', '', array($field->id),
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

