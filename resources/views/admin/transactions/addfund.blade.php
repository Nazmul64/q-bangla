@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('breadcrumb')

<h4 class="page-title">Fund Add Option</h4>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-12">
           <div  class="table-responsive">
             <div class="card">
            <div class="card-body">
                <table class="table table-bordered  table-striped"">
                    <thead style="background:#64C5B1">
                         <tr>
                             <th class="text-white">Fund Added Option</th>
                              <th class="text-white">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                             <td  class="text-align-center justify-content-center"><img height="100px" src="dashboard/assets/images/fund_images/online.png"></td>
                             <td class="text-align-center justify-content-center align-content-center"><a href="#">Add Fund</a></td>
                         </tr>
                          <tr>
                             <td  class="text-align-center justify-content-center"><img height="100px" src="dashboard/assets/images/fund_images/mobile.png"></td>
                             <td class="text-align-center justify-content-center align-content-center"><a href="#">Add Fund</a></td>
                         </tr>
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <table class="table table-bordered   table-striped" style="margin-top:100px">
            <thead class="table__head">
                <tr class="winner__table">
                    <th><i class="fa fa-user" aria-hidden="true"></i>Date</th>
                    <th><i class="fa fa-map-marker" aria-hidden="true"></i> Fund Added Through</th>
                    <th><i class="fa fa-calendar-o" aria-hidden="true"></i> From The Acc. ID</th>
                    <th> <i class="fa fa-phone" aria-hidden="true"></i> Added Status</th>
                    <th><i class="fa fa-trophy" aria-hidden="true"></i> Added Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr class="winner__table">
                    <td>2023-08-10</td>
                    <td>Online Banking</td>
                    <td>Sakib1</td>s 
                    <td>Pending</td>
                    <td>1,000.00 BDT</td>
                </tr>
            </tbody>
            <tfoot>
                 <tr>
                    <th colspan="4">Total</th>
                     <th style="align:left">1,000.00 BDT </th>
                 </tr>
            </tfoot>
        </table>
    </div>
         </div>
    </div>
</div>
@endsection
