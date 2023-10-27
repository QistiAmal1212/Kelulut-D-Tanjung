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

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Blank Page | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .sidebar-link,
        a.sidebar-link {
            background: #6d4121;
        }

        .sidebar-link,
        a.sidebar-link:hover {
            background: #ab6e43;
        }


        .breadcrumb {
            list-style: none;
            overflow: hidden;
            font: 18px Helvetica, Arial, Sans-Serif;
            margin: 40px;
            padding: 0;
        }

        .breadcrumb li {
            float: left;
        }

        .breadcrumb li a {
            color: white;
            text-decoration: none;
            padding: 10px 0 10px 55px;
            background: brown;
            /* fallback color */
            background: hsla(34, 85%, 35%, 1);
            position: relative;
            display: block;
            float: left;
        }

        .breadcrumb li a:after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            /* Go big on the size, and let overflow hide */
            border-bottom: 50px solid transparent;
            border-left: 30px solid hsla(34, 85%, 35%, 1);
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }

        .breadcrumb li a:before {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            /* Go big on the size, and let overflow hide */
            border-bottom: 50px solid transparent;
            border-left: 30px solid white;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            margin-left: 1px;
            left: 100%;
            z-index: 1;
        }

        .breadcrumb li:first-child a {
            padding-left: 10px;
        }

        .breadcrumb li:nth-child(2) a {
            background: hsla(34, 85%, 45%, 1);
        }

        .breadcrumb li:nth-child(2) a:after {
            border-left-color: hsla(34, 85%, 45%, 1);
        }

        .breadcrumb li:nth-child(3) a {
            background: hsla(34, 85%, 55%, 1);
        }

        .breadcrumb li:nth-child(3) a:after {
            border-left-color: hsla(34, 85%, 55%, 1);
        }

        .breadcrumb li:nth-child(4) a {
            background: hsla(34, 85%, 65%, 1);
        }

        .breadcrumb li:nth-child(4) a:after {
            border-left-color: hsla(34, 85%, 65%, 1);
        }

        .breadcrumb li:nth-child(5) a {
            background: hsla(34, 85%, 75%, 1);
        }

        .breadcrumb li:nth-child(5) a:after {
            border-left-color: hsla(34, 85%, 75%, 1);
        }


        .breadcrumb li a:hover {
            background: hsla(34, 85%, 25%, 1);
        }

        .breadcrumb li a:hover:after {
            border-left-color: hsla(34, 85%, 25%, 1) !important;
        }


        .breadcrumb li a {
            color: white;
            text-decoration: none;
            padding: 4px 0 4px 45px;
            background: brown;
            background: hsla(34, 85%, 35%, 1);
            position: relative;
            display: block;
            float: left;
        }


        .button {

            --main-focus: #2d8cf0;
            --font-color: #323232;
            --bg-color-sub: #dedede;
            --bg-color: #eee;
            --main-color: #323232;
            position: relative;
            width: 150px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);

            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #34974d;
            background-color: #3aa856;
        }

        .button,
        .button__icon,
        .button__text {
            transition: all 0.3s;
        }

        .button .button__text {
            transform: translateX(30px);
            color: #fff;
            font-weight: 600;
        }

        .button .button__icon {
            position: absolute;
            transform: translateX(109px);
            height: 100%;
            width: 39px;
            background-color: #34974d;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button .svg {
            width: 30px;
            stroke: #fff;
        }

        .button:hover {
            background: #34974d;
        }

        .button:hover .button__text {
            color: transparent;
        }

        .button:hover .button__icon {
            width: 148px;
            transform: translateX(0);
        }

        .button:active .button__icon {
            background-color: #2e8644;
        }

        .button:active {
            border: 1px solid #2e8644;
        }












        .buttond {

            background-color: #e50000;
            overflow: hidden;
            --main-focus: #2d8cf0;
            --font-color: #323232;
            --bg-color-sub: #dedede;
            --bg-color: #eee;
            --main-color: #323232;
            position: relative;
            width: 150px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);

            border-radius: 10px;
            overflow: hidden;
        }

        .buttond,
        .button__icon,
        .button__text {
            transition: all 0.3s;
        }

        .buttond .button__text {
            transform: translateX(35px);
            color: #fff;
            font-weight: 600;
        }

        .buttond .button__icon {
            position: absolute;
            transform: translateX(109px);
            height: 100%;
            width: 39px;
            background-color: #cc0000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .buttond .svg {
            width: 20px;
        }

        .buttond:hover {
            background: #cc0000;
        }

        .buttond:hover .button__text {
            color: transparent;
        }

        .buttond:hover .button__icon {
            width: 148px;
            transform: translateX(0);
        }

        .buttond:active .button__icon {
            background-color: #b20000;
        }

        .buttond:active {
            border: 1px solid #b20000;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{ route('dashboard') }}">
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


            <main class="content" style="position:relative;top:-20px;">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3" style="float:left;position:relative;top:-40px;">VIRTUAL NEST<img src="bees2.png" style="width:30px; height:30px;margin-right:10px;" /> </h1>
                    <ul class="breadcrumb" style="position:relative;top:-40px;">
                        <li><a href="#">Putih</a></li>
                        <li><a href="#">Itama</a></li>

                        </li>
                    </ul>



                    <div class="callout-warning">kfjbg4ke</div>


                    <span style="margin-left: 90%;display:flex;position:relative;top:-30px;"><img src="view1.png" style="margin-right:10px;height:50px;width:50px;" alt="error" /><img src="view2.png" style="margin-right:10px;height:44px;width:44px;" alt="error" /></span>

                    <div class="row" style="position:relative;top:-30px;">
                        <div class="col-12">
                            <div class="card">

                                <div style="display:flex;margin-left:20px;margin-top:20px;">
                                    <button type="button" class="button" style="margin-right:20px;">
                                        <span class="button__text">Add Item</span>
                                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg">
                                                <line y2="19" y1="5" x2="12" x1="12"></line>
                                                <line y2="12" y1="12" x2="19" x1="5"></line>
                                            </svg></span>
                                    </button>



                                    <button class="buttond" type="button">
                                        <span class="button__text">Delete</span>
                                        <span class="button__icon"><svg class="svg" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                                <title></title>
                                                <path d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <line style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" x1="80" x2="432" y1="112" y2="112"></line>
                                                <path d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="256" x2="256" y1="176" y2="400"></line>
                                                <line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="184" x2="192" y1="176" y2="400"></line>
                                                <line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="328" x2="320" y1="176" y2="400"></line>
                                            </svg></span>
                                    </button></div>





                                <div class="card-body">
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

</body>

</html>
