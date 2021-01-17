<!-- @extends('admin')

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
      <form method="post" action="{{route('teacher.update',$teacher->id)}}" enctype="multipart/form-data">
      @csrf  
      @method('PUT')
        <div class="item form-group">
          <label>Photo:(<small class="text-danger">* jpeg|bmp|png</small>)</label>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Change Profile</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <img src="{{asset($teacher->profile)}}" class="img-fluid" alt="" width="200px" height="200px">
                  <input type="hidden" name="oldphoto" value="{{$teacher->profile}}">
                  
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
             <input type="text" id="name" required="required" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$teacher->user->name}}">
             @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
       </div>
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
             <input type="email" id="last-name" name="email" required="required" class="form-control @error('email') is-invalid @enderror" value="{{$teacher->user->email}}">
             @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
      </div>
      <div class="item form-group">
          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
          <div class="col-md-6 col-sm-6 ">
             <input id="middle-name" class="form-control @error('password') is-invalid @enderror " type="password" name="password" value="{{$teacher->user->password}}">
             @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
      </div>
       <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
          <div class="col-md-6 col-sm-6 ">
             <div id="gender" class="btn-group" data-toggle="buttons">

                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="male" class="join-btn" {{$teacher->gender == 'male' ? 'checked' : ''}}> &nbsp; Male &nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="female" class="join-btn" {{$teacher->gender == 'female' ? 'checked' : ''}} > Female
                </label>
             </div>
          </div>
      </div>
      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone_no">Phone no<span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
           <input id="phone_no" name="phone_no" class="form-control @error('phone_no') is-invalid @enderror" type="text" required="required" type="text" value="{{$teacher->phone_no}}">
           @error('phone_no')
           <div class="alert alert-danger">{{ $message }}</div>
           @enderror
         </div>
     </div>
     <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="degree">Degree<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input id="degree" name="degree" class="form-control @error('degree') is-invalid @enderror" type="text" required="required" type="text" value="{{$teacher->degree}}">
            @error('degree')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          
          </div>
          <input type="hidden" name="useridvalue" value="{{$teacher->user_id}}">
      </div>
      <div class="form-group">
        <label class="ol-form-label col-md-3 col-sm-3 label-align ">Select Multiple</label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control" name="course">
               <optgroup label="Choose Course">
               @foreach ($course as $subject)
               <option value="{{$subject->id}}" @if($subject->id == $teacher->course_id){{'selected'}} @endif>{{ $subject->name }}</option>
               @endforeach
            </select>
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

 -->