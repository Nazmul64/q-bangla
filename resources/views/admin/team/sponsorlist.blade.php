@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')
    <h4>Affiliate List</h4>
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
                        <div class="mt-2">
                            <h5 class="text-black align-items-center justify-center ">Direct Downline by the account Partner  (my group 0)</h5>
                        </div>
                        <div class="mt-2">
                          <table class="table table-bordered table-hover">
                            <thead style="background:#64C5B1;">
                                <tr>
                                <th scope="col" class="text-white">Sl</th>
                                <th scope="col" class="text-white">Username</th>
                                <th scope="col" class="text-white">Full Name</th>
                                <th scope="col" class="text-white">Designation</th>
                                <th scope="col" class="text-white">Reg. Date</th>
                                <th scope="col" class="text-white">Placement ID</th>
                                <th scope="col" class="text-white">Place At</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="#">Easytouch</a></td>
                                <td>Shamsul Hoque Milon</td>
                                <td>Member</td>
                                <td>2023-07-12</td>
                                <td>Saikat</td>
                                <td>Right</td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td><a href="#">Easytouch</a></td>
                                <td>Shamsul Hoque Milon</td>
                                <td>Member</td>
                                <td>2023-07-12</td>
                                <td>Saikat</td>
                                <td>Right</td>
                            </tr>

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
