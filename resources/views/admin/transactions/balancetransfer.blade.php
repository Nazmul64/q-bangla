@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')

 <h4>Balance Transfer Form </h4>
@endsection
 <style>

        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .details {
            text-align: left;
        }
        .details p {
            margin: 10px 0;
            color: #555;
        }
        .details span {
            font-weight: bold;
            color: #000;
        }
        .text-black {
            color: #000;
        }
        .h-4 {
            height: 1.5rem;
        }
    </style>
@section('content')
<div class="continer-fluid">
     <div class="row">
            <div class="col-12">
              <div class="card">
                 <div class="card-body">
                     <div class="mt-2">
                          <form method="POST">
                             <div class="mt-1">
                                   <label>Account Balnace:154255</label>
                              </div>
                              <div class="mt-1">
                                   <label>Receiver User ID:</label>
                                   <input type="text"class="form-control"name="account_id"placeholder="Enter Receiver User ID ">
                              </div>
                               <div class="mt-1">
                                   <label>Enter  Amount:</label>
                                   <input type="number"class="form-control"name="account_id"placeholder="Enter Your  Amount">
                              </div>
                               <div class="mt-1">
                                   <label>Your Login Password:</label>
                                   <input type="password"class="form-control"name="account_id"placeholder="Enter Your Login Password">
                              </div>
                              <div class="mt-2">
                                  <button type="button" class="btn btn-success">Transfer</button>
                              </div>
                          </form>
                     </div>
                 </div>
              </div>
          </div>
     </div>
</div>
@endsection
