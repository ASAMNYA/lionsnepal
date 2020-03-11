@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.service.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.service.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              service
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('title','title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

			
			<div class="form-group">
                {{ Form::label('text','text', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('text', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the text']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->







            <div class="form-group">
                {{ Form::label('display_order','display_order', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('display_order', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the display_order']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



           



                  
           <div class="form-group">
                {{ Form::label('status','Status', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">

                   
                                             {{ Form::select('status', 
                                             ["Available"=>"Available","Unavailable"=>"Unavailable"]) }}



                </div><!--col-lg-10-->
                </div>
           

           
             {!!Form::hidden('user_id',Auth::User()->id)!!}
                                

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.service', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('service') !!}" class="btn btn-primary">add</a>
              service
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Title</th>
                            <th>Text</th>
                            <th>Display Order</th>
                            <th>Status</th>
                           
                            
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
                                <td>{!! $field->text !!}</td>
                                <td>{!! $field->display_order !!}</td>                              
                                <td>{!! $field->status !!}</td>
                                
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.service.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.service.delete', '', array($field->id),
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
