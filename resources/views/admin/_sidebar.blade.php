<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('admin_home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">ANA MENU/ÖZELLİKLER</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Yönetim</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('admin_menu')}}">Menüler</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="">BOŞ2</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="">BOŞ3</a></li>
                    </ul>
                </li>
                <!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>ÖZELLİKLER</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('admin_menu')}}">MenülerDENEME</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="">BOŞ2</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="">BOŞ3</a></li>
                    </ul>
                </li>
                <!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="">Vector Maps</a></li>
                    </ul>
                </li>
                <!-- /.menu-title -->
                <li class="menu-title">Extras</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('admin_login')}}">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="">Forget Pass</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
