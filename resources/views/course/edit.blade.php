@extends('admin')

@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
    </div>
<div class="x_content">
    <br />
      <form method="post" action="{{route('course.update',$course->id)}}" enctype="multipart/form-data">
      @csrf  
      @method('PUT')
        <div class="item form-group">
          <label>Photo:(<small class="text-danger">* jpeg|bmp|png</small>)</label>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Course Logo</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Change Logo</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <img src="{{asset($course->photo)}}" class="img-fluid" alt="" width="200px" height="200px">
                  <input type="hidden" name="oldphoto" value="{{$course->photo}}">
                  
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                @error('photo')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror

               </div>
           </div>
     </div>
            
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="text" id="name" required="required" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$course->name}}">
             @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
       </div>
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No_of_times (Period)<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="number"  name="no_of_times" required="required" class="form-control @error('no_of_times') is-invalid @enderror" minlength="0" value="{{$course->no_of_times}}">
             @error('no_of_times')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
       </div>
       <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required ">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea class="form-control" id="description" name="description" class="@error('description') is-invalid @enderror">{{$course->description}}</textarea>
            @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
       </div>
       
       <div class="ln_solid"></div>
       <div class="item form-group">
          <div class="col-md-6 col-sm-6 ">
             
             
             <button type="submit" class="btn btn-success btn-block">Submit</button>
          </div>
       </div>
    </form>
 </div>
</main>
@endsection

