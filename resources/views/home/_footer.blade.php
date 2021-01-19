@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
<<<<<<< Updated upstream
                        <h2>Bilgiler</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company:{{$setting->company}}</a></li>
                            <li><a href="#">Address:{{$setting->address}}</a></li>
                            <li><a href="#">Phone:{{$setting->phone}}</a></li>
                            <li><a href="#">Fax:{{$setting->fax}}</a></li>
                            <li><a href="#">Email:{{$setting->email}}</a></li>
=======
                        <h2>BİLGİLER</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Şirket:{{$setting->company}}</a></li>
                            <li><a href="#">Adres:{{$setting->address}}</a></li>
                            <li><a href="#">Telefon:{{$setting->phone}}</a></li>
                            <li><a href="#">Fax:{{$setting->fax}}</a></li>
                            <li><a href="#">E-mail:{{$setting->email}}</a></li>
>>>>>>> Stashed changes
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © MUSTAFA YAĞIZ All rights reserved.</p>
                <p class="pull-right">Designed by {{$setting->company}}</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/price-range.js"></script>
<script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>

<!--/summernotes-->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
