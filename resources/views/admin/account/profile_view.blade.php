@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')
    <h4>My Profile</h4>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                       <form>
                        <div class="mt-2">
                           <label>Full Name :</label>
                           <input type="text"name="name"value="Nazmul Hossain"class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>Father's Name :</label>
                           <input type="text"name="name"value="Fazal Ali "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>Mother's Name :</label>
                           <input type="text"name="name"value="Razia "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>Nominee's Name :</label>
                           <input type="text"name="name"value="Salman "class="form-control">
                       </div>
                       <div class="mt-2">
                           <label>Relation With Nominee :</label>
                           <input type="text"name="name"value="Son "class="form-control">
                       </div>
                       <div class="mt-2">
                           <label>NID/P.P. No./D.L. No :</label>
                           <input type="number"name="name"value="1234567890 "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>Date of Birth:</label>
                           <input type="date"name="name"value="1234567890 "class="form-control">
                       </div>
                       <div class="mt-2">
                           <label>Blood Group:</label>
                           <input type="text"name="name"value="0+ "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>Email Address:</label>
                           <textarea type="text"name="name"value="Dhaka "class="form-control"></textarea>
                       </div>
                        <div class="mt-2">
                           <label>Post Code:</label>
                           <input type="text"name="name"value="1219 "class="form-control">
                       </div>
                       <div class="mt-2">
                           <label>Ward No:</label>
                           <input type="text"name="name"value="19 "class="form-control">
                       </div>
                       <div class="mt-2">
                           <label>Union / Municipality:</label>
                           <input type="text"name="name"value="Rampura "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>Sub-District Name</label>
                           <input type="text"name="name"value="Rampura "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>District Name:</label>
                           <input type="text"name="name"value="Dhaka "class="form-control">
                       </div>
                       <div class="mt-2">
                          <p class="text-danger">Set your payment receive details, at here. You can't change the details, after you saved this. So Leave blank if you have not any account the target filed. Minimum 11 Character/Number</p>
                       </div>
                        <div class="mt-2">
                           <label>My Bkash Perosnal Number:</label>
                           <input type="number"name="name"value="01941588933 "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>My Nagad Perosnal Number:</label>
                           <input type="text"name="name"value="01829128589 "class="form-control">
                       </div>
                        <div class="mt-2">
                           <label>My Bank Details:</label>
                           <textarea type="text"name="name"value="*Acount Name-Shamsul Hoque Milon
                            Bank Name-Islami Bank Bangladesh Ltd.
                            Accoun Number-
                            2050 6330 20001 7513
                            Branch- khilgoan বা Nobinbag sub Branch
                            Accoun Type -
                            Saving Account "class="form-control"></textarea>
                       </div>
                        <div class="mt-2">
                           <label>Upload Passport Image:</label>
                           <input type="file"name="name"value="01829128589 "class="form-control">
                       </div>
                       <div class="mt-2">
                         <button type="button"class="btn btn-success">Save </button>
                       </div>
                       </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label>Passport Photo</label><br>
                <img src="dashboard/assets/images/user.png" class="rounded float-left" alt="...">
            </div>
        </div>
    </div>
@endsection
