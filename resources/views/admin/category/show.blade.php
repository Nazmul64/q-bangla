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
                <div class="card-header text-success ">Category show</div>
                @if ( session('insert'))
                    <span class="alert alert-success">{{ session('insert') }}</span>
                @endif
                <div class="card-body">
                    <table class="table table-bordered">
                         <thead>
                              <tr>
                                  <th>Category Name</th>
                                  <th>Category Tagline</th>
                                  <th>Category Photo</th>
                              </tr>
                         </thead>
                         <tbody>

                              <tr>
                                  <td>{{ $category->category_name }}</td>
                                  <td>{{ $category->category_tagline }}</td>
                                  <td>
                                      <img height="90px" src="{{ asset('uploads/category_photos/'.$category->category_photo) }}">
                                  </td>
                              </tr>
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
