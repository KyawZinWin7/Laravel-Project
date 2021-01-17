@extends('frontendtemplate')
@section('content')
	<div  class="container-fluid mb-3 mt-4">
		<h3 class="text-center"> {{$course->name}} </h3>
		<hr class="hr">

		<div class="row mt-4">
			<div class="col-md-6">
				<img class="img-fluid" src="{{$course->photo}}" width="600px" height="600px" alt="image error">
			</div>
			<div class="col-md-6">
				<p>Trainer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$course->teacher->user->name}}</p>
				<p>Toatal Time &nbsp;&nbsp;&nbsp; : {{$course->no_of_times}}</p>
				<p>Description &nbsp;&nbsp;&nbsp; : {{$course->description}}</p>
				
			</div>
		</div> <!-- row
 -->

	</div> <!-- End container-fludi -->




  
	
@endsection
