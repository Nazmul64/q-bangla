@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')
    <h4>Change Password</h4>
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
                        <form>
                             <div class="mt-2">
                                  <label>Old Password <strong class="text-danger">*</strong></label>
                                  <input type="password"name="old_password"class="form-control">
                             </div>
                              <div class="mt-2">
                                  <label>New  Password <strong class="text-danger">*</strong></label>
                                  <input type="password"name="old_password"class="form-control">
                             </div>
                             <div class="mt-2">
                                  <label>Confirm New   Password <strong class="text-danger">*</strong></label>
                                  <input type="password"name="old_password"class="form-control">
                             </div>
                              <div class="mt-2">
                                  <a type="submit"class="btn btn-success text-white">Update</a>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
