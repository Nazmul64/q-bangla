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
<div class="container-fluid">
    <div class="row justify-content-center">
             <div class="col-md-12">
            <div class="card">
                <div class="card-header">Goal Objective</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('goal_category.store') }}"enctype="multipart/form-data">
                        @csrf
                         <div class="mt-2">
                              <label>Goal Title</label>
                              <input type="text"class="form-control @error('goal_title') is-invalid   @enderror "name="goal_title">
                              @error('goal_title')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                          <div class="mt-2">
                              <label>Goal Description</label>
                              <input type="text"class="form-control @error('goal_description') is-invalid   @enderror "name="goal_description">
                              @error('goal_description')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                         <div class="mt-2">
                              <label>Goal Photo</label>
                              <input type="file"class="form-control @error('goal_photo') is-invalid   @enderror "name="goal_photo">
                              @error('goal_photo')
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
