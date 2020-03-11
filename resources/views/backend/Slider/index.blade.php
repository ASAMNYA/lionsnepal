@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.slider.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.slider.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Slider
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Title']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

			
			<div class="form-group">
                {{ Form::label('description','Description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('description', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the Description']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->







            <div class="form-group">
                {{ Form::label('order','Order', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('order', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Order']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



           



             
 <div class="form-group">
                    {!! Form::label('image' ,'image:',['class'=>'col-lg-2 control-label']) !!}
            <div class="col-lg-5">
                    {!! Form::file('image',null,['class'=>'form-control']) !!}
                    <div class="col-lg-5">

                        @if(isset($model))
                        <img src="{!! url('public/uploads/'.$model->image)!!}" style="width:150px; height:150px;">
                        @endif
                    </div>

                </div>
                <p class="text-danger">Note: Please Only Upload jpeg,png,gif</p>
        </div>
             

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.slider', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/slider') !!}" class="btn btn-primary">add</a>
              slider
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>title</th>
                            <th>description</th>
                            <th>order</th>
                            
                            <th>image</th>
                            
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
                                <td>{!! $field->order !!}</td>                              
                                
                                <td><img src="{!! url('public/uploads/'.$field->image)!!}" style="width:150px; height:150px;">
                                <td>
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.slider.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.slider.delete', '', array($field->id),
                                              array('class' => 'fa fa-trash')) !!}
                                    
                                    

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
