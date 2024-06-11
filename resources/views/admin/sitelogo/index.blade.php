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
                                 <th>Site Logo</th>
                                 <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                            <tbody>
                                @foreach ( $sitelogo as $sitelogo )
                                <tr>
                                    <td>
                                        <img height="50px" src="{{ asset('frontend/site_logos/'.$sitelogo->main_logo) }}">
                                    </td>
                                    <td>
                                        <a class="btn btn-success text-white"href="{{ route('sitelogo.edit',$sitelogo->id) }}">Edit</a>
                                    </td>
                                 </tr>
                                @endforeach
                            </tbody>
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
