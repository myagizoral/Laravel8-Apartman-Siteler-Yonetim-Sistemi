@php
    $parentMenus = \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>MENÜLER</h2>


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
                        coll[i].addEventListener("click", function() {
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

<<<<<<< Updated upstream





            <!--
                @foreach($parentMenus as $rs)
                {{$rs->title}}
                    <ul>
                    @if(count($rs->children))
                    @include('home.menutree',['children'=>$rs->children])
                @endif
                    </ul>
                @endforeach

=======
            <!--
                @foreach($parentMenus as $rs)
                {{$rs->title}}
                    <ul>
                    @if(count($rs->children))
                    @include('home.menutree',['children'=>$rs->children])
                @endif
                    </ul>
                @endforeach

>>>>>>> Stashed changes
                @foreach($parentMenus as $rs)
                <div class="panel-group category-products" id="accordian">category-productsr
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    {{$rs->title}}
                                </a>
                            </h4>
                        </div>
                        <div id="mens" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    @if(count($rs->children))
                                        @include('home.menutree',['children'=>$rs->children])
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                -->
            </div>

        </div>
        @include('home._maincontent')
    </div>
</div>
