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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Machine Management</span></a>
                    {{-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> --}}
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        {{-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> --}}

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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('machinemanagement1') }}">Machine Management</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('machinemanagement1') }}">Dashboard</a></li>
                <li class="stockli mt-2"><a href="{{ url('machine') }}">Machine</a></li>
                <li class="stockli mt-2"><a href="{{ url('machineequipments') }}">Machine Equipments</a></li>
            </ul>
        </div>
        <!-- Header-->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Machine</h4>
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
                        <a href="{{ url('createmachine') }}">
                            <button type="button" class="btn btn-outline-secondary mt-1">Create</button>
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa-solid fa-filter"></i>
                                Filter
                            </button>
                            <div class="dropdown-menu mt-5" aria-labelledby="dropdownMenuButton">
                                <form action="{{ url('search_machine') }}"  method="get">
                                    <div class="search_multiple">
                                        <select class="form__input" id="search" name="datesearch"
                                            onchange="form.submit();">
                                            <option selected disabled>SearchDate..</option>
                                            <option value="today">Today</option>
                                            <option value="yesterday">Yesterday</option>
                                            <option value="last7days">Last 7 Days</option>
                                            <option value="last15days">Last 15 Days</option>
                                            <option value="lastmonth">Lastmonth</option>
                                            <option value="lastyear">Lastyear</option>
                                            <option value="thismonth">ThisMonth</option>
                                        </select>
                                        {{-- <select class="form__input" name="seed" id="search"
                                            onchange="form.submit();">
                                            <option selected disabled>selectName.</option>
                                            @foreach ($data as $ans)
                                                <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                            @endforeach
                                        </select> --}}

                                        {{-- <input type="submit" class="form__btn" value="Filter" name="search"> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 float-right">
                        {{-- <a href="{{ url('machine') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a> --}}
                        <a href="{{ url('machinelist') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    {{-- <?php $data=App\Models\machine::get();?> --}}
                    @foreach($data as $ans)
                    <div class="col-lg-3">
                        <div class="card">
                            {{-- <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div> --}}
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :{{ $ans->name }}</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Growth Rate :{{ $ans->growthrate }}</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>CB</strong>
                                <strong class="float-right">Rs. 0.00</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col-lg-3">
                                            <i class="fa fa-camera usercamera"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Model :</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-12"><label for="hf-email" class=" form-control-label font_size">Serial No :</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/main.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>

</body>

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:40 GMT -->

</html>
