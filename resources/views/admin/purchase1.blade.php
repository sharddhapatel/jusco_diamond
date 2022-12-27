<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jusco Lab Grown Diamond</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">
    <link rel="shortcut icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">

    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/normalize.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/chosen/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Purchase</span></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa  fa-comments"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/1.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/2.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/3.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/4.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{URL:: asset('admin/assets/images/admin.jpg')}}" alt="User Avatar">
                            <span class="profilespan">Administrator</span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('purchase1') }}">Purchase</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase1orders') }}">Purchase Orders</a></li>
                        <li><a class="dropdown-item" href="{{ url('purchase1vendors') }}">Vendors</a></li>
                    </ul>
                </li>
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase1products') }}">Products</a></li>
                    </ul>
                </li>
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reporting</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase1purchaseanalysis') }}">Purchase</a></li>
                    </ul>
                </li>
                <li class="stockli nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuration</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase') }}">Setting</a></li>
                        <li><a class="dropdown-item" href="{{ url('vendorpricelists') }}">Vendor Pricelists</a></li>
                        <li class="group-result">Invoicing</li>
                        <li><a class="dropdown-item" href="{{ url('productcategories') }}">Product Categories</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Requests for Quotation</h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4 float-left">
                        <a href="{{ url('createpurchase1') }}">
                            <button type="button" class="btn btn-outline-secondary mt-1">Create</button>
                        </a>
                        <button type="button" class="btn btn-outline-secondary mt-1"> <i class="fa-solid fa-download"></i> </button>
                    </div>
                    <div class="col-md-6">
                        <li class="stockli nav-item dropdown">
                            <a href="#" class="nav-link " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-filter"></i> Filter</button></a>
                            <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Confirmed Batch</a></li>
                                <li class="stockli dropdown-submenu"><a href="#" class="dropdown-toggle" tabindex="-1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Add Custom Filter</a>
                                    <ul class="dropdown-menu" id="submenu" aria-labelledby="navbarDropdown">
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-keyboard"></i> Group By</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-star"></i> Favorites</button></a>
                    </div>
                    <div class="col-md-2 float-right">
                        <a href="{{ url('purchase1list') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a>
                        <a href="{{ url('purchase1') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                        <a href="{{ url('purchase1table') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-table-cells"></i></button></a>
                        <a href="{{ url('purchase1chart') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-chart-column"></i></button></a>
                        <a href="{{ url('purchase1calendar') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-calendar-days"></i></button></a>
                        <a href="{{ url('purchase1activity') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-clock"></i></button></a>

                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <h5 class="float-right mr-3">All RFQs</h5><br>
                                <h5 class="strongrfqs mt-5">My RFQs</h5>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-info">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-center">
                                            <span class="count">0</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">To Send</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-info">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-center">
                                            <span class="count">0</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">Waiting</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-info">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-center">
                                            <span class="count">0</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">Late</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <p>Avg Order Value(Rs.)</p><br>
                                <p class="mt-2">Lead Time to Purchase</p>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-secondary">
                                    <div class="card-body">
                                        <div class="h6 mb-3 text-center">
                                            <span class="count">Rs.6,687.35</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-4">
                                            <span class="count">0 Days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <p>Purchased Last 7 Days(Rs.)</p><br>
                                <p>RFQs sent last 7 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-secondary">
                                    <div class="card-body">
                                        <div class="h6 mb-3 text-center">
                                            <span class="count">Rs.0.00</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-4">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> Reference</th>
                                            <th>Vendor</th>
                                            <th>Purchase Representative</th>
                                            <th>Order Deadline</th>
                                            <th>Next Activity</th>
                                            <th>Source Document</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fa fa-star-o"></i>
                                                 P00003
                                                </label>
                                            </td>
                                            <td>ELEMENTS DIAMODS</td>
                                            <td><button type="button" class="btn btn-info btn-sm">B</button> Administrator</td>
                                            <td></td>
                                            <td style="text-align:center;"><i class="fa-solid fa-clock"></i></td>
                                            <td></td>
                                            <td>Rs.20,050.00</td>
                                            <td><button type="button" class="btn btn-success btn-sm">Locked</button></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fa fa-star-o"></i>
                                                 P00003
                                                </label>
                                            </td>
                                            <td>ELEMENTS DIAMODS</td>
                                            <td><button type="button" class="btn btn-info btn-sm">B</button> Administrator</td>
                                            <td></td>
                                            <td style="text-align:center;"><i class="fa-solid fa-clock"></i></td>
                                            <td></td>
                                            <td>Rs.20.00</td>
                                            <td><button type="button" class="btn btn-success btn-sm">Locked</button></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fa fa-star-o"></i>
                                                 P00003
                                                </label>
                                            </td>
                                            <td>ELEMENTS DIAMODS</td>
                                            <td><button type="button" class="btn btn-info btn-sm">B</button> Administrator</td>
                                            <td></td>
                                            <td style="text-align:center;"><i class="fa-solid fa-clock"></i></td>
                                            <td></td>
                                            <td>Rs.12,050.00</td>
                                            <td><button type="button" class="btn btn-success btn-sm">Locked</button></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fa fa-star-o"></i>
                                                 P00003
                                                </label>
                                            </td>
                                            <td>ELEMENTS DIAMODS</td>
                                            <td><button type="button" class="btn btn-info btn-sm">B</button> Administrator</td>
                                            <td></td>
                                            <td style="text-align:center;"><i class="fa-solid fa-clock"></i></td>
                                            <td></td>
                                            <td>Rs.11.00</td>
                                            <td><button type="button" class="btn btn-success btn-sm">Locked</button></td>
                                        </tr>

                                    </tbody>
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                                <td></td>
                                                <td>Rs.20.620.00</td>
                                                <td></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/init/datatables-init.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}} "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
</body>

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:40 GMT -->

</html>
