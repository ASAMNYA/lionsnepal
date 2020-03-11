@extends('backend.layouts.app')
@section('content')

<div class="col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/allstudent') !!}" class="btn btn-primary">Student Records</a>
                </h3>
                    

            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Name</th>
                            <th>Date Of Birth</th>
                           
                            
                            <th>Gender</th>
                            <th>Other Details</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}  </td>
                                                                     
                                        
                                <td><a href="{{route('admin.student.edit',$field->id)}}">{{$field->studentname->first_name}}</a></td>

                                <td>{!! $field->dob !!}</td>
                               
                                <td>{!! $field->gender !!}</td>
                                <td>{!! $field->other_detail !!}</td>
                               

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