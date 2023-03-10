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

    <link rel="apple-touch-icon" href="{{ URL::asset('admin/assets/i.imgur.com/QRAUqs9.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/i.imgur.com/QRAUqs9.png') }}">

    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/pe-icon-7-stroke.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/lib/chosen/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Chocolate</span></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa  fa-comments"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ URL::asset('admin/assets/images/avatar/1.jpg') }}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ URL::asset('admin/assets/images/avatar/2.jpg') }}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ URL::asset('admin/assets/images/avatar/3.jpg') }}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ URL::asset('admin/assets/images/avatar/4.jpg') }}"></span>
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
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle"
                                src="{{ URL::asset('admin/assets/images/admin.jpg') }}" alt="User Avatar">
                            <span class="profilespan">Administrator</span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i
                        class="fa-solid fa-table-columns"></i></a> <a
                    href="{{ url('chocolatedashboard') }}">Chocolate</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('createchocolatedashboard') }}">CreateChocolate</a></li>
                <li class="stockli mt-2"><a href="{{ url('addchocolate') }}">AddChocolate</a></li>
                <li class="stockli mt-2"><a href="{{ url('lots') }}">EndGrowing</a></li>
                {{-- <li class="stockli mt-2"><a href="{{ url('packetdashboard') }}">Packets</a></li> --}}
                <li class="stockli mt-2"><a href="{{ url('recivelot') }}">ReciveLot</a></li>
            </ul>


        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Chocolate </h4>
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


                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-6 col-sm-6">
                        <div class="card">

                            <div class="row">

                                <?php //$data=App\Models\Bactch::get();
                                
                                ?>
                                <?php $data = App\Models\packet::with('batch')->get(); ?>
                                {{-- {{ dd($data->toArray()) }} --}}
                                @foreach ($data as $k => $ans)
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                {{-- <form action="#" method="post" class="form-horizontal"> --}}
                                                    <input type="hidden" value="{{ $ans->id }}" id="packet_id_{{ $ans->id }}"/>
                                                    <input type="hidden" value="{{ $ans->timer }}" class="current_timer" id="old_timer_{{ $ans->id }}"/>
                                                    <input type="hidden" value="{{ $ans->stop_timer }}" class="current_stop_timer" id="stop_timer_{{ $ans->id }}"/>
                                                <div id="timer_{{ $ans->id }}">00:00:00</div>
                                                <div class="button">
                                                    <button id="start_{{ $ans->id }}" class="start_button btn btn-secondary btn-sm float-left"
                                                        onclick="start({{ ($k+1) }})">Start</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    {{-- <button id="reset_{{ $k }}" onclick="reset()">Reset</button> --}}
                                                    <button hidden id="stop_{{ $ans->id }}" class="stop_button btn btn-secondary btn-sm float-left"
                                                        onclick="stop({{ ($k+1) }})">Growing Done</button>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">{{ $ans->batch['name'] }}</label>
                                                    </div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size float-right">15:40:04</label>
                                                    </div>

                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Batch:KOHINOOR</label>
                                                    </div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Total
                                                            Weight(Ct):{{ $ans->weight }}</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Pcs:{{ $ans->pcs }}</label>
                                                    </div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Avg
                                                            Weight(Ct):5.97</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Lots:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Avg
                                                            Height(Micron):</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">LOT40-2</label></div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Avg.L*W:{{ $ans->length }}
                                                            x {{ $ans->width }}</label></div>
                                                </div>
                                                <div class="row form-group1 mt-2">
                                                    <div class="col col-md-6">  <button id="stop_{{ $ans->id }}" class="stop_button btn btn-secondary btn-sm float-left"
                                                        onclick="stop({{ ($k+1) }})">Growing Done</button></div>
                                                    <div class="col col-md-6"><button type="button"
                                                            class="btn btn-danger btn-sm float-right">B</button></div>
                                                </div>
                                                {{-- </form> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                {{-- <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">A7-CH708-28</label>
                                                    </div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size float-right">15:40:04</label>
                                                    </div>

                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Batch:KOHINOOR</label>
                                                    </div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Total
                                                            Weight(Ct):40.00</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Pcs:2</label></div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Avg
                                                            Weight(Ct):5.97</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Lots:KOHINOOR</label>
                                                    </div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Avg
                                                            Height(Micron):7.86</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">LOT40-2</label></div>
                                                    <div class="col col-md-6"><label for="hf-email"
                                                            class=" form-control-label font_size">Avg.L*W:15.75*15.63</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group1 mt-2">
                                                    <div class="col col-md-6"> <button type="button"
                                                            class="btn btn-secondary btn-sm float-left"> Growing Done
                                                        </button></div>
                                                    <div class="col col-md-6"><button type="button"
                                                            class="btn btn-danger btn-sm float-right">B</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->

        <script>
            /* Seconds to (STRING)HH:MM:SS.MS ------------------------*/
            /* This time format is compatible with FFMPEG ------------*/
            function secToTimer(sec) {
                const o = new Date(0),
                    p = new Date(sec * 1000)
                return new Date(p.getTime() - o.getTime()).toString().split(" ")[4] + "." + p.getMilliseconds()
            }

            /* Countdown loop ----------------------------------------*/
            /*let job, origin = new Date().getTime()
            const timer = () => {
              job = requestAnimationFrame(timer)
              OUT.textContent = secToTimer((new Date().getTime() - origin) / 1000)
            }*/

            /* Start looping -----------------------------------------*/
            //requestAnimationFrame(timer)

            /* Stop looping ------------------------------------------*/
            // cancelAnimationFrame(job)

            /* Reset the start date ----------------------------------*/
            // origin = new Date().getTime()
        </script>
        <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/bootstrap.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/matchHeight.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/datatables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/init/datatables-init.js') }}"></script>

        <script src="{{ URL::asset('admin/assets/js/main.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/chosen.jquery.min.js') }} "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="{{ URL::asset('backend/assets/js/scripts.js?AS') }}"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            var timeArray=[];

            function timer(id) {

                timeArray[id]['sec']=timeArray[id]['sec']+1;
                if (timeArray[id]['sec'] / 60 == 1) {
                    timeArray[id]['min']=timeArray[id]['min']+1;
                    timeArray[id]['sec']=0;
                    if (timeArray[id]['min'] / 60 == 1) {
                        timeArray[id]['hour']=timeArray[id]['hour']+1;
                        timeArray[id]['min'] = 0;
                    }
                }
                if (timeArray[id]['sec'] < 10) {
                    timeArray[id]['dispSec'] = "0" + timeArray[id]['sec'].toString();
                } else {
                    timeArray[id]['dispSec'] = timeArray[id]['sec'].toString();
                }
                if (timeArray[id]['min'] < 10) {
                    timeArray[id]['dispMin'] = "0" + timeArray[id]['min'].toString();
                } else {
                    timeArray[id]['dispMin'] = timeArray[id]['min'].toString();
                }
                if (timeArray[id]['hour'] < 10) {
                    timeArray[id]['dispHour'] = "0" + timeArray[id]['hour'].toString();
                } else {
                    timeArray[id]['dispHour'] = timeArray[id]['hour'].toString();
                }
                document.getElementById("timer_" + id).innerHTML = timeArray[id]['dispHour'] + ":" + timeArray[id]['dispMin'] + ":" + timeArray[id]['dispSec'];
            }

            function stop(id){
                window.clearInterval(timeArray[id]['timeoutId']);
                document.getElementById("start_" + id).innerHTML = "Start11111111";
                timeArray[id]['check'] = "stop";

                var packet_id=$('#packet_id_'+id).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                formData.append("id", packet_id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ route('stopTimer') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function() {
                        //console.log("A");
                    }
                });
            }
            function start(id,notreset=0) {
                
                if(notreset == 0){
                    timeArray[id]=[];
                    timeArray[id]['hour']=0;
                    timeArray[id]['min']=0;
                    timeArray[id]['sec']=0;
                    timeArray[id]['dispHour']=0;
                    timeArray[id]['dispMin']=0;
                    timeArray[id]['dispSec']=0;
                    timeArray[id]['timeoutId']=null;
                    timeArray[id]['check']="stop";
                }

                if (timeArray[id]['check'] === "stop") {
                    timeArray[id]['timeoutId'] = window.setInterval(function() {
                        timer(id);
                    }, 1000);

                    document.getElementById("start_" + id).innerHTML = "Stop";
                    $("#start_" + id).hide();
                    timeArray[id]['check'] = "start";
                
                } else {
                    window.clearInterval(timeArray[id]['timeoutId']);
                    document.getElementById("start_" + id).innerHTML = "Start";
                    timeArray[id]['check'] = "stop";
                }
            }
            $(".current_timer").each(function() {
                //console.log($(this).val());
                if($(this).val()){
                    if(isNaN((new Date($('#stop_timer_'+this.id.replace('old_timer_','')).val())).getTime())){
                        var date1 = new Date($(this).val());
                        var date2 = new Date();

                        var diff = date2.getTime() - date1.getTime();

                        var msec = diff;
                        var hh = Math.floor(msec / 1000 / 60 / 60);
                        msec -= hh * 1000 * 60 * 60;
                        var mm = Math.floor(msec / 1000 / 60);
                        msec -= mm * 1000 * 60;
                        var ss = Math.floor(msec / 1000);
                        msec -= ss * 1000;

                        //console.log(hh + ":" + mm + ":" + ss);
                        //console.log(this.id);
                        //console.log(this.id.replace('old_timer_',''));
                        var id=$('#packet_id_'+this.id.replace('old_timer_','')).val();
                        //console.log(id);
                        //hour=hh;sec=ss;min=mm;
                        timeArray[id]=[];
                        timeArray[id]['hour']=hh;
                        timeArray[id]['min']=mm;
                        timeArray[id]['sec']=ss;
                        timeArray[id]['check']="stop";
                        start(id,1);
                    }else{
                        var date1 = new Date($(this).val());
                        var date2 = new Date($('#stop_timer_'+this.id.replace('old_timer_','')).val());

                        var diff = date2.getTime() - date1.getTime();

                        var msec = diff;
                        var hh = Math.floor(msec / 1000 / 60 / 60);
                        msec -= hh * 1000 * 60 * 60;
                        var mm = Math.floor(msec / 1000 / 60);
                        msec -= mm * 1000 * 60;
                        var ss = Math.floor(msec / 1000);
                        msec -= ss * 1000;

                        var id=$('#packet_id_'+this.id.replace('old_timer_','')).val();
                        if (ss < 10) {
                            ss = "0" + ss.toString();
                        } else {
                            ss = ss.toString();
                        }
                        if (mm < 10) {
                            mm = "0" + mm.toString();
                        } else {
                            mm = mm.toString();
                        }
                        if (hh < 10) {
                            hh = "0" + hh.toString();
                        } else {
                            hh = hh.toString();
                        }
                        document.getElementById("timer_" + id).innerHTML = hh + ":" + mm + ":" + ss;
                    }
                }
            });
            $(document).on('click', '.start_button', function () {
                //console.log(this.id);
                var id=this.id.replace('start_','');

                var packet_id=$('#packet_id_'+id).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                formData.append("id", packet_id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ route('startTimer') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function() {
                        //console.log("A");
                    }
                });
            });
            
            /*function reset(){
                window.clearInterval(timeoutId); 
                sec=0,min=0,hour=0;
                document.getElementById("timer").innerHTML="00:00:00";
                document.getElementById("start").innerHTML="Start";
            }*/
        </script>
</body>

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:40 GMT -->

</html>
