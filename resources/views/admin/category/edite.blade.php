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
                <div class="card-header text-success ">Edit Category</div>
                @if ( session('insert'))
                    <span class="alert alert-success">{{ session('insert') }}</span>
                @endif
                <div class="card-body">
                   <form method="POST" action="{{ route('category.update',$category->id) }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                            <label >Status {{ $category->status }} </label>
                            <select class="form-control"name="status">
                                 <option value="show"{{ ($category->status=='show')? 'selected' : '' }}>Show</option>
                                 <option value="hide"{{ ($category->status=='hide')? 'selected' : '' }}>Hide</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label >Category Name</label>
                            <input type="text" class="form-control   @error('category_name') is-invalid  @enderror" value="{{ $category->category_name }}"  placeholder="Enter Category Name"name="category_name">
                            @error('category_name')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Category Tagline</label>
                            <input type="text" class="form-control  @error('category_tagline') is-invalid  @enderror"  value="{{ $category->category_tagline }}" placeholder="Enter Category Tagline"name="category_tagline">
                            @error('category_tagline')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label >Old photo</label><br>
                            <img height="100px" src="{{ asset('uploads/category_photos/'.$category->category_photo) }}">
                        </div>
                         <div class="form-group">
                            <label >Category  New Photo </label>
                            <input type="file" class="form-control @error('new_category_photo') is-invalid  @enderror" name="new_category_photo">
                             @error('new_category_photo')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-primary">Edit  {{ $category->category_name }} Category </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
