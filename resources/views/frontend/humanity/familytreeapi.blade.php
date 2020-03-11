     @extends('frontend.humanity.master')


      @section('content')
     
 		<div class="container">
			<h2>Club Names</h2>
			<div class="row">
				 <div class="col-md-6">
				@foreach($family_tree_cat_data as $clubdata)

				  <ul class="list-group">
				    <a href="{{url('api/family_tree',$clubdata->id)}}"><li class="list-group-item">{{$clubdata->title}}</li></a>

				  </ul>
				@endforeach
				</div>
			</div>

		</div>
       @stop