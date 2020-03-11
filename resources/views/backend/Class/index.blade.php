@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.class.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.class.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              class
                </h3>


            </div>
            <div class="box-body">


           

       

            <div class="form-group">
                {{ Form::label('Subject','Subject', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {!!Form::select('subject_id',$subject_id)!!}
                </div>
            </div>
    
            <div class="form-group">
                {{ Form::label('Teacher','Teacher', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {!!Form::select('teacher_id',$teacher_id)!!}
                </div>
            </div>










            <div class="form-group">
                {{ Form::label('from','from', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('from', NULL, ['class' => 'form-control', 'placeholder' =>'class start date']) }}
                </div>
            </div>



                <div class="form-group">
                {{ Form::label('to','To', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('to', NULL, ['class' => 'form-control', 'placeholder' =>'class end date']) }}
                </div>
            </div>

           

             

           
            

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.class', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/class') !!}" class="btn btn-primary">add</a>
              class
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                        
                            <th>From</th>
                            <th>To</th>
                           
                            
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                
                                <td>{!! $field->from !!}</td>
                                <td>{!! $field->to !!}</td>
                               
                                
                                
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.class.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.class.delete', '', array($field->id),
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