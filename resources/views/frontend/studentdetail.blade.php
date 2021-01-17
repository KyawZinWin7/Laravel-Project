@extends('frontendtemplate')
@section('content')
	<div  class="container-fluid mb-3 mt-4">
		<h3 class="text-center"> My Profile </h3>
		<hr class="hr">

		<div class="row mt-4">
			<div class="col-md-6">
				<img class=" ml-5" src="{{ Auth::user()->student->profile}}" width="500px" height="300px">
			</div>
			<div class="col-md-6">
				<p>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ Auth::user()->name}}</p>
				<p>Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  {{ Auth::user()->student->course->name}}</p>
				
				<p>Roll Number : {{ Auth::user()->student->roll_no}}</p>
				<p>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ Auth::user()->student->gender}}</p>

				<p>Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ Auth::user()->student->phone_no}} </p>
				<p>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ Auth::user()->student->address}}</p>
					
					
				
			</div>
		</div> <!-- row
 -->

	</div> <!-- End container-fludi -->




  
	
@endsection
