@foreach($children as $submenu)

    @if(count($submenu->children))
        <li>{{$submenu->title}}</li>
        @include('home.menutree',['children'=>$submenu->children])
    @else

            <li><a href="#">{{$submenu->title}}</a></li>


    @endif

@endforeach
