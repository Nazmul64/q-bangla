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
                 @if ( session('update'))
                     <span class="alert alert-success">{{ session('update') }}</span>
                 @endif
                  @if ( session('delete'))
                     <span class="alert alert-success">{{ session('delete') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('category.update',$businesssolution->id) }}"enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                         <div class="mt-2">
                              <label>Business Tag</label>
                              <input type="text"class="form-control @error('business_tag') is-invalid   @enderror " value="{{ $businesssolution->business_tag }}" name="business_tag">
                              @error('business_tag')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                          <div class="mt-2">
                              <label>Business Title</label>
                              <input type="text"class="form-control @error('business_title') is-invalid   @enderror  " value="{{ $businesssolution->business_title }}" name="business_title">
                              @error('business_title')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>Business Description</label>
                              <input type="text"class="form-control @error('business_description') is-invalid   @enderror " value="{{ $businesssolution->business_description }}" name="business_description">
                              @error('business_description')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>Business Photo</label>
                              <br>
                               <img height="90px" src="{{ asset('frontend/business_photos/'. $businesssolution->business_images) }}">
                         </div>
                         <div class="mt-2">
                              <label> New Business Photo</label>
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
