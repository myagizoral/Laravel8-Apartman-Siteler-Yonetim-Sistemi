<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>setting editleme sayfası</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('assets')}}/admin/assets/images/logo.png">
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/logo2.png">

    <!--sumnmernote -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    @yield('css')
    @yield('javascript')
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff!important;
        }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>
<body>
<!--BURASI!!!!!!!!!!! -->
@include('admin._sidebar')
@include('admin._header')
<h3>settings editleme</h3>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body card-block">
            <form action="{{route('admin_setting_update')}}" method="post" class="" enctype="multipart/form-data">
            @csrf

                <input type="hidden"  id="id" name="id" class="form-control" value="{{$data->id}}">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Title</div>
                        <input type="text"  id="title" name="title" class="form-control" value="{{$data->title}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Keywords</div>
                        <input type="text"  id="keywords" name="keywords" class="form-control" value="{{$data->keywords}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Description</div>
                        <input type="text"  id="description" name="description" class="form-control" value="{{$data->description}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">company</div>
                        <input type="text"  id="company" name="company" class="form-control" value="{{$data->company}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">address</div>
                        <input type="text"  id="address" name="address" class="form-control" value="{{$data->address}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">phone</div>
                        <input type="text"  id="phone" name="phone" class="form-control" value="{{$data->phone}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">fax</div>
                        <input type="text"  id="fax" name="fax" class="form-control" value="{{$data->fax}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">email</div>
                        <input type="text"  id="email" name="email" class="form-control" value="{{$data->email}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">smtpserver</div>
                        <input type="text"  id="smtpserver" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">smtpemail</div>
                        <input type="email"  id="smtpemail" name="smtpemail" class="form-control" value="{{$data->smtpemail}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">smtppassword</div>
                        <input type="password"  id="smtppassword" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">smtpport</div>
                        <input type="number"  id="smtpport" name="smtpport" class="form-control" value="{{$data->smtpport}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">facebook</div>
                        <input type="text"  id="facebook" name="facebook" class="form-control" value="{{$data->facebook}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">instagram</div>
                        <input type="text"  id="instagram" name="instagram" class="form-control" value="{{$data->instagram}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">twitter</div>
                        <input type="text"  id="twitter" name="twitter" class="form-control" value="{{$data->twitter}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">youtube</div>
                        <input type="text"  id="youtube" name="youtube" class="form-control" value="{{$data->youtube}}">
                        <div class="input-group-addon"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">aboutus</div>
                    <!--  <input type="text"  id="detail" name="detail" class="form-control" value="{{$data->aboutus}}">-->
                        <textarea id="summernote" name="aboutus">{{$data->aboutus}}</textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">contact</div>
                    <!--  <input type="text"  id="detail" name="detail" class="form-control" value="{{$data->contact}}">-->
                        <textarea id="summernote1" name="contact">{{$data->contact}}</textarea>
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#summernote').summernote();
                    });
                </script>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">references</div>
                    <!--  <input type="text"  id="detail" name="detail" class="form-control" value="{{$data->references}}">-->
                        <textarea id="summernote2" name="references">{{$data->references}}</textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                                $('#summernote1').summernote();
                                $('#summernote2').summernote();
                            });
                        </script>
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Status</label></div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="status" class="form-control-sm form-control">
                            <option selected="selected">{{$data->status}}</option>
                            <option value="False">False</option>
                            <option value="True">True</option>

                        </select>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">editle</button>
                </div>
            </form>
        </div>
    </div>
</div>




@include('admin._footer')
@yield('footer')



</body>
</html>
