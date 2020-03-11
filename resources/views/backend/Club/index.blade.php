@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.club.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'files'=> 'true', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.club.store', 'class' => 'form-horizontal','files'=> 'true', 'role' => 'form', 'files'=> 'true','method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
         Club Logo Links
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
                {{ Form::label('Icon',' Image', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
            <input type="file" name="icon" accept=".jpg,.jpeg,.bmp,.gif,.png" class="form-control">
                
                <br/>
                    
                    <p class="text-danger">Note: Please Only Upload jpeg,png,gif</p>
                </div>
                </div>

            <div class="form-group">
                {{ Form::label('Founded On','Founded On', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('founded_year', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Year']) }}

                </div>
            </div>

            <div class="form-group">
                {{ Form::label('Location','Location', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('location', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Address']) }}

                </div>
            </div>
    
            <div class="form-group">
                {{ Form::label('Description','Description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('description', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the description']) }}

                </div>
            </div>




                    
    
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.club', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/club') !!}" class="btn btn-primary"> Add Club Logo And Links   </a>
             
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>S.N</th>
                          
                        
                            <th>Title</th>
                            <th>Description</th>
                            
                            <th>Icon</th>
                            <th>Location</th>
                            <th>Founded Year</th>

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
                                <td>{!! $field->description !!}</td>
                                
                                <td><img src="{!! url('public/uploads/club/'.$field->icon)!!}" style="width:150px; height:150px;"></td>
                                
                                <td>{!! $field->location !!}</td>
                                <td>{!! $field->founded_year !!}</td>
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.club.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.club.delete', '', array($field->id),
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

