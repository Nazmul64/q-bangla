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
                <div class="card-header text-success ">Customer List</div>
                @if ( session('insert'))
                    <span class="alert alert-success">{{ session('insert') }}</span>
                @endif
                <div class="card-body">
                   <form method="POST" action="{{ route('category.store') }}"enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label >Category Name</label>
                            <input type="text" class="form-control   @error('category_name') is-invalid  @enderror"  placeholder="Enter Category Name"name="category_name">
                            @error('category_name')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Category Tagline</label>
                            <input type="text" class="form-control  @error('category_tagline') is-invalid  @enderror"  placeholder="Enter Category Tagline"name="category_tagline">
                            @error('category_tagline')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label >Category photo</label>
                            <input type="file" class="form-control @error('category_photo') is-invalid  @enderror" name="category_photo">
                             @error('category_photo')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-primary">Add New Category </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
