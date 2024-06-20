@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')
<h4>My Trade List</h4>
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

    .styled-hr {
        border: 0;
        height: 2px;
        /* Adjust the height as needed */
        width: 400px;
        background-color: #000;
        /* Set your desired background color */
        margin: 20px 0;
        /* Add some margin to the top and bottom */
    }

    .margin_right {
        margin-right: 20px;
        overflow: hidden;
    }

    .h-4 {
        height: 1.5rem;
    }
</style>
@section('content')
<div class="continer-fluid">
    <div class="row">
       <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                  <div class="text-align-center justify-content-center">
                     <div class="d-flex">
                     <div class="mt-2">
                           <label style="margin-left: 5px;margin-right:5px;">Date From:</label>
                           <input type="date" class="datepicker"name="date">
                     </div>
                     <div class="mt-2">
                           <label  style="margin-left: 5px;margin-right:5px;" >Date To:</label>
                           <input type="date" class="datepicker"name="date">
                     </div>
                       <div class="mt-2">
                           <button id="search-button" type="button" class="btn btn-primary"style="padding:11px;">Search</button>
                     </div>
                  </div>
                  </div>
                  <div class="mt-2">
                             <table class="table table-bordered table-hover responsive table-striped">
                                <thead style="background:#64C5B1;">
                                    <tr>
                                    <th scope="col"class="text-white">SL</th>
                                    <th scope="col"class="text-white">Date & Time</th>
                                    <th scope="col"class="text-white">Trade Amount</th>
                                    <th scope="col"class="text-white">Total Return %</th>
                                    <th scope="col"class="text-white">Return % Received</th>
                                    <th scope="col"class="text-white"> Remain Return %</th>
                                     <th scope="col"class="text-white">Return Received </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Fighterbd071</td>
                                        <td>Kamron Nahar</td>
                                        <td>01712334348</td>
                                        <td>10,000.00 BDT</td>
                                         <td>10,000.00 BDT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Fighterbd071</td>
                                        <td>Kamron Nahar</td>
                                        <td>01712334348</td>
                                        <td>10,000.00 BDT</td>
                                         <td>10,000.00 BDT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Fighterbd071</td>
                                        <td>Kamron Nahar</td>
                                        <td>01712334348</td>
                                        <td>10,000.00 BDT</td>
                                        <td>10,000.00 BDT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Fighterbd071</td>
                                        <td>Kamron Nahar</td>
                                        <td>01712334348</td>
                                        <td>10,000.00 BDT</td>
                                        <td>10,000.00 BDT</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" style="align:left;">Total Records : 17 </th>
                                        <th colspan="2"  style="align:right;">All Total Sales Records</th>
                                        <th >82500.00 BDT </th>
                                    </tr>
                                </tfoot>
                            </table>
                          </div>
              </div>
          </div>
       </div>
    </div>
</div>
@endsection
