@extends('backend.layouts.app')
@section('content')




    <div class="col-md-12">
        @if(isset ($model))
            {{ Form::model($model, ['route' => ['admin.orglevel.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'files'=>'true']) }}
        @else
            {{ Form::open(['route' => 'admin.orglevel.store', 'class' => 'form-horizontal', 'files'=>'true','role' => 'form', 'method' => 'post']) }}
        @endif

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

                    Member Detail
                </h3>


            </div>
            <div class="box-body">

                <div class="form-group">
                    {{ Form::label('Name','Name', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the name']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('image','image', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        <input type="file" name="image" accept=".jpeg,.jpg,.png,.bmp" class="form-control">


                        @if(isset($model))
                            <img src="{!! url('public/uploads/'.$model->image)!!}" style="width:150px; height:150px;">
                        @endif
                    </div><!--col-lg-10-->
                </div>


                <div class="form-group">
                    {{ Form::label('Club','Club', ['class' => 'col-lg-2 control-label']) }}


                    <div class="col-lg-5">

                        {!!Form::select('org_level_categories_id', $orglevelcat, isset($model) ? $model->org_level_categories_id : $orglevelCatSelected, ['id' => 'org_level_categories_id', 'onchange' => 'changeHandlerForClub(this.value)','class'=>'form-control'])!!}

                    </div>

                </div>

                <div class="form-group">

                    {{ Form::label('Level','Level', ['class' => 'col-lg-2 control-label']) }}


                    <div class="col-lg-10">
                        {{ Form::select('parent_id', $orgLevels, null, ['id' => 'orglevel_id']) }}

                    </div>
                </div>


                <div class="form-group">
                    {{ Form::label('Position','Position', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('position', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the position']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->


                <div class="form-group">
                    {{ Form::label('Email','Email', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('email', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the email']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('Mobile','Mobile', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('mobile', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the phone no']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('Landline','Landline', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('landline', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the landline']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('Address','Address', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('address', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the address']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('Blood Group','Blood Group', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('blood_group', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the blood group']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('Website','Website', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('website', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the website']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->


                <div class="form-group">
                    {{ Form::label('Description','Description', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::textarea('description', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the description']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->


            </div>
            <div class="box box-info">
                <div class="box-body">
                    <div class="pull-left">
                        {{ link_to_route('admin.orglevel', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                
                                        

            
                 <div class="pull-left">



                <h3 class="box-title">
                    <a href="{!! url('admin/orglevel') !!}" class="btn btn-primary">add</a>
                    Member Detail
                    
                </h3>


                    </div><!--pull-left-->

                    {{-- <div class="pull-right">
                

                                    <div class="search-form">
                        <form id="search" action="{{url('orglevel/search')}}" role="search">
                            <input type="text" placeholder="Search Member Detail" name="search" />
                            <input type="submit" value="Search"  />
                        </form>
                    </div>


                    </div>
 --}}
                    <!--pull-right-->

            </div>


            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>

                            <th>title</th>
                            <th>image</th>
                            <th>Club Name</th>
                            <th>Position</th>
                            <th>Description</th>
                            <th>Level</th>
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
                                <td><img src="{!! url('public/uploads/'.$field->image)!!}"
                                         style="width:150px; height:150px;">
                                </td>
                                <td>{!! $field->org_category_name->title !!}</td>
                                <td>{!! $field->position !!}</td>

                                <td>{!! $field->description !!}</td>

                                <td>{!! $field->parent ? $field->parent->title : 'Root Level' !!}</td>


                                <td class="col-md-1">
                                    {!! link_to_route('admin.orglevel.edit', '', array($field->id),
                                                  array('class' => 'fa fa-pencil-square-o fa-fw')) !!}

                                </td>
                                <td class="col-md-1">
                                    {!! link_to_route('admin.orglevel.delete', '', array($field->id),
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
    <script>
        function changeHandlerForClub(id) {
            var parent = $('#orglevel_id')
            parent.empty();
            parent.append(templateForOption('', ''))

            $.get('{{url('/admin/members-by-club/')}}/' + id).done(function (data) {

                if (Array.isArray(data)) {
                    data.forEach(function (item) {
                        parent.append(templateForOption(item.id, item.title))
                    })
                }
            }).fail(function () {
               alert('Something went wrong!')
            })
        }

        function templateForOption(id, name) {
            return `<option value="${id}">${name}</option>`;
        }

        $(document).ready(function () {
            @if(isset($orglevelCatSelected))
            changeHandlerForClub({{ $orglevelCatSelected }})
            @endif
        })
    </script>    
@stop