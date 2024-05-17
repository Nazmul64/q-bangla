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
                <div class="card-header text-success ">Customer List</div>
                <div class="card-body">
                    <table class="table-bordered table">
                         <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Check</th>
                                  <th>Customer Number</th>
                                  <th>Customer Name</th>
                                  <th>Customer Email</th>
                                  <th>Action</th>
                              </tr> 
                         </thead>
                      <tbody>
                        <form method="POST" action="{{ route('checkemailoffer') }}">
                            @csrf
                        @foreach ( $customers as $customer )
                          <tr>
                              <td>{{ $loop->index +1 }}</td>
                               <td>
                                 <input type="checkbox"  name="check[]"  value="{{ $customer->id }}" class="form-control">
                              </td>
                              <td>{{ $customer->number}}</td>
                              <td>{{ $customer->name}}</td>
                              <td>{{ $customer->email}}</td>
                              <td>
                                <a href="{{ route('singlemailoffer',$customer->id) }}" class="btn btn-sm btn-success">Send</a>
                              </td>

                          </tr>

                        @endforeach
                        <td>
                            <button type="submit"class="btn btn-sm- btn-info">Send Check </button>
                        </td>
                        </form>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
