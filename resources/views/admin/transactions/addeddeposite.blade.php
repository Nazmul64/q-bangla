@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')

<h4 class="page-title">Fund Add Option</h4>
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
          <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                  <div class="bank_name">
                     <img src="dashboard/assets/images/fund_images/online.png">
                     <h5>Please Send Your Money Following Online Banking Account ID</h5>
                  </div>
             </div>
            </div>
          </div>
           <div class="col-md-6">
             <div class="card">
                <div class="card-body">
                 <div class="details">
                    <p class="h-4 text-black"><span>Bank Name:</span> The City Bank</p>
                    <p class="h-4 text-black"><span>Account Name:</span> Q-Bangla Entertainment Limited</p>
                    <p class="h-4 text-black"><span>Account Number:</span> 01706640864</p>
                    <p class="h-4 text-black"><span>Branch:</span> Kawran Bazar</p>
                      <p class="h-4 text-black"><span>Webstie</span> https://q-bangla.com/</p>
                </div>
                </div>
             </div>
          </div>
            <div class="col-12">
              <div class="card">
                 <div class="card-body">
                     <h4>After Complete Your Payment Please Give Us Your Payment Information Below</h4>
                     <div class="mt-2">
                          <form method="POST">
                              <div class="mt-1">
                                   <label>Account ID :</label>
                                   <input type="text"class="form-control"name="account_id"placeholder="Enter Your Account ID">
                              </div>
                               <div class="mt-1">
                                   <label>Send Amount:</label>
                                   <input type="number"class="form-control"name="account_id"placeholder="Enter Your Send Amount">
                              </div>
                               <div class="mt-1">
                                   <label>Transacton ID:</label>
                                   <input type="text"class="form-control"name="account_id"placeholder="Enter Your Transacton ID">
                              </div>
                              <div class="mt-2">
                                  <button type="button" class="btn btn-success">Submit</button>
                                  <button type="button" class="btn btn-danger">Cancel</button>
                              </div>
                          </form>
                     </div>
                 </div>
              </div>
          </div>
     </div>
</div>
@endsection
