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
                <div class="card-header">Business List</div>
                 @if ( session('insert'))
                     <span class="alert alert-success">{{ session('insert') }}</span>
                 @endif
                <div class="card-body">
                    <table class=" table table-bordered">
                         <thead>
                              <tr>
                                 <th>Business Tag</th>
                                 <th>Business Title</th>
                                 <th>Business Discription</th>
                                 <th>Business Image</th>
                                 <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                            @foreach ($businesssolution as $businesssolution )
                              <tr>
                                  <td>{{ $businesssolution->business_tag }}</td>
                                  <td>{{ $businesssolution->business_title }}</td>
                                  <td>{{ $businesssolution->business_description }}</td>
                                  <td>
                                     <img  height="90px" src="{{ asset('frontend/business_photos/'.$businesssolution->business_images) }}">
                                  </td>
                                  <td class="d-flex ">
                                    {{-- <form method="POST"action=""></form> --}}
                                     <a class="btn btn-success"href="{{ route('category.edit', $businesssolution->id ) }}">Edit</a>
                                      <a class="btn btn-info mx-1"href="{{ route('category.show', $businesssolution->id ) }}">show</a>
                                     <form method="POST"action="{{ route('category.destroy', $businesssolution->id ) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1"type="submit">Delete</button>
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
