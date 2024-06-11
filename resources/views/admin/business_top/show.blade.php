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
                          <th>Business Tag</th>
                          <th>Business Title</th>
                          <th>Business Description</th>
                          <th>Business Photo</th>
                       </tr>
                       </thead>
                       <tbody>
                            <tr>
                               <td>{{ $businessSolution->business_tag }}</td>
                               <td>{{ $businessSolution->business_title }}</td>
                               <td>{{ $businessSolution->business_description }}</td>
                               <td>
                                  <img height="150px" src="{{ asset('frontend/business_photos/'. $businessSolution->business_images)}}">
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
