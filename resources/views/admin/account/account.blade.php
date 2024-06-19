@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')
    <h4>User Dashboard </h4>
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
    height: 2px; /* Adjust the height as needed */
    width:400px;
    background-color: #000; /* Set your desired background color */
    margin: 20px 0; /* Add some margin to the top and bottom */
}
.margin_right{
    margin-right:20px;
    overflow:hidden;
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
                        <div class="user_dashboard_images align-items-center justify-content-center "
                            style="border:dashed; height:200px; width:210px; border-color:#64C5B1; ">
                            <img src="dashboard/assets/images/user.png">
                        </div>
                        <div class="mt-2">
                            <span><strong class="margin_right">Account Username</strong>  : <strong class="margin_right">Partner</strong></span><br>
                            <span><strong class="margin_right">Account Full Name</strong>  : <strong class="margin_right">Shamsul Hoque Milon</strong></span><br>
                            <span><strong class="margin_right">Email Address</strong>  : <strong class="margin_right">unitedgroup75@gmail.com</strong></span><br>
                            <span><strong class="margin_right">Cell Number</strong>  :<strong class="margin_right"> 01829128589</strong></span><br>
                            <span><strong class="margin_right">Joining Date Time</strong>  : <strong class="margin_right">2023-06-19 05:41:44 PM</strong></span><br>
                            <span><strong class="margin_right">Sponsor ID</strong>  : <strong class="margin_right">etenadmin</strong></span><br>
                            <span><strong class="margin_right">Direct Sponsord</strong>  : <strong class="margin_right">3</strong></span><br>
                            <span><strong class="margin_right">Total Team Member</strong>  : <strong class="margin_right">2212</strong></span><br>
                            <span><strong class="margin_right">Purchased Total Amount</strong> : <strong class="margin_right">100000.00 BDT</strong></span><br>
                            <span><strong class="margin_right">Account Status</strong> : <strong class="margin_right">Club Member</strong></span>
                        </div>
                        <div class="designation mt-2">
                           <h5 style="border-bottom:1px solid rgb(15, 11, 11);height:20px; width:100px;">Designation</h5>
                           <h6 style="color:#000;font-size:15px;">Manager</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                        <div class="card-body">
                              <u style="font-size:16px; color:#000;">Withdrawal Wallet</u>
                              <div class="mt-2">
                                  <span><strong class="margin_right">Total Referral Bonus</strong> : <strong class="margin_right">0.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Team Bonus</strong> : <strong class="margin_right">1,493,370.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Matching Generation Bonus</strong> : <strong class="margin_right">713.60 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Club Bonus</strong> : <strong class="margin_right">0.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Monthly Profit Return Bonus</strong> : <strong class="margin_right">0.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Monthly Ranking Honorarium Bonus</strong>  : <strong class="margin_right">0.00 BDT</strong></span><br>
                              </div>
                              <hr class="styled-hr">
                               <div class="mt-2">
                                  <span><strong class="margin_right">All Total Amount	</strong> : <strong class="margin_right">1,556,408.91 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Recharge Amount	</strong> : <strong class="margin_right">0.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Withdrawel Amount	</strong> : <strong class="margin_right">- 1,556,372.00 BDT</strong></span><br>

                              </div>
                               <hr class="styled-hr">
                                <div class="mt-2">
                                  <span><strong class="margin_right">Remain Withdrawal Balance</strong> : <strong class="margin_right">36.91 BDT</strong></span><br>
                              </div>
                               <div class="mt-2">
                                <u  style="font-size:16px; color:#000; margin-bottom:5px;;">Trade Wallet</u><br>
                                  <span><strong class="margin_right">Fund Added Amount	</strong> : <strong class="margin_right">36.91 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Receive Amount </strong> : <strong class="margin_right">134,965.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Transfer Amount </strong> : <strong class="margin_right">- 52,465.00 BDT</strong></span><br>
                                  <span><strong class="margin_right">Total Trade Sales</strong> : <strong class="margin_right">- 82,500.00 BDT</strong></span><br>
                              </div>
                               <hr class="styled-hr">
                              <div class="mt-2">
                                  <span><strong class="margin_right">Remain Withdrawal Balance</strong> : <strong class="margin_right">0.00 BDT</strong></span><br>
                              </div>
                        </div>
                 </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 justify-center align-content-center "style="background:#64C5B1;">
                <h5 class="text-white h4">Share my direct register affiliate link for my team Affiliations</h5>
                <div class="mt-2">
                    <a href="#" class="text-white h5">https://q-bangla.com/reg/signup.php?sponsor=Partner</a>
                </div>
            </div>
        </div>
    </div>
@endsection
