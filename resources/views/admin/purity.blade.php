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

    <style type="text/css">
        .sub-filter .subfilter-drop {
            left: 100% !important;
        }

        .sub-group .subgroup-drop {
            left: 100% !important;
        }

        .sub-favorite .subfavorite-drop {
            left: 100% !important;
        }
    </style>

</head>

<body>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Batch</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('createlot') }}">Batch</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('createlot') }}">Batch</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal">Create Lots</a></li>
                <li class="stockli nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configuration
                    </a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('shape') }}">Shape</a></li>
                        <li><a class="dropdown-item" href="{{ url('lotprocess') }}">Lot Process</a></li>
                        <li><a class="dropdown-item" href="{{ url('processreson') }}">Process & Reason</a></li>
                        <li><a class="dropdown-item" href="{{ url('finishtype') }}">Finish Type</a></li>
                        <li><a class="dropdown-item" href="{{ url('color') }}">Color</a></li>
                        <li><a class="dropdown-item" href="{{ url('purity') }}">Purity</a></li>
                    </ul>
                </li>
            </ul>

            <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addpacketsModalLabel">Create Lot</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Batch</label></div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Print</label></div>
                                                    <div class="col col-md-6">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked>Lot
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Packet
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Both
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{URL:: asset('admin/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label"></label></div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#. Name</th>
                                                                                <th scope="col">Height(Micro)</th>
                                                                                <th scope="col">Length(MM)..</th>
                                                                                <th scope="col">Width(MM)</th>
                                                                                <th scope="col">Shape</th>
                                                                                <th scope="col">Pcs</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Create</button>


                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Purity </h4>
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
                       <button type="button" class="btn btn-outline-secondary mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal1">Create</button>
                        <div class="modal fade" id="addpacketsModal1" tabindex="-1" aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="addpacketsModalLabel">Add Packets</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{ url('insertpurity') }}" method="post" enctype="multipart/form-data" >
                                         {{ csrf_field() }}
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="card-body card-block">
                                                     {{-- <form class="form-horizontal"> --}}
         
                                                         <div class="row form-group">
                                                             <div class="col col-md-3"><label for="email-input" class=" form-control-label">Name</label></div>
                                                             <div class="col-12 col-md-9"><input type="text" id="email-input" name="name" required placeholder="Name.." class="form-control"></div>
                                                         </div>
                                                     {{-- </form> --}}
                                                 </div>
                                             </div>
                                         </div>
                                        
                                         <div class="modal-footer float-left">
                                             <button type="submit" class="btn btn-secondary ajaxSubmit"  >Create</button>
                                             <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                         </div>
                                     </form>
                                 </div>
         
                             </div>
                         </div>
                         </div>
                    </div>
                    <div class="col-md-7">
                        <li class="stockli nav-item dropdown filter">

                            <a href="#" class="nav-link filter-btn">
                                <button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-filter"></i> Filter</button></a>
                            <ul class="dropdown-menu filter-sub" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Confirmed Batch</a></li>
                                <li class="stockli dropdown-submenu sub-filter">
                                    <div class="btn-group dropright">

                                        <a type="button" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Add Custom Filter
                                        </a>
                                        <div class="dropdown-menu subfilter-drop">
                                            <!-- Dropdown menu links -->
                                            <ul class="filterul">
                                                <li class="filterli">
                                                    <a tabindex="-1" href="#">
                                                        <div class="row form-group">
                                                            <div class="col-md-12 ">
                                                                <select class="custom-select d-block w-100" required="">
                                                                  <option value="">Action Needed....</option>
                                                                  <option>SQ</option>
                                                                  <option>Option #2</option>
                                                                  <option>Option #3</option></select>
                                                            </div>
                                          
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="filterli">
                                                    <a tabindex="-1" href="#">
                                                        <div class="row form-group">
                                                            <div class="col-12 col-md-12">
                                                                <select class="custom-select d-block w-100" required="">
                                                        <option>Is true</option>
                                                        <option>SQ</option>
                                                        <option>Option #2</option>
                                                        <option>Option #3</option>
                                                    </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="filterli">
                                                    <a tabindex="-1" href="#">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Apply</button>
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Add a condition</button>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="stockli nav-item dropdown group">
                            <a href="#" class="nav-link group-btn">
                                <button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-keyboard"></i> Group By</button></a>
                            <ul class="dropdown-menu group-sub" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">State</a></li>
                                <li class="stockli dropdown-submenu sub-group">
                                    <div class="btn-group dropright">

                                        <a type="button" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Start Date
                                        </a>
                                        <div class="dropdown-menu subgroup-drop">
                                            <!-- Dropdown menu links -->
                                            <ul class="groupul">
                                                <li class="groupli">Year</li>
                                                <li class="groupli">Quarter</li>
                                                <li class="groupli">Month</li>
                                                <li class="groupli">Week</li>
                                                <li class="groupli">Day</li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="stockli dropdown-submenu sub-group">
                                    <div class="btn-group dropright">

                                        <a type="button" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        End Date
                                        </a>
                                        <div class="dropdown-menu subgroup-drop">
                                            <!-- Dropdown menu links -->
                                            <ul class="groupul">
                                                <li class="groupli">Year</li>
                                                <li class="groupli">Quarter</li>
                                                <li class="groupli">Month</li>
                                                <li class="groupli">Week</li>
                                                <li class="groupli">Day</li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="stockli dropdown-submenu sub-group">
                                    <div class="btn-group dropright">
                                        <a type="button" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Add Custom Filter
                                            </a>
                                        <div class="dropdown-menu subgroup-drop">
                                            <!-- Dropdown menu links -->
                                            <ul class="groupul">
                                                <li class="groupli">
                                                    <a tabindex="-1" href="#">
                                                        <div class="row form-group">
                                                            <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <option value="0">Action Needed....</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="groupli">
                                                    <a tabindex="-1" href="#">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Apply</button>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="stockli nav-item dropdown favorite">
                            <a href="#" class="nav-link favorite-btn">
                                <button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-star"></i> Favorites</button></a>
                            <ul class="dropdown-menu favorite-sub" aria-labelledby="navbarDropdown">
                                <li class="stockli dropdown-submenu sub-favorite">
                                    <div class="btn-group dropright">

                                        <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Save current Search
                                        </a>
                                        <div class="dropdown-menu subfavorite-drop">
                                            <!-- Dropdown menu links -->
                                            <ul class="favoriteul">
                                                <li class="favoriteli">
                                                    <a tabindex="-1" href="#">
                                                        <div class="row form-group">
                                                            <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                <option value="0">Action Needed....</option>
                                                                <option value="1">SQ</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="favoriteli">
                                                    <a tabindex="-1" href="#">
                                                        <div class="form-check">
                                                            <div class="checkbox">
                                                                <label for="checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Use By Default
                                                        </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Share with all users
                                                        </label>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="favoriteli">
                                                    <a tabindex="-1" href="#">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">save</button>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="dropdown-item" href="#">Import Records</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th> Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $purity = App\Models\purity::get(); ?>
@foreach($purity as $ans)
                                        <tr>
                                           <td>{{ $loop->iteration }}</td>
                                             <td> 
                                              {{-- <input class="togglefunction" type="checkbox">  --}}
                                                <label class="form-check-label toggle_status" > {{ $ans->name }} </label>
                                            </td> 
<td> <button type="submit" class="btn btn-outline-secondary mt-1"><a href="purityremove/{{ $ans->id}}"> Remove </a></button></td>
                                          
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



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

        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>

        <script>
            jQuery(document).ready(function() {
                jQuery('.filter .filter-btn').on("click", function(e) {
                    jQuery('.filter-sub').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('.group .group-btn').on("click", function(e) {
                    jQuery('.group-sub').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('.favorite .favorite-btn').on("click", function(e) {
                    jQuery('.favorite-sub').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>

</body>

</html>
