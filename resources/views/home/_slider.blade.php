<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


                <div id="content-slider">
                    <div class="wrap-slider">

                        <h1 class="main-title">KULEPARK</h1>

                        <!-- ===== Thumbnail ControlNav ======= -->
                        <input type="radio" id="a-1" name="a" >
                        <input type="radio" id="a-2" name="a" >
                        <input type="radio" id="a-3" name="a" >
                        <input type="radio" id="a-4" name="a" >

                        <nav id="main">
                            <label for="a-1" class="first"></label>
                            <label for="a-2" class="first"></label>
                            <label for="a-3" class="first"></label>
                            <label for="a-4" class="first"></label>
                        </nav>

                        <!-- =================================== -->
                        <nav id="control">
                            <label for="a-1"></label>
                            <label for="a-2"></label>
                            <label for="a-3"></label>
                            <label for="a-4"></label>
                        </nav>
                        <!-- =================================== -->

                        <!-- 	IMAGE NAVIGATION pic
                        <span id="b-1" class="th" tabindex="10">
      <img src="https://github.com/lime7/slider/blob/master/images/pic-1.png?raw=true" alt="" id="p-1">
      <div class="title-1">
        <h1>PAK FA T-50</h1>
        <p>Stealth multirole fighter</p>
        <a href="">read more...</a>
      </div>
    </span>

                        <span id="b-2" class="th" tabindex="11">
      <img src="https://github.com/lime7/slider/blob/master/images/pic-10.png?raw=true" alt="" id="p-2">
      <div class="title-2">
        <h1>Kamov Ka-50 "Black Shark"</h1>
        <p>Attack helicopter</p>
        <a href="">read more...</a>
      </div>
    </span>

                        <span id="b-3" class="th" tabindex="12">
      <img src="https://github.com/lime7/slider/blob/master/images/pic-3.png?raw=true" alt="" id="p-3">
      <div class="title-3">
        <h1>Sukhoi Su-27</h1>
        <p>Air superiority fighter</p>
        <a href="">read more...</a>
      </div>
    </span>

                        <span id="b-4" class="th" tabindex="13">
      <img src="https://github.com/lime7/slider/blob/master/images/pic-4.png?raw=true" alt="" id="p-4">
      <div class="title-4">
        <h1>mil mi-28</h1>
        <p>Attack helicopter</p>
        <a href="">read more...</a>
      </div>
    </span>
-->
                        <!-- ===== IMages ======= -->

                        <div class="slider">
                            <div class="inset">


                                @foreach($slider as $rs)
                                <figure>
                                    <figcaption class="title-1">
                                        <h1>{{$rs->title}}</h1>
                                        <p>--------------------</p>
                                        <a href="{{route('content',['id'=>$rs->id,'slug'=>$rs->slug])}}">read more...</a>
                                    </figcaption>
                                    <img src="{{Storage::url($rs->image)}}" style="height: 500px" alt="" id="i-1" class="f">
                                </figure>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>


            <!--
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    @foreach($slider as $rs)
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-6">
                            <h1>{{$rs->title}}</h1>
                                <h2></h2>
                                <p> </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($rs->image)}}" style="height: 500px" class="girl img-responsive" alt="" />

                            </div>
                        </div>
                        @endforeach
                </div>

                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
-->
            </div>
        </div>
    </div>
</section><!--/slider-->
