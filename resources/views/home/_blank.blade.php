
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .collapsible {
            background-color: #FF8333;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active, .collapsible:hover {
            background-color: #555;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }
    </style>
    <style>
        * {
            box-sizing:border-box;
        }

        body,
        html {
            padding: 0;
            margin: 0;
        }

        body {
            background: #4e616d;
            font-family: 'Montserrat', Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            font-weight: normal;
        }

        /* ----> wrapper */
        #content-slider .wrap-slider {
            max-width: 1200px;
            /*height: 100%;*/
            width: 100%;
            margin: 0px auto;
            position: relative;
            text-align: right;
        }

        #content-slider .wrap-slider.full {
            width: 100%;
            max-width: 100%;
            text-align: center;
            border: none;
        }


        /* --------> Link style */
        #content-slider *:focus {
            outline: 0;
        }

        #content-slider a:hover {
            color: #7FD4FD;
            text-decoration: underline;
        }

        #content-slider a:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        #content-slider a:hover,
        #content-slider a:active {
            outline: 0;
        }

        /* -------> Responsive images (ensure images don't scale beyond their parents) */
        #content-slider img {
            max-width: 100%;
            width: auto\9;
            height: auto;
            vertical-align: middle;
            border: 0;
            -ms-interpolation-mode: bicubic;
        }

        /* -------> Main */
        #content-slider .slider {
            margin-top: 5%;
            /*position: absolute;*/
            overflow: hidden;
            width: 100%;
            margin: 0 auto;

            position: relative;
        }

        #content-slider .inset {
            width: 500%;
            line-height: 0;

            -webkit-animation: 30s slidy infinite;
            -moz-animation: 30s slidy infinite;
            -ms-animation: 30s slidy infinite;
            -o-animation: 30s slidy infinite;
            animation: 30s slidy infinite;

            -webkit-transition: all 2s ease-in-out;
            -moz-transition: all 2s ease-in-out;
            -ms-transition: all 2s ease-in-out;
            -o-transition: all 2s ease-in-out;
            transition: all 2s ease-in-out;
        }

        #content-slider h1.main-title {
            text-align: center;
            color: #00ABFA;
            font-weight: 200;
            font-size: 2rem;
            line-height: 3rem;
            text-transform: uppercase;
            margin: 5px 0 0px 0;
        }

        #content-slider .slider [class*='title-'] {
            background: rgba(0, 0, 0, 0.51);
            padding: 1% 1%;
            display: inline-block;
            width: 40%;
            height: auto;
            position: absolute;
            z-index: 12;
            margin: 15px 0 0 15px;
            line-height: normal;
            overflow: hidden;
            text-align: left;

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        #content-slider .th>[class*='title-'] {
            width: auto;
            height: auto;
            position: absolute;
            top: 0em;
            right: 0em;
            text-align: right;
            margin: 5px 10px 0 0;
            opacity: 1;
            line-height: normal;
            overflow: hidden;

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        /* -------> Article */
        #content-slider .slider h1,
        #content-slider .th h1 {
            color: #fffefe;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
            font-weight: bold;
        }

        #content-slider .slider p,
        #content-slider .th p {
            color: #fffefe;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
        }

        #content-slider .slider a,
        #content-slider .th a {
            font-weight: bold;
            color: #00ABFA;
            text-decoration: none;
            text-transform: uppercase;
        }

        /* -------> Article IMg Slider */
        #content-slider .slider h1 { font-size: 1.5rem; }

        #content-slider .slider p {	font-size: 1.2rem; }

        #content-slider .slider a { font-size: 1rem; }

        /* -------> Article IMg Prev */
        #content-slider .th h1 { font-size: 1rem; }

        #content-slider .th p { font-size: .875rem; }

        #content-slider .th a { font-size: .75rem; }

        #content-slider .th img {
            position: relative;
            max-width: 100%;
            height: auto !important;
            -webkit-filter: brightness(50%);
            -moz-filter: brightness(50%);
            -ms-filter: brightness(50%);
            -o-filter: brightness(50%);
            filter: brightness(50%);

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        #content-slider .th:hover img {
            -webkit-filter: brightness(100%);
            -moz-filter: brightness(100%);
            -ms-filter: brightness(100%);
            -o-filter: brightness(100%);
            filter: brightness(100%);
        }


        /* -------> Main Img */
        #content-slider figure {
            margin: 0;
            padding: 0;
            width: 20%;
            float: left;
            cursor: pointer;

            -webkit-transition: all 2s ease-in-out;
            -moz-transition: all 2s ease-in-out;
            -ms-transition: all 2s ease-in-out;
            -o-transition: all 2s ease-in-out;
            transition: all 2s ease-in-out;
        }

        #content-slider figure img {
            width: 100%;
            position: relative;
        }

        /* -------> Max contrloS img preview */
        #content-slider span.th {
            width: 25%;
            margin: 35% 0% 0 0%;
            float: left;
            text-align: center;
            display: inline-block;
            position: absolute;
            z-index: 1000;
            cursor: pointer;
        }

        #b-1 { left: 0; }
        #b-2 { left: 25%; }
        #b-3 { left: 50%; }
        #b-4 { left: 75%; }

        #content-slider input[type='radio'] {
            width: 10px;
            height: 10px;
            display: none;
            position: relative;
            display: none;
        }

        #control{
            position: absolute;
            left: 3%;
            z-index: 5;
            top: 55%;
            width: 95%;
        }

        #content-slider label.first{
            width: 9px;
            height: 9px;
            margin: 0 2px;
            text-align: center;
            display: inline-block;
            position: relative;
            z-index: 1000;
            cursor: pointer;
            border-radius: 100%;
            border: 2px solid #00ABFA;
            background: #00ABFA;

            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        #content-slider #main {
            padding: 1% 0;
            width: 100%;
            /*margin-top: 29.2%;*/
            bottom: 0;
            z-index: 10;
            position: absolute;
            text-align: center;
            background: rgba(0, 0, 0, 0.71);
        }

        #content-slider input[type='radio'] {
            width: 10px;
            height: 10px;
            display: none;
            position: relative;
            display: none;
        }

        #content-slider #control{
            position: absolute;
            left: 3%;
            z-index: 15;
            top: 0%;
            width: 95%;
            /*margin-top: 10%;*/

            /*display: none;*/
            height: 50px;
            top:50%;
            margin-top: -25px;
        }


        /* -------> Controls */
        #main>label:hover { width: 9px; height: 9px; background: #FFF; border: 1px solid #00ABFA; }

        input#a-1:checked ~ .slider .inset { margin-left: 0%;   }
        input#a-2:checked ~ .slider .inset { margin-left:-100%; }
        input#a-3:checked ~ .slider .inset { margin-left:-200%; }
        input#a-4:checked ~ .slider .inset { margin-left:-300%; }
        input#a-5:checked ~ .slider .inset { margin-left:-400%; }


        input#a-1:checked ~ #main>label:nth-child(1) { opacity: 1; background: #fff; }
        input#a-2:checked ~ #main>label:nth-child(2) { opacity: 1; background: #fff; }
        input#a-3:checked ~ #main>label:nth-child(3) { opacity: 1; background: #fff; }
        input#a-4:checked ~ #main>label:nth-child(4) { opacity: 1; background: #fff; }

        input#a-1:checked ~ #control>label:nth-child(2),
        input#a-2:checked ~ #control>label:nth-child(3),
        input#a-3:checked ~ #control>label:nth-child(4),
        input#a-4:checked ~ #control>label:nth-child(1),
        input#a-5:checked ~ #control>label:nth-child(1),
        input#a-1:checked ~ #control>label:nth-child(4),
        input#a-2:checked ~ #control>label:nth-child(1),
        input#a-3:checked ~ #control>label:nth-child(2),
        input#a-4:checked ~ #control>label:nth-child(3) {
            width: 50px;
            height: 50px;
            top: 50%;
            margin-top: -25px;
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        input#a-1:checked ~ #control>label:nth-child(2):after,
        input#a-2:checked ~ #control>label:nth-child(3):after,
        input#a-3:checked ~ #control>label:nth-child(4):after,
        input#a-4:checked ~ #control>label:nth-child(1):after,
        input#a-5:checked ~ #control>label:nth-child(1):after,
        input#a-1:checked ~ #control>label:nth-child(4):after,
        input#a-2:checked ~ #control>label:nth-child(1):after,
        input#a-3:checked ~ #control>label:nth-child(2):after,
        input#a-4:checked ~ #control>label:nth-child(3):after {
            font-family: FontAwesome;
            font-size: 7rem;
            line-height: 7rem;
            color:#00ABFA;
            position: absolute;
            top:0;
            left: 0;
        }

        input#a-1:checked ~ #control>label:nth-child(2),
        input#a-2:checked ~ #control>label:nth-child(3),
        input#a-3:checked ~ #control>label:nth-child(4),
        input#a-4:checked ~ #control>label:nth-child(1) {
            float: right;
            right: 0.3%;
        }

        input#a-1:checked ~ #control>label:nth-child(2):after,
        input#a-2:checked ~ #control>label:nth-child(3):after,
        input#a-3:checked ~ #control>label:nth-child(4):after,
        input#a-4:checked ~ #control>label:nth-child(1):after {
            content: "\f105";
        }

        input#a-1:checked ~ #control>label:nth-child(4),
        input#a-2:checked ~ #control>label:nth-child(1),
        input#a-3:checked ~ #control>label:nth-child(2),
        input#a-4:checked ~ #control>label:nth-child(3) {
            float: left;
            left: 0.3%;
        }

        input#a-1:checked ~ #control>label:nth-child(4):after,
        input#a-2:checked ~ #control>label:nth-child(1):after,
        input#a-3:checked ~ #control>label:nth-child(2):after,
        input#a-4:checked ~ #control>label:nth-child(3):after {
            content: "\f104";
        }

        span#a-1:focus ~ .slider .inset { margin-left: 0%;   }
        span#a-2:focus ~ .slider .inset { margin-left:-100%; }
        span#a-3:focus ~ .slider .inset { margin-left:-200%; }
        span#a-4:focus ~ .slider .inset { margin-left:-300%; }
        span#a-5:focus ~ .slider .inset { margin-left:-400%; }

        span#b-1:focus ~ .slider .inset { margin-left: 0%;   }
        span#b-2:focus ~ .slider .inset { margin-left:-100%; }
        span#b-3:focus ~ .slider .inset { margin-left:-200%; }
        span#b-4:focus ~ .slider .inset { margin-left:-300%; }
        span#b-5:focus ~ .slider .inset { margin-left:-400%; }

        #content-slider input:checked ~ .slider>.inset {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            -o-animation: none;
            animation: none;
        }
        #content-slider input:hover ~ .slider>.inset,
        #content-slider label:hover ~ .slider>.inset {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }
        #content-slider input:hover ~ .slider>.inset,
        #content-slider label:hover ~ .slider>.inset {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }
        #content-slider span:focus ~ .slider>.inset {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            -o-animation: none;
            animation: none;
        }
        #content-slider span:hover ~ .slider>.inset {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }


        /* -------> Animation */

        @keyframes slidy {
            20% { margin-left:    0%; }
            25% { margin-left: -100%; }
            45% { margin-left: -100%; }
            50% { margin-left: -200%; }
            70% { margin-left: -200%; }
            75% { margin-left: -300%; }
            95% { margin-left: -300%; }
            100% { margin-left: -400%; }
        }
        @-webkit-keyframes slidy {
            20% { margin-left:    0%; }
            25% { margin-left: -100%; }
            45% { margin-left: -100%; }
            50% { margin-left: -200%; }
            70% { margin-left: -200%; }
            75% { margin-left: -300%; }
            95% { margin-left: -300%; }
            100% { margin-left: -400%; }
        }
        @-moz-keyframes slidy {
            20% { margin-left:    0%; }
            25% { margin-left: -100%; }
            45% { margin-left: -100%; }
            50% { margin-left: -200%; }
            70% { margin-left: -200%; }
            75% { margin-left: -300%; }
            95% { margin-left: -300%; }
            100% { margin-left: -400%; }
        }
        @-o-keyframes slidy {
            20% { margin-left:    0%; }
            25% { margin-left: -100%; }
            45% { margin-left: -100%; }
            50% { margin-left: -200%; }
            70% { margin-left: -200%; }
            75% { margin-left: -300%; }
            95% { margin-left: -300%; }
            100% { margin-left: -400%; }
        }


        /* -------> Responsive */
        @media (max-width: 992px) {

            html {
                font-size: 12px;
            }

            #content-slider .th>[class*='title-'] {
                display: none;
            }

        }

        @media (max-width: 768px) {

            html {
                font-size: 10px;
            }

            #content-slider .slider [class*='title-'] {
                display: none;
            }

            #content-slider span.first { display: none; }

            #content-slider #control { display: block; }


            #content-slider span#b-2:focus { opacity: 1; }

            span#b-2:focus ~ span#b-5 { display: none; }

            #content-slider span#b-3:focus { opacity: 1; }

            span#b-3:focus ~ span#b-5 { display: none; }

            #content-slider span#b-4:focus { opacity: 1; }

            span#b-4:focus ~ span#b-5 { display: none; }

        }

        @media (max-width: 480px) {

            #content-slider span.th img { display: none; }

        }
    </style>
    <meta charset="utf-8">
    <!--
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="author" content="">
-->

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    <!-- her sayfaya yağıştır bunu dinamik title vs için -->
    @section('title', $data->title . " content detail")
    @section('mail', 'apartmansitelerys@gmail.com')

    @section('description')
        {{ $data->description}}
    @endsection

    @section('keywords', $data->keywords)
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    <title> @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream

=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes
=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes
=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes
=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes
=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes
=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes
=======
    <!-- #####################################################################-->
>>>>>>> Stashed changes


    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>


@include('home._header')
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream

=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
<!-- menu çubuğu-->
@php
    $parentMenus = \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="col-sm-2">
    @foreach($parentMenus as $rs)
        <button type="button" class="collapsible">{{$rs->title}}</button>
        <div class="content">
            @if(count($rs->children))
                @include('home.menutree',['children'=>$rs->children])
            @endif
        </div>
    @endforeach
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
</div>
<!--  menu çubuğu-->
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes




@include('home._footer')

</body>
</html>
