@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')
    <h4>Commission Statement</h4>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="search_commission d-flex justify-content-center align-items-center">
                            <div class="mt-2">
                                <label>Date From:</label>
                                <input type="date"class="datepicker">
                            </div>
                            <div class="mt-2">
                                <label>Date To:</label>
                                <input type="date"class="datepicker">
                            </div>
                            <div class="mt-2">
                                <label>Report Type:</label>
                                <select class="datepicker"">
                                    <option>All</option>
                                    <option>Sponsor Income</option>
                                    <option>Matching Income</option>
                                    <option>Generation Income</option>
                                    <option>Incentive Income</option>
                                    <option>Salary Income</option>
                                </select>
                            </div>
                             <div class="mt-2">
                               <button class="btn btn-outline-success my-2 my-sm-0" type="submit"style="padding:9px;">Search</button>
                            </div>
                        </div>
                        <div class="mt-2">
                             <table class="table table-bordered table-hover responsive table-striped">
                                <thead style="background:#64C5B1;">
                                    <tr>
                                    <th scope="col"class="text-white">1</th>
                                    <th scope="col"class="text-white">Date & Time</th>
                                    <th scope="col"class="text-white">User ID</th>
                                    <th scope="col"class="text-white">Income Type</th>
                                    <th scope="col"class="text-white">Cashout Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Partner</td>
                                        <td>Club Income</td>
                                        <td>2.19 BDT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Partner</td>
                                        <td>Matching Income</td>
                                        <td>2.19 BDT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Partner</td>
                                        <td>Club Income</td>
                                        <td>2.19 BDT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>17 June, 2024 12:02 AM</td>
                                        <td>Partner</td>
                                        <td>Matching Income</td>
                                        <td>2.19 BDT</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" style="align:right;">All Total  </th>
                                        <th  style="align:right;">1,556,408.91 BDT</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
