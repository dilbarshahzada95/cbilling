<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('creation_billing.png') }}" type="image/png" />
    <!--plugins-->
    {{-- <link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/header-colors.css') }}" /> --}}



    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/prism.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <link href="{{asset('select2/css/style.css')}}" rel="stylesheet" /> --}}


    <title>@yield('title')</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">

                <img src="{{ asset('creation_billing.png') }}" class="logo-icon" alt="logo" style="width: 183px;
                    height: 68px;">


                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">


                <li class="menu-label">MODULE</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title">Sale</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('admin/sale') }}"><i class="bx bx-right-arrow-alt"></i>Add Sale</a>
                        </li>
                        <li> <a href="{{ url('/admin/sale/manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                                Sale</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Quotation
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-list-ol'></i>
                        </div>
                        <div class="menu-title">Customer</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/customer') }}"><i class="bx bx-right-arrow-alt"></i>Add
                                Customer</a>
                        </li>
                        <li> <a href="{{ url('/admin/customer/manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                                Customer</a>
                        </li>
                        <li> <a href="{{ url('/admin/customer/add/vehicle') }}"><i class="bx bx-right-arrow-alt"></i>Add Vehicle
                                Customer</a>
                        </li>
                        <li> <a href="{{ url('/admin/customer/manage/vehicle') }}"><i class="bx bx-right-arrow-alt"></i>Manage Vehicle
                                Customer</a>
                        </li>

                        <li> <a href="{{ url('/admin/customer/price/changing') }}"><i class="bx bx-right-arrow-alt"></i>Price
                                Changing</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-dollar-circle'></i>
                        </div>
                        <div class="menu-title">Payment</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/payment/customer') }}"><i class="bx bx-right-arrow-alt"></i>Customer Payment</a>
                        </li>
                        <li> <a href="{{ url('/admin/payment/supplier') }}"><i class="bx bx-right-arrow-alt"></i>Supplier Payment</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-purchase-tag'></i>
                        </div>
                        <div class="menu-title">Purchase</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Purchase</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Manage
                                Purchase</a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-receipt'></i>
                        </div>
                        <div class="menu-title">Tax</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Generate Tax</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Manage
                                Tax</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-notepad'></i>
                        </div>
                        <div class="menu-title">Accounts</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/accounts') }}"><i class="bx bx-right-arrow-alt"></i>Accounts
                                Group</a>
                        </li>
                        <li> <a href="{{ url('/admin/balance/adustment') }}"><i class="bx bx-right-arrow-alt"></i>Balance Adjustment</a>
                        </li>
                        <li> <a href="{{ url('/admin/balance/transfer') }}"><i class="bx bx-right-arrow-alt"></i>Balance Transfer</a>
                        </li>
                        <li> <a href="{{ url('/admin/accounts/transaction/history') }}"><i class="bx bx-right-arrow-alt"></i>Transaction History</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-group'></i>
                        </div>
                        <div class="menu-title">Supplier</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/supplier') }}"><i class="bx bx-right-arrow-alt"></i>Add
                                Supplier</a>
                        </li>
                        <li> <a href="{{ url('/admin/supplier/manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                                Supplier</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-coin'></i>
                        </div>
                        <div class="menu-title">Tank</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/tank') }}"><i class="bx bx-right-arrow-alt"></i>Manage Tank</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-gas-pump'></i>
                        </div>
                        <div class="menu-title">Pump</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Pump</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Manage
                                Pump</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-task'></i>
                        </div>
                        <div class="menu-title">Expense</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/expense') }}"><i class="bx bx-right-arrow-alt"></i>Add
                                Expense</a>
                        </li>
                        <li> <a href="{{ url('/admin/expense/manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                                Expense</a>
                        </li>
                        <li> <a href="{{ url('/admin/expense/category') }}"><i class="bx bx-right-arrow-alt"></i>Expense Category</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-chart'></i>
                        </div>
                        <div class="menu-title">Reports</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Transaction
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Purchase
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Expense
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Payment
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Stock
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Tax
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Due
                                Payement Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Payment
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Ledger Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Balance Sheet
                                Reports</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Profit and Loss
                                Reports</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-user'></i>
                        </div>
                        <div class="menu-title">Employees</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/admin/employee') }}"><i class="bx bx-right-arrow-alt"></i>Add
                                Employees</a>
                        </li>
                        <li> <a href="{{ url('/admin/employee/manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Employees</a>
                        </li>
                        <li> <a href="{{ url('/admin/employee/department') }}"><i class="bx bx-right-arrow-alt"></i>Department</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-user'></i>
                        </div>
                        <div class="menu-title">Authenthication</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add
                                Authenthication</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Manage
                                Authenthication</a>
                        </li>


                    </ul>
                </li>


            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar  d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>

                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">


                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                            ago</span></h6>
                                                    <p class="msg-info">5 new user registered</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">8</span>
                                    <i class='bx bx-comment'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Messages</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Messages</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('admin/assets/images/avatars/avatar-1.png') }}" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Dilbarshahzada kk</p>
                                <p class="designattion mb-0">Web Developer</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Change password</span></a>
                            </li>

                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © Creationfms. All rights reserved..</p>
        </footer>
    </div>

    <script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('admin/assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard/dashboard_2.js') }}"></script>
    <!-- Template js-->
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme-customizer/customizer.js') }}"></script>


    {{-- <!--start switcher-->
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('admin/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('select2/select2/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();



        });
    </script> --}}
    @yield('scripts')


</body>


</html>