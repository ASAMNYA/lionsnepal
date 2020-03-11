@extends('backend.layouts.app')

@section('before-styles')

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

@section('page-header')
   
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
@endsection


@section('content')


<div class="col-md-12">

<form method="post" action="{{url('admin/uploadmultiplephotos')}}" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Upload Multiple Photos
                </h3>
  <h6><strong>Please Click add button for uploading multiple photos</strong></h6>

            </div>
            <div class="box-body">
        

            <div class="form-group">
                {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
           
       <div class="form-group">
                {{ Form::label('Image Uploads','Image Uploads', ['class' => 'col-lg-2 control-label']) }}
               
            </div><!--form control-->
           <br/>

                <div class="col-lg-10">
        
        <div class="input-group control-group increment" >
          <input type="file" name="photos[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="photos[]" class="form-control" accept=".jpeg,.jpg,.png,.bmp,.gif">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
        </div>

  </form>   
           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
               
            </div><!--pull-left-->

            <div class="pull-right">
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

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
                <a href="{!! url('admin/uploadmultiplephotos') !!}" class="btn btn-primary">add</a>
              contact
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>title</th>
                          
                            <th>Delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td><a href="{{url('admin/viewmultiplephotos',$field->id)}}">{!! $field->title !!}</td>
                                
                                
                                
                               
                                      <td class="col-md-1"> 
                                  {!! link_to_route('admin.multiplephotos.delete', '', array($field->id),
                                              array('class' => 'fa fa-trash fa-fw')) !!}
                                    
                                    

                                    {!! Form::close() !!}
                                   
                                    
                                </td>


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










<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection