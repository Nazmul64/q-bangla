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
                <div class="card-header text-success "> List Category</div>
                @if ( session('deleted'))
                    <span class="alert alert-success">{{ session('deleted') }}</span>
                @endif
                <div class="card-body">
                    <table class=" table table-bordered ">
                        <thead>
                              <tr>
                                  <th>Category Status</th>
                                  <th>Category Name</th>
                                  <th>Category Tagline</th>
                                  <th>Category Photo</th>
                                  <th>Action</th>
                              </tr>
                        </thead>
                        <tbody>
                                @foreach ($categories as $category )
                                   <tr class="">
                                      <td>{{ $category->status }}</td>
                                      <td>{{ $category->category_name }}</td>
                                      <td>{{ $category->category_tagline }}</td>
                                      <td>
                                         <img height="50px" src="{{ asset('uploads/category_photos/'.$category->category_photo) }}">
                                      </td>
                                      <td class="d-flex  ">
                                          <a href="{{ route('category.edit',$category->id) }}" class="btn btn-success mx-2 my-1">Edit</a>
                                          <a href="{{ route('category.show',$category->id) }}" class="btn btn-info mx-2 my-1">show</a>
                                          <form method="POST"action="{{ route('category.destroy',$category->id) }}">
                                            @csrf
                                            @method('DELETE')
                                              <button class="btn btn-danger my-1"type="submit">Delete</button>
                                          </form>
                                      </td>

                                   </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
