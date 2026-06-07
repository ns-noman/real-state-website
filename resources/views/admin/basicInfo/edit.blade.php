@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="card m-2 p-2">
        <div class="card-body">
            <form class="row g-3" method="POST" action="{{url('basicinfo/'.$basicInfo->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')          
              <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Title</label>
                <input required type="text" class="form-control" id="title" name="title" value="{{$basicInfo->title}}">
              </div>
              <div class="col-md-6">
                <label for="favicon" class="form-label">Fav Icon</label>
                <input type="file" id="favicon" name="favicon" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" id="logo" name="logo" class="form-control">
              </div>
              <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Phone</label>
                  <input required type="text" class="form-control" id="phone" name="phone" value="{{$basicInfo->contact}}">
                </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Email</label>
                <input required type="email" class="form-control" id="email" name="email" value="{{$basicInfo->email}}">
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input required type="text" class="form-control" id="address" name="address" value="{{$basicInfo->address}}">
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Facebook Link</label>
                <input type="text" class="form-control" id="fbLink" name="fbLink" value="{{ $basicInfo->fbLink }}" >
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Instagram Link</label>
                <input type="text" class="form-control" id="instraLink" name="instraLink" value="{{ $basicInfo->instraLink }}" >
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">YouTube Link</label>
                <input type="text" class="form-control" id="youtubeLink" name="youtubeLink" value="{{ $basicInfo->youTubeLink }}" >
              </div>
              <div class="col-md-12 m-1">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>
 @endsection