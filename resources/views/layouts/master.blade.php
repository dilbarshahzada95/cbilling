<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="{{ asset('creation_billing.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('creation_billing.png') }}" type="image/x-icon" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/font-awesome.css') }}" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/icofont.css') }}" />
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/themify.css') }}" />
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/flag-icon.css') }}" />
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/feather-icon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/date-picker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/owlcarousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/prism.css') }}" />
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css') }}" />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}" />
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/datatables.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>

    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">

                <div class="header-logo-wrapper col-auto p-0">
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                    </div>
                    <div class="logo-header-main">
                        <a href="#">
                            <img class="img-fluid_changes for-light img-100" src="{{ asset('creation_billing.png') }}"
                                alt="" />
                            <img class="img-fluid_changes for-dark" src="{{ asset('creation_billing.png') }}"
                                alt="" />
                        </a>
                    </div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <div class="left-menu-header">
                        <ul class="app-list">
                            <li class="onhover-dropdown">
                                <div class="app-menu"><i data-feather="folder-plus"></i></div>
                                <ul class="onhover-show-div left-dropdown">
                                    <li><a href="file-manager.html">File Manager</a></li>
                                    <li><a href="kanban.html">Kanban board</a></li>
                                    <li><a href="social-app.html">Social App</a></li>
                                    <li><a href="bookmark.html">Bookmark</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="header-left">
                            <li class="onhover-dropdown">
                                <span class="f-w-600">Module</span>
                                <span>
                                    <i class="middle" data-feather="chevron-down"></i>
                                </span>
                                <ul class="onhover-show-div left-dropdown">
                                    <li><a href="#">Sale</a></li>
                                    <li><a href="#">Purchase</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">

                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">

                                        <div class="flex-grow-1">
                                            <p>
                                                <a href="order-history.html">ffff</a>
                                                <span class="pull-right">fff</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">
                                        Check all notification
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="maximize">
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i data-feather="maximize-2"></i>
                            </a>
                        </li>
                        <li class="profile-nav onhover-dropdown">
                            <div class="account-user"><i data-feather="user"></i></div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="user-profile.html">
                                        <i data-feather="user"></i>
                                        <span>Account</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="edit-profile.html">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i data-feather="log-in"></i>
                                        <span>Log in</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                </div>

            </div>
        </div>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper">
                        <a href="{{ url('/admin/dashboard') }}">
                            <img class="img-fluid_changes for-light" src="{{ asset('creation_billing.png') }}"
                                alt="" />
                        </a>
                        <div class="back-btn"><i data-feather="grid"></i></div>
                        <div class="toggle-sidebar icon-box-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{ url('/admin/dashboard') }}">
                            <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end">
                                        <span>Back</span>
                                        <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="menu-box">
                                    <ul>

                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="shopping-cart"></i>
                                                <span>Sale</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="{{ url('admin/sale') }}">Add Sale</a></li>
                                                <li><a href="{{ url('/admin/sale/manage') }}">Manage Sale</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="users"></i>
                                                <span>Customer</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="{{ url('/admin/customer') }}">Customers</a></li>
                                                <li><a href="{{ url('/admin/customer/manage') }}">Manage Customers</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/customer/add/vehicle') }}"></i>Add
                                                        Vehicle</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/customer/manage/vehicle') }}"></i>Manage
                                                        Vehicle</a>
                                                </li>

                                                <li> <a href="{{ url('/admin/customer/price/changing') }}"></i>Price
                                                        Changing</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/customer/wise/tag') }}"></i>Manage
                                                        Tag</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="dollar-sign"></i>
                                                <span>Payment</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/payment/customer') }}"></i>Customer
                                                        Payment</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/payment/supplier') }}"></i>Supplier
                                                        Payment</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="shopping-bag"></i>
                                                <span>Purchase</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/purchase') }}"></i>Add Purchase</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/purchase/manage') }}"></i>Manage
                                                        Purchase</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="plus-square"></i>
                                                <span>Tax</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/tax/invoice') }}"></i> Tax
                                                        Invoice</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/tax/invoice/manage') }}"></i>Manage
                                                        Tax</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="layout"></i>
                                                <span>Accounts</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/accounts') }}"></i>Accounts
                                                        Group</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/balance/adustment') }}"></i>Balance
                                                        Adjustment</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/balance/transfer') }}"></i>Balance
                                                        Transfer</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/accounts/transaction/history') }}"></i>Transaction
                                                        History</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="users"></i>
                                                <span>Supplier</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/supplier') }}"><i
                                                            class="bx bx-right-arrow-alt"></i>Add
                                                        Supplier</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/supplier/manage') }}"><i
                                                            class="bx bx-right-arrow-alt"></i>Manage
                                                        Supplier</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="database"></i>
                                                <span>Tank</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/tank') }}"></i>Manage Tank</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="database"></i>
                                                <span>Pump</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="#"></i>Add Pump</a>
                                                </li>
                                                <li> <a href="#"></i>Manage
                                                        Pump</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="edit"></i>
                                                <span>Expense</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/expense') }}"><i
                                                            class="bx bx-right-arrow-alt"></i>Add
                                                        Expense</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/expense/manage') }}"><i
                                                            class="bx bx-right-arrow-alt"></i>Manage
                                                        Expense</a>
                                                </li>
                                                <li> <a href="{{ url('/admin/expense/category') }}"><i
                                                            class="bx bx-right-arrow-alt"></i>Expense Category</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                <i data-feather="bar-chart-2"></i>
                                                <span>Reports</span>
                                            </a>
                                            <ul class="sidebar-submenu">
                                                <li> <a href="{{ url('/admin/reports/transaction') }}"></i>Transaction
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/profit/loss') }}"></i>Profit and
                                                        Loss
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/balance/sheet') }}"></i>Balance
                                                        Sheet
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/expense') }}"></i>Expense
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/stock') }}"></i>Stock
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/ledger') }}"></i>Ledger
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/cash/flow') }}"></i>Cash Flow
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/payment') }}"></i>Payment
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/discount') }}"></i>Discount
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/tax') }}"></i>Tax
                                                    </a>
                                                </li>
                                                <li> <a href="{{ url('/admin/reports/purchase') }}"></i>Purchase
                                                    </a>
                                                </li>

                                                <li> <a href="{{ url('/admin/reports/due/payment') }}"></i>Due
                                                        Payement </a>
                                                </li>




                                            </ul>
                                        </li>
                                        <li class="menu-box">
                                            <ul>
                                                <li class="sidebar-list">
                                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                        <i data-feather="user-plus"></i>
                                                        <span>Employees</span>
                                                    </a>
                                                    <ul class="sidebar-submenu">
                                                        <li> <a href="{{ url('/admin/employee') }}"></i>Add
                                                                Employees</a>
                                                        </li>
                                                        <li> <a href="{{ url('/admin/employee/manage') }}"></i>Manage
                                                                Employees</a>
                                                        </li>
                                                        <li> <a
                                                                href="{{ url('/admin/employee/department') }}"></i>Department</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="menu-box">
                                            <ul>
                                                <li class="sidebar-list">
                                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                        <i data-feather="box"></i>
                                                        <span>Authenthication</span>
                                                    </a>
                                                    <ul class="sidebar-submenu">
                                                        <li> <a href="#"></i>Add
                                                                Authenthication</a>
                                                        </li>
                                                        <li> <a href="#"></i>Manage
                                                                Authenthication</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            @yield('content')
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-left">
                            <p class="mb-0">Copyright © Creationfms. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 p-0 footer-right">
                            <p class="mb-0">
                                Design &amp; Developed by
                                <i class="fa fa-heart font-danger"></i>
                                <a href="https://creationfms.com">Creationfms</a>

                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
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
    <!-- login js-->

    <script src="{{ asset('admin/assets/js/chart/apex-chart/moment.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/counter-custom.js') }}"></script>

    <script src="{{ asset('admin/assets/js/chart-widget.js') }}"></script>


    <script src="{{ asset('admin/assets/js/chart/apex-chart/chart-custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    @yield('scripts')

</body>

</html>
