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
                <div class="card-header">Data Show</div>
                <div class="card-body">
                   <table class="table table-bordered">
                       <thead>
                        <tr>
                          <th>Goal title</th>
                          <th>Goal description</th>
                          <th>Goal photo</th>
                       </tr>
                       </thead>
                       <tbody>
                            <tr>
                               <td>{{ $goal->goal_title }}</td>
                               <td>{{ $goal->goal_description }}</td>
                               <td>
                                  <img height="150px" src="{{ asset('frontend/object_photos/'. $goal->goal_photo)}}">
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
