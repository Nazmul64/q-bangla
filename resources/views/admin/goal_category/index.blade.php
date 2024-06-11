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
                <div class="card-header">Goal List</div>
                 @if ( session('insert'))
                     <span class="alert alert-success">{{ session('insert') }}</span>
                 @endif
                <div class="card-body">
                    <table class=" table table-bordered">
                         <thead>
                              <tr>
                                 <th>Goal Title</th>
                                 <th>Goal description</th>
                                 <th>Goal Photo</th>
                                 <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                            @foreach ( $goalobjective as   $goalobjective)
                             <tr>
                                 <td>{{ $goalobjective->goal_title }}</td>
                                 <td>{{ $goalobjective->goal_description }}</td>
                                  <td><img height="90px" src="{{ asset('frontend/object_photos/'.$goalobjective->goal_photo ) }}"></td>
                                  <td class="d-flex">
                                     <a  href="{{ route('goal_category.edit',$goalobjective->id ) }}" class="btn btn-success text-white">Edite</a>
                                      <a  href="{{ route('goal_category.show',$goalobjective->id ) }}" class="btn btn-info text-white">Show</a>
                                    <form method="POST"action="{{ route('goal_category.destroy',$goalobjective->id ) }}">
                                        @csrf
                                        @method('DELETE')
                                       <button type="submit" class="btn btn-danger text-white mx-1">Delete</button>
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
