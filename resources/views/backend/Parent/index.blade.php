@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">
    
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.parent.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.parent.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              parent
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('nickname','Nick Name', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('nick_name', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the nick name']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('gender','Gender', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    
            Male{{ Form::radio('gender', 'male') }}<br>
            Female{{ Form::radio('gender', 'female') }}

                </div><!--col-lg-10-->
            </div><!--form control-->

        



        {!!Form::hidden('user_id',Auth::User()->id)!!}
    

             <div class="form-group">
                <label class="col-lg-4" for="addresses">Address</label>
              <div class="col-lg-12">
                <select class="form-control select2-multi" name="addresses[]" multiple="multiple">
                     @foreach($address as $t)
                <option value="{{$t->id}}">{{$t->name}}</option>
                @endforeach
                
                </select>
            </div>
         
            </div>
                


           
            

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.parent', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/parent') !!}" class="btn btn-primary">add</a>
              parent
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Nickname</th>
                            <th>Gender</th>
                           
                            
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td>{!! $field->nick_name !!}</td>
                                <td>{!! $field->gender !!}</td>
                               
                                
                                
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.parent.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.parent.delete', '', array($field->id),
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



 

            <script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
    $('.select2-multi').select2();
</script>

@stop