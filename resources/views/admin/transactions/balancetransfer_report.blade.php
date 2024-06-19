@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')

 <h4>Balance Transfer Report </h4>
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
                     <table class="table table-bordered table-hover  ">
                            <thead  style="background:#64C5B1">
                                <tr>
                                    <th scope="col" class="text-white">Data & Time</th>
                                    <th scope="col"class="text-white">Receiver User ID</th>
                                    <th scope="col"class="text-white">Receiver Full Name</th>
                                    <th scope="col"class="text-white">Receiver Contact Number No</th>
                                    <th scope="col"class="text-white">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">12 June,2024 2:58 pm</th>
                                    <td>Namul Hossain</td>
                                    <td>Namul Hossain</td>
                                    <td>012354214</td>
                                    <td>100,00.00 BDT</td>
                                </tr>

                               <tr>
                                    <th scope="row">12 June,2024 2:58 pm</th>
                                    <td>Namul Hossain</td>
                                    <td>Namul Hossain</td>
                                    <td>012354214</td>
                                    <td>100,00.00 BDT</td>
                                </tr>
                                <tr>
                                    <th scope="row">12 June,2024 2:58 pm</th>
                                    <td>Namul Hossain</td>
                                    <td>Namul Hossain</td>
                                    <td>012354214</td>
                                    <td>100,00.00 BDT</td>
                                </tr>
                                <tr>
                                    <th scope="row">12 June,2024 2:58 pm</th>
                                    <td>Namul Hossain</td>
                                    <td>Namul Hossain</td>
                                    <td>012354214</td>
                                    <td>100,00.00 BDT</td>
                                </tr>
                            </tbody>
                        </table>
                 </div>
              </div>
          </div>
     </div>
</div>
@endsection
