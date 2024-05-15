@extends('layouts.app')

@section('breadcrumb')
 <div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('profile') }}">Profile</a></li>
        <li class="breadcrumb-item active">Starter</li>
    </ol>
</div>
  <h4 class="page-title">Starter page</h4>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Home</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('userprofileupdate') }}"enctype="multipart/form-data">
                        @csrf
                         <div class="mt-2">
                              <label>Name</label>
                              <input type="text"class="form-control"name="name"value="{{ Auth::user()->name }}">
                              @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                         </div>
                         <div class="mt-2">
                            <img height="250px" class="card-img-top" src="{{ asset('uploads/users_photo/'.Auth::user()->profile_photo) }}" alt="Card image cap">
                         </div>
                          <div class="mt-2">
                           <input type="file"class="form-control"name="profile_photo">
                           @if ($errors->has('profile_photo'))
                              <span class="text-danger">{{ $errors->first('profile_photo') }}</span>
                           @endif
                         </div>
                          <div class="mt-2">
                             <button class="btn btn-success"type="submit">Updated</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
             <div class="col-md-6">
            <div class="card">
                <div class="card-header">Change Password</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('userpasswordupdated') }}">
                        @csrf
                         <div class="mt-2">
                              <label>Old Password</label>
                              <input type="text"class="form-control @error('old_password') is-invalid   @enderror "name="old_password">
                              @error('old_password')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label> New Password</label>
                              <input type="text"class="form-control @error('new_password') is-invalid   @enderror"name="new_password">
                              @error('new_password')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                              <label> Confirmation Password</label>
                              <input type="text"class="form-control  @error('confirmation_password') is-invalid   @enderror"name="confirmation_password">
                              @error('confirmation_password')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                             <button class="btn btn-success"type="submit">Updated</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
