@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.areacordinatoractivity.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'files'=> 'true', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.areacordinatoractivity.store', 'class' => 'form-horizontal','files'=> 'true', 'role' => 'form', 'files'=> 'true','method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Area Coordinator Activity
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
                {{ Form::label('Description','Description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('description', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the description']) }}

                </div>
            </div>

            <div class="form-group">
                {{ Form::label('Image Upload',' Image Upload', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::file('image', NULL, ['class' => 'form-control', 'autofocus' => 'autofocus'])}}
                </div>
                </div>





            <div class="form-group">
                {{ Form::label('Region','Region', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {!!Form::select('region',$region_id)!!}
                    
                </div>
            </div>
            

             
    
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.areacordinatoractivity', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/areacordinatoractivity') !!}" class="btn btn-primary">Upload A File</a>
             
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                        
                            <th>Title</th>
                            <th>Description</th>
                            <th>Region</th>
                            <th>Image</th>
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                         
                                                                
                                        
                                
                                <td>{!! $field->title !!}</td>
                                <td>{!! $field->description !!}</td>
                                <td>{!! $field->arearegion->title !!}</td>
                                
                                <td><img src="{!! url('public/uploads/'.$field->image)!!}" style="width:150px; height:150px;"></td>

                                <td class="col-md-1"> 
                                {!! link_to_route('admin.areacordinatoractivity.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.areacordinatoractivity.delete', '', array($field->id),
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

