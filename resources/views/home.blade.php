@extends('layouts.app')


@section('breadcrumb')
 <div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Starter</li>
    </ol>
</div>
  <h4 class="page-title">Starter page</h4>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success">
                @if(Auth::user()->role==1)
                    Hi You Are Cuertomer
                @else
                 Hi Admin
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                  <table class="table-bordered table">
                       <thead >
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Email</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>{{ Auth::user()->id }}</td>
                               <td>{{ Auth::user()->name }}</td>
                               <td>{{ Auth::user()->email }}</td>
                           </tr>
                       </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
