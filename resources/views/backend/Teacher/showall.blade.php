@extends('backend.layouts.app')
@section('content')

<div class="col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/showallteacher') !!}" class="btn btn-primary">ALL</a>
              Teacher
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Name</th>
                            <th>Age</th>
                           
                            
                            <th>Start Date</th>
                            <th>Main Subject</th>
                            <th>Image</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td><a href="{{route('admin.teacher.edit',$field->id)}}">{{$field->teachername->first_name}}</a></td>

                                <td>{!! $field->age !!}</td>
                               
                                <td>{!! $field->start_date !!}</td>
                                <td>{!! $field->subject !!}</td>
                                <td><img src="{!! url('public/uploads/'.$field->image)!!}" style="width:150px; height:150px;">
                               

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    
  @stop