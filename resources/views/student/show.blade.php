@extends('admin')

@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Admin Dashboard</h1>
        
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
    </div>
<div class="x_content">
     <!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4 text-center">Teacher Profile</h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-6">
      <img class="img-fluid" src="{{$student->profile}}" alt="">
    </div>

    <div class="col-md-6">
      <!-- <h3>Project Details</h3>
      <p>Total Times : </p>
      <p>Trainer      :</p> -->

      <div class="row">
        <div class="col-md-4">
          <p>Name</p>
          <p>Course</p>
          <p>Address</p>
          <p>Phone</p>
          <p>Role Number</p>
          <p>Gender</p>
          
        </div>
        <div class="col-md-8">

          <p>{{$student->user->name}}</p>
          <p>{{$student->course->name}}</p>
          <p>{{$student->address}}</p>
          <p>{{$student->phone_no}}</p>
          <p>{{$student->roll_no}}</p>
          <p>{{$student->gender}}</p>
          
          
        </div>
      </div>
    
    </div>

  <!-- </div> -->
  <!-- /.row -->

  <!-- Related Projects Row -->
  <!-- <h3 class="my-4">Related Courses</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div> -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
 </div>
</main>
@endsection
