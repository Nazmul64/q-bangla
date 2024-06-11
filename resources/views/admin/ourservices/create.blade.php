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
                <div class="card-header">Our Services</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('ourservices.store') }}"enctype="multipart/form-data">
                        @csrf
                         <div class="mt-2">
                              <label>OurServices Tag</label>
                              <input type="text"class="form-control @error('ourservice_tag') is-invalid   @enderror "name="ourservice_tag">
                              @error('ourservice_tag')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                          <div class="mt-2">
                              <label>Our Services short Description</label>
                              <input type="text"class="form-control @error('ourservies_shortsdescription') is-invalid   @enderror "name="ourservies_shortsdescription">
                              @error('ourservies_shortsdescription')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                         <div class="mt-2">
                              <label>Min Title</label>
                              <input type="text"class="form-control @error('main_title') is-invalid   @enderror "name="main_title">
                              @error('main_title')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>Min Description</label>
                              <input type="text"class="form-control @error('main_description') is-invalid   @enderror "name="main_description">
                              @error('main_description')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="mt-2">
                              <label>Main Logo</label>
                              <input type="file"class="form-control @error('main_logo') is-invalid   @enderror "name="main_logo">
                              @error('main_logo')
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
