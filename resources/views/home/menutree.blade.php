@foreach($children as $submenu)

    @if(count($submenu->children))
        <li>{{$submenu->title}}</li>
        @include('home.menutree',['children'=>$submenu->children])
    @else

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            <li><a href="#">{{$submenu->title}}</a></li>
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes
=======
            <li><a href="{{route('categorycontents',['id'=>$submenu->id,'slug'=>$submenu->slug])}}">{{$submenu->title}}</a></li>
>>>>>>> Stashed changes


    @endif

@endforeach
