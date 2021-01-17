@extends('frontendtemplate')
@section('content')
<div class="container-fluid">
	
	    <section id="team" class="team">
	      <!-- <div class="container"> -->

	        <div class="section-title">
	          <h2>Our Teachers</h2>
	          <hr class="hr">
	        </div>

	        <div class="row">
	        	
	        	
	        	@foreach($courses as $course)

	          <div class="col-xl-3 col-lg-4 col-md-6">
	            <div class="card">
				  <img src="{{asset($course->photo)}}" class="card-img-top" width="200px" height="170px" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">{{$course->name}}</h5>
				    <p class="card-text">
				    	<?php

							$position=100; 
							$message="{$course->description}";
							$post = substr($message, 0, $position);

							echo $post;
							echo "...";

							?>
				    </p>
				    <a href="{{route('coursedetail',$course->id)}}" class="btn btn-primary">See More</a>
				  </div>
				</div>
	          </div>
	          
	        @endforeach
	           
			</div>

	      
	    </section>
</div>
	<!-- </div> -->
<!-- Services -->

<div class="services page_section">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('my_asset/images/earth-globe.svg')}}" alt="">
					</div>
					<h3>Online Courses</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('my_asset/images/exam.svg')}}" alt="">
					</div>
					<h3>Indoor Courses</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('my_asset/images/books.svg')}}" alt="">
					</div>
					<h3>Amazing Library</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('my_asset/images/professor.svg')}}" alt="">
					</div>
					<h3>Exceptional Professors</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('my_asset/images/blackboard.svg')}}" alt="">
					</div>
					<h3>Top Programs</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('my_asset/images/mortarboard.svg')}}" alt="">
					</div>
					<h3>Graduate Diploma</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

			</div>
		</div>
</div>

<div class="container-fluid">
	
	    <section id="team" class="team">
	      <!-- <div class="container"> -->

	        <div class="section-title">
	          <h2>Our Teachers</h2>
	          <hr class="hr">
	        </div>

	        <div class="row">
	        	
	        	
	        	@foreach($teachers as $teacher)

	          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
	            <div class="member">
	            	
		              <div class="pic"><a href="#"><img src="{{asset($teacher->profile)}}" class="img-fluid" alt=""></a></div>
		              <div class="member-info">
		                <h4>{{$teacher->user->name}}</h4>
		                <span>{{$teacher->degree}}</span>
		                
		              </div>
	              
	            </div>
	          </div>
	          
	        	@endforeach
	           
	        </div>

	      
	    </section>
	  <!-- End Our Team Section -->
</div>


@endsection