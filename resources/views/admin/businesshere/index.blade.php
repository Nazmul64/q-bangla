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
                    <table class=" table table-bordered table-responsive">
                         <thead>
                              <tr>
                                 <th>solution_title</th>
                                 <th>solution_description</th>
                                 <th>solution_one</th>
                                 <th>solution_two</th>
                                 <th>solution_three</th>
                                 <th>solution_four</th>
                                 <th>solution_photo</th>
                                 <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                            @foreach ($businesshere as $businesshere )
                              <tr>
                                  <td>{{ $businesshere->solution_title }}</td>
                                  <td>{{ $businesshere->solution_description }}</td>
                                  <td>{{ $businesshere->solution_one }}</td>
                                  <td>{{ $businesshere->solution_two }}</td>
                                  <td>{{ $businesshere->solution_three }}</td>
                                  <td>{{ $businesshere->solution_four }}</td>
                                  <td>
                                     <img  height="90px" src="{{ asset('frontend/business_solution/'.$businesshere->solution_photo) }}">
                                  </td>
                                  <td class="d-flex">
                                     <a class="btn btn-success text-white"href="{{ route('businesshere.edit',$businesshere->id) }}">Edit</a>
                                      <form method="POST"action="{{ route('businesshere.destroy',$businesshere->id) }}">
                                        @csrf
                                        @method('DELETE')
                                       <button class="btn btn-danger text-white mx-1"type="submit">Delete</button>
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
