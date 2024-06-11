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
                <div class="card-header">Business Solutions</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                  @if ( session('delete'))
                     <span class="alert alert-success">{{ session('delete') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('businesshere.destroy',$businesshere->id) }}"enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                         <div class="mt-2">
                              <label>solution_title</label>
                              <input type="text"class="form-control @error('solution_title') is-invalid   @enderror " value="{{ $businesshere->solution_title }}" name="solution_title">
                              @error('solution_title')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                          <div class="mt-2">
                              <label>solution_description</label>
                              <input type="text"class="form-control @error('solution_description') is-invalid   @enderror  " value="{{ $businesshere->solution_description }}" name="solution_description">
                              @error('solution_description')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>solution_one</label>
                              <input type="text"class="form-control @error('solution_one') is-invalid   @enderror " value="{{ $businesshere->solution_one }}" name="solution_one">
                              @error('solution_one')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                              <label>solution_two</label>
                              <input type="text"class="form-control @error('solution_two') is-invalid   @enderror " value="{{ $businesshere->solution_two }}" name="solution_two">
                              @error('solution_two')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                              <label>solution_three</label>
                              <input type="text"class="form-control @error('solution_three') is-invalid   @enderror " value="{{ $businesshere->solution_three }}" name="solution_three">
                              @error('solution_three')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>solution_four</label>
                              <input type="text"class="form-control @error('solution_four') is-invalid   @enderror " value="{{ $businesshere->solution_four }}" name="solution_four">
                              @error('solution_four')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>Old Photo</label>
                              <br>
                               <img height="90px" src="{{ asset('frontend/business_solution/') }}/{{ $businesshere->solution_photo }}">
                         </div>
                         <div class="mt-2">
                              <label> new_business_images/label>
                              <input type="file"class="form-control @error('new_business_images') is-invalid   @enderror "  name="new_business_images">
                              @error('new_business_images')
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
