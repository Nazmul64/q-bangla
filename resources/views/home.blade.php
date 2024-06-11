@extends('layouts.app')


@section('breadcrumb')
 <div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Starter</li>
    </ol>
</div>
  <h4 class="page-title">Starter page</h4>
@endsection
@section('content')
<div class="container-fluid"">
    <div class="row justify-content-center">
        <div clas s="col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard 1</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">SELF GROUP</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{Auth::user()->direct_group }}</span></h3>
                                            <p class="m-0">{{ \Carbon\Carbon::now()->format('Y M S') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">LAVEL GROUP</p>
                                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{ $total_admin }}</span></h3>
                                            <p class="m-0">{{ \Carbon\Carbon::now()->format('Y M S') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">MY INCOME</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{ $total_customer }}</span></h3>
                                            <p class="m-0"{{ \Carbon\Carbon::now()->format('Y M S') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">MY WITHDRAWL</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">2.07</span>%</h3>
                                            <p class="m-0">{{ \Carbon\Carbon::now()->format('Y M S') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
        </div>
    </div>
</div>
@endsection
