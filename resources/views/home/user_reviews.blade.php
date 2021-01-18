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
    <meta charset="utf-8">
    <!--
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="author" content="">
-->


    <title> User Profile </title>


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
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>


@include('home._header')
<!--usermenu.blade i buraya aldım onu kullanmıyoruz şuan ama silmeyeceğim orda dursun template uymuyor öyle-->
<div class="container">
    <div class="row">
<<<<<<< Updated upstream
        <div class="col-sm-2">
            <div class="left-sidebar">

                <button type="button" class="collapsible">Hesabım</button>
                <div class="content">
                    <li><a href="{{route('myprofile')}}">Profilim </a></li>
                    <li><a href="{{route('myreviews')}}">yorumlarım </a></li>
                    <li><a href="{{route('logout')}}">Çıkış/logout </a></li>
                </div>

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
        </div>

=======
        @include('home.usermenu')
>>>>>>> Stashed changes
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>subject</th>
                    <th>review</th>
                    <th>status</th>
                    <th>created_at</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                        <td><a href="{{route('content',['id'=>$rs->content->id,'slug'=>$rs->content->slug])}}"
=======
                        <td><a href="{{route('content',['id'=>$rs->content->id, 'slug'=>$rs->content->slug])}}"
>>>>>>> Stashed changes
=======
                        <td><a href="{{route('content',['id'=>$rs->content->id, 'slug'=>$rs->content->slug])}}"
>>>>>>> Stashed changes
                               target="_blank">{{$rs->content->title}}</a></td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->status}}</td>
                        <td>{{$rs->created_at}}</td>
                        <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}"
                               onclick="return confirm('eminmisin')">SİL</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- İÇERİK BUARAYA GELECCEK-->
    </div>
</div>
@include('home._footer')
</body>
</html>
