@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-2">
            <div class="row">
                <div class="col-md-12 box-col-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card profit-card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="square-after f-w-600 header-text-primary">
                                                Total Sale
                                                <i class="fa fa-circle"></i>
                                            </p>
                                            <h4>د.إ8,55,462 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="profit-wrapper header-text-primary icon-bg-primary">
                                                <i class="fa fa-arrow-up"></i>
                                            </div>
                                            <h6 class="header-text-primary">79.21%</h6>
                                            <p class="mb-0">More Than last month</p>
                                        </div>
                                    </div>
                                    <div class="right-side icon-right-primary">
                                        <i class="fa fa-usd"></i>
                                        <div class="shap-block">
                                            <div class="rounded-shap animate-bg-primary">
                                                <i></i>
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card visitor-card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="square-after f-w-600 header-text-info">
                                                Total Revenue
                                                <i class="fa fa-circle"></i>
                                            </p>
                                            <h4>د.إ8,55,462 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="profit-wrapper header-text-info icon-bg-info">
                                                <i class="fa fa-arrow-up"></i>
                                            </div>
                                            <h6 class="header-text-info">86.94%</h6>
                                            <p class="mb-0">More Than last month</p>
                                        </div>
                                    </div>
                                    <div class="right-side icon-right-info">
                                        <i class="fa fa-usd"></i>

                                        <div class="shap-block">
                                            <div class="rounded-shap animate-bg-primary">
                                                <i></i>
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card sell-card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="square-after f-w-600 header-text-success">
                                                Total Purchase
                                                <i class="fa fa-circle"></i>
                                            </p>
                                            <h4>د.إ8,55,462 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="profit-wrapper header-text-success icon-bg-success">
                                                <i class="fa fa-arrow-up"></i>
                                            </div>
                                            <h6 class="header-text-success">94.40%</h6>
                                            <p class="mb-0">Look Pretty Good</p>
                                        </div>
                                    </div>
                                    <div class="right-side icon-right-success">
                                        <i class="fa fa-shopping-basket"></i>
                                        <div class="shap-block">
                                            <div class="rounded-shap animate-bg-secondary">
                                                <i></i>
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card sell-card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="square-after f-w-600 header-text-success">
                                                Total Customers
                                                <i class="fa fa-circle"></i>
                                            </p>
                                            <h4>10</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="profit-wrapper header-text-success icon-bg-success">
                                                <i class="fa fa-arrow-up"></i>
                                            </div>
                                            <h6 class="header-text-success">94.40%</h6>
                                            <p class="mb-0">Look Pretty Good</p>
                                        </div>
                                    </div>
                                    <div class="right-side icon-right-success">
                                        <i class="fa fa-user"></i>
                                        <div class="shap-block">
                                            <div class="rounded-shap animate-bg-secondary">
                                                <i></i>
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>





            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 box-col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4> Stock Analysis</h4>
                            </div>
                            <div class="card-body">
                                <div id="stock-analysis"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 box-col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Top Fuel Usage</h4>
                            </div>
                            <div class="card-body">
                                <div id="top-fuel-usage"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 box-col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Transaction history </h4>
                            </div>
                            <div class="card-body">
                                <div id="transaction-history"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6 box-col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Daily Wise Transaction </h4>
                            </div>
                            <div class="card-body">
                                <div id="radarchart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 box-col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Expense </h4>
                            </div>
                            <div class="card-body">
                                <div id="expense-chart"></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-xl-6 box-col-6">
                        <div class="card" style="height: 475px;">
                            <div class="card-header pb-0">
                                <h4>Accounts Transaction</h4>
                            </div>
                            <div class="card-body apex-chart">
                                <div id="accounts_transactions"></div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>

        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('code/js/dashboard.js') }}"></script>
@endsection
