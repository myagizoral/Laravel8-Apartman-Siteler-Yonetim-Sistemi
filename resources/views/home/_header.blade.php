@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 8215555</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> @yield('mail')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            @if($setting->facebook != null)
                                <li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li> @endif
                            @if($setting->twitter != null)
                                <li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>@endif
                            @if($setting->instagram != null)
                                <li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>@endif
                            @if($setting->youtube != null)
                                <li><a href="{{$setting->youtube}}" target="_blank"><i
                                            class="fa fa-google-plus"></i></a>
                                </li>@endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="{{asset('assets')}}/images/home/logo.png" alt=""/></a>
                    </div>
                    <div class="btn-group pull-right clearfix">
                        <!--
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canada</a></li>
                                <li><a href="">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canadian Dollar</a></li>
                                <li><a href="">Pound</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">

                            @auth
                                <li><a href=""><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
=======
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> Hesabım</a></li>
>>>>>>> Stashed changes
                            @endauth
                            @guest
                                <li><a href="/login"><i class="fa fa-user"></i> Login</a></li>
                                    <li><a href="/register"><i class="fa fa-user"></i> Join</a></li>
                            @endguest
                            <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>


                            <!--
                                 <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                 <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                 <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home')}}" class="active">AnaSayfa</a></li>
                            <!--
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> -->
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                            <li><a href="{{route('contact')}}">İletişim</a></li>
                            <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                            <li><a href="{{route('references')}}">Referanslar</a></li>
                            <li><a href="{{route('faq')}}">Sıkça Sorulan Sorular</a></li>
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
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                            <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                            <li><a href="{{route('references')}}">Referanslar</a></li>
                            <li><a href="{{route('faq')}}">Sıkça Sorulan Sorular</a></li>
                            <li><a href="{{route('contact')}}">İletişim</a></li>

<<<<<<< Updated upstream
<<<<<<< Updated upstream
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
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <form action="{{route('getcontent')}}" method="post">
                    @csrf
                    @livewire('search')
                        <button type="submit">ARA</button>
                    </form>
                     @livewireScripts
                </div>

            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
