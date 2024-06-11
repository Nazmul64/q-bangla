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
                <div class="card-header">Total Solutions</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('businesshere.store') }}"enctype="multipart/form-data">
                        @csrf
                         <div class="mt-2">
                              <label>solution_title</label>
                              <input type="text"class="form-control @error('solution_title') is-invalid   @enderror "name="solution_title">
                              @error('solution_title')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                          <div class="mt-2">
                              <label>solution_description</label>
                              <input type="text"class="form-control @error('solution_description') is-invalid   @enderror "name="solution_description">
                              @error('solution_description')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>solution_one</label>
                              <input type="text"class="form-control @error('solution_one') is-invalid   @enderror "name="solution_one">
                              @error('solution_one')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>solution_two</label>
                              <input type="text"class="form-control @error('solution_two') is-invalid   @enderror "name="solution_two">
                              @error('solution_two')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>solution_three</label>
                              <input type="text"class="form-control @error('solution_three') is-invalid   @enderror "name="solution_three">
                              @error('solution_three')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                              <label>solution_four</label>
                              <input type="text"class="form-control @error('solution_four') is-invalid   @enderror "name="solution_four">
                              @error('solution_four')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                         <div class="mt-2">
                              <label>solution_photo</label>
                              <input type="file"class="form-control @error('solution_photo') is-invalid   @enderror "name="solution_photo">
                              @error('solution_photo')
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
