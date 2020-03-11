@extends('backend.layouts.app')
@section('content')
<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/olderfile') !!}" class="btn btn-primary">Upload A File</a>
             
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
                            <th>Type</th>
                            
                            <th>File</th>
                            
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                
                                <td>{!! $field->title !!}</td>
                                <td>{!! $field->description !!}</td>

                                <td>{!! $field->type !!}</td>
                                
                                <td>asfasdgas</td>

                               
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center"> 
					{!! $data->links()!!}
				</div>
                </div>
            </div>
        </div>
    </div>
@stop