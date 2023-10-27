<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Kelulut D'Tanjung</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <style>
        .sidebar-link,
        a.sidebar-link {
            background: #6d4121;
        }

        .sidebar-link,
        a.sidebar-link:hover {
            background: #ab6e43;
        }

    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <img src="logo.png" style="width:55px; height:58px;" /><span class="align-middle" style="font-size:15px;">Kelulut
                        D'Tanjung</span>
                </a>
                <hr style="color:white;margin:0px;padding: 3px;    background-color:white;">
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('VirtualNest') }}">
                            <img src="bees2.png" style="width:20px; height:20px;" />
                            <span class="align-middle" style="margin-left:9px;">Virtual Nest</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{ route('dashboard') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Transaction') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                            </svg>

                            <span class="align-middle">Transaction</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Expenses') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                            </svg>

                            <span class="align-middle" style="margin-left:1px;">Expenses</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Invoices') }}">
                            <i class="align-middle" data-feather="file"></i> <span class="align-middle">Invoices</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Receipts') }}">
                            <i class="align-middle" data-feather="file"></i> <span class="align-middle">Receipts</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('History') }}">
                            <i class="align-middle" data-feather="clock"></i> <span class="align-middle">History</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('profile.edit') }}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>



                    <li class="sidebar-header">
                        Bussiness Report
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Sales') }}">
                            <i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">Sales</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Financial') }}">
                            <i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">Financial</span>
                        </a>
                    </li>


                </ul>

                <form id="logout" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
                <div class="sidebar-cta-content">

                    <div class="d-grid">


                        <a href="#" class="btn btn-primary" onclick="event.preventDefault();
                                                document.getElementById('logout').submit();">Logout</a>



                    </div>
                </div>
            </div>

        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div style="max-height:400px;    overflow-y: auto;" class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    1 New Notifications
                                </div>
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">QISTI AMAL</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

                    <div class="row">
                        <div class="col-xl-6 col-xxl-5 d-flex">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Sales</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="truck"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">RM160.80</h1>
                                                <div class="mb-0">
                                                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                                    <span class="text-muted">Since last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Net profit</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">RM60.30</h1>
                                                <div class="mb-0">
                                                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                                    <span class="text-muted">Since last month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Expenses</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">RM100.50</h1>
                                                <div class="mb-0">
                                                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                                    <span class="text-muted">Since last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Orders</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">64</h1>
                                                <div class="mb-0">
                                                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                                                    <span class="text-muted">Since last month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-xxl-7">
                            <div class="card flex-fill w-100">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Recent Movement</h5>
                                </div>
                                <div class="card-body py-3">
                                    <div class="chart chart-sm">
                                        <canvas id="chartjs-dashboard-line"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Order details</h5>
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="d-none d-xl-table-cell"> Date</th>
                                            <th class="d-none d-xl-table-cell">Expiry Date</th>
                                            <th class="d-none d-xl-table-cell">Madu</th>
                                            <th>Status</th>
                                            <th class="d-none d-md-table-cell">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MUHAMMAD ALI BIN ABU</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">A</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td class="d-none d-md-table-cell">bayaran secara cash</td>
                                        </tr>
                                        <tr>
                                            <td>AHMAD ALIFF BIN MOHD ZURKARNAIN</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">B</td>
                                            <td><span class="badge bg-warning">Unpaid</span></td>
                                            <td class="d-none d-md-table-cell">bayaran secara cash</td>
                                        </tr>
                                        <tr>
                                            <td>MUHAMMAD ALI BIN ABU</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">A</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td class="d-none d-md-table-cell">bayaran secara cash</td>
                                        </tr>
                                        <tr>
                                            <td>MUHAMMAD ALI BIN ABU</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">A</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td class="d-none d-md-table-cell">bayaran secara cash</td>
                                        </tr>
                                        <tr>
                                            <td>MUHAMMAD ALI BIN ABU</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">A</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td class="d-none d-md-table-cell">bayaran secara cash</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Monthly Sales</h5>
                                </div>
                                <div class="card-body d-flex w-100">
                                    <div class="align-self-center chart chart-lg">
                                        <canvas id="chartjs-dashboard-bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Kelulut
                                        D'Tanjung</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            {{-- <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line"
                , data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                    , datasets: [{
                        label: "Sales ($)"
                        , fill: true
                        , backgroundColor: gradient
                        , borderColor: "#faac09"
                        , data: [
                            2115
                            , 1562
                            , 1584
                            , 1892
                            , 1587
                            , 1923
                            , 2566
                            , 2448
                            , 2805
                            , 3438
                            , 2917
                            , 3327
                        ]
                    }]
                }
                , options: {
                    maintainAspectRatio: false
                    , legend: {
                        display: false
                    }
                    , tooltips: {
                        intersect: false
                    }
                    , hover: {
                        intersect: true
                    }
                    , plugins: {
                        filler: {
                            propagate: false
                        }
                    }
                    , scales: {
                        xAxes: [{
                            reverse: true
                            , gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                        , yAxes: [{
                            ticks: {
                                stepSize: 1000
                            }
                            , display: true
                            , borderDash: [3, 3]
                            , gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie"
                , data: {
                    labels: ["Chrome", "Firefox", "IE"]
                    , datasets: [{
                        data: [4306, 3801, 1689]
                        , backgroundColor: [
                            window.theme.primary
                            , window.theme.warning
                            , window.theme.danger
                        ]
                        , borderWidth: 5
                    }]
                }
                , options: {
                    responsive: !window.MSInputMethodContext
                    , maintainAspectRatio: false
                    , legend: {
                        display: false
                    }
                    , cutoutPercentage: 75
                }
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar"
                , data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                    , datasets: [{
                        label: "This year"
                        , backgroundColor: "#faac09"
                        , borderColor: "#faac09"
                        , hoverBackgroundColor: window.theme.primary
                        , hoverBorderColor: window.theme.primary
                        , data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
                        , barPercentage: .75
                        , categoryPercentage: .5
                    }]
                }
                , options: {
                    maintainAspectRatio: false
                    , legend: {
                        display: false
                    }
                    , scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            }
                            , stacked: false
                            , ticks: {
                                stepSize: 20
                            }
                        }]
                        , xAxes: [{
                            stacked: false
                            , gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var markers = [{
                    coords: [31.230391, 121.473701]
                    , name: "Shanghai"
                }
                , {
                    coords: [28.704060, 77.102493]
                    , name: "Delhi"
                }
                , {
                    coords: [6.524379, 3.379206]
                    , name: "Lagos"
                }
                , {
                    coords: [35.689487, 139.691711]
                    , name: "Tokyo"
                }
                , {
                    coords: [23.129110, 113.264381]
                    , name: "Guangzhou"
                }
                , {
                    coords: [40.7127837, -74.0059413]
                    , name: "New York"
                }
                , {
                    coords: [34.052235, -118.243683]
                    , name: "Los Angeles"
                }
                , {
                    coords: [41.878113, -87.629799]
                    , name: "Chicago"
                }
                , {
                    coords: [51.507351, -0.127758]
                    , name: "London"
                }
                , {
                    coords: [40.416775, -3.703790]
                    , name: "Madrid "
                }
            ];
            var map = new jsVectorMap({
                map: "world"
                , selector: "#world_map"
                , zoomButtons: true
                , markers: markers
                , markerStyle: {
                    initial: {
                        r: 9
                        , strokeWidth: 7
                        , stokeOpacity: .4
                        , fill: window.theme.primary
                    }
                    , hover: {
                        fill: window.theme.primary
                        , stroke: window.theme.primary
                    }
                }
                , zoomOnScroll: false
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true
                , prevArrow: "<span title=\"Previous month\">&laquo;</span>"
                , nextArrow: "<span title=\"Next month\">&raquo;</span>"
                , defaultDate: defaultDate
            });
        });

    </script>

</body>

</html>
