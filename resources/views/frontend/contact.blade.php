@extends('frontendtemplate')
@section('content')
<h3 class="tile-title mt-3 text-center">Contact Us</h3>
<hr class="hr">
  <div class="container-fluid my-4">
    <div class="row">
      <div class="col-sm-3 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Address 1</h5>
            <p class="card-text">82 Street Between 29X30 Street,</p>
            <p class="card-text">Mandalay</p>
          </div>
        </div>
      </div>
      
      <div class="col-sm-3 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Address</h5>
            <p class="card-text"> 68 Street Between 120X121 </p>
            <p class="card-text">Street,Mandalay</p>
          
          </div>
        </div>
      </div>
      <div class="col-sm-3 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Gmail</h5>
            <p class="card-text">myscholl@gmail.com</p>
            <p class="card-text">myscholl@doublevision.com</p>
          
          </div>
        </div>
      </div>

      <div class="col-sm-3 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Phone </h5>
            <p class="card-text"> 09 2563746828</p>
            <p class="card-text"> 09 6904532758</p>
            <!-- <p class="card-text"> 09 96437955482</p> -->
          
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-success">Send</button>
      </div>
      <div class="col-md-6 mt-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14801.246833757134!2d96.0976624!3d21.9609967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b2a1e81fc171bb0!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1608885182582!5m2!1sen!2smm" width="100%" height="335" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
@endsection