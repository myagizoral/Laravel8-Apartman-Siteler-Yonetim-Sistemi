<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            height: calc(100% - 20px);
            width: calc(100% - 20px);
            margin: 0;
            padding: 10px;
            display: flex;
            background: #f2f2f2;
            color: rgba(0, 0, 0, .87);
            font-family: 'Roboto', sans-serif;
        }

        .accordion {
            margin: auto;
            width: 400px;
        }

        .accordion input {
            display: none;
        }

        .box {
            position: relative;
            background: white;
            height: 64px;
            transition: all .15s ease-in-out;
        }

        .box::before {
            content: '';
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            pointer-events: none;
            box-shadow: 0 -1px 0 #e5e5e5, 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
        }

        header.box {
<<<<<<< Updated upstream
            background: #00BCD4;
=======
            background: #F4D03F;
>>>>>>> Stashed changes
            z-index: 100;
            cursor: initial;
            box-shadow: 0 -1px 0 #e5e5e5, 0 0 2px -2px rgba(0, 0, 0, .12), 0 2px 4px -4px rgba(0, 0, 0, .24);
        }

        header .box-title {
            margin: 0;
            font-weight: normal;
            font-size: 16pt;
            color: white;
            cursor: initial;
        }

        .box-title {
            width: calc(100% - 40px);
            height: 64px;
            line-height: 64px;
            padding: 0 20px;
            display: inline-block;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .box-content {
            width: calc(100% - 40px);
            padding: 30px 20px;
            font-size: 11pt;
            color: rgba(0, 0, 0, .54);
            display: none;
        }

        .box-close {
            position: absolute;
            height: 64px;
            width: 100%;
            top: 0;
            left: 0;
            cursor: pointer;
            display: none;
        }

        input:checked + .box {
            height: auto;
            margin: 16px 0;
            box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
        }

        input:checked + .box .box-title {
            border-bottom: 1px solid rgba(0, 0, 0, .18);
        }

        input:checked + .box .box-content,
        input:checked + .box .box-close {
            display: inline-block;
        }

        .arrows section .box-title {
            padding-left: 44px;
            width: calc(100% - 64px);
        }

        .arrows section .box-title:before {
            position: absolute;
            display: block;
            content: '\203a';
            font-size: 18pt;
            left: 20px;
            top: -2px;
            transition: transform .15s ease-in-out;
            color: rgba(0, 0, 0, .54);
        }

        input:checked + section.box .box-title:before {
            transform: rotate(90deg);
        }
    </style>


</head>
<body>
<body>
@include('home.message')
<nav class="accordion arrows">
    <header class="box">
        <label for="acc-close" class="box-title">Kullanıcılara Rol Ekleme</label>
    </header>
    <!--başlangıç-->
    <input type="radio" name="accordion" id="cb1"/>
    <section class="box">
<<<<<<< Updated upstream
        <label class="box-title" for="cb1">Id</label>
=======
        <label class="box-title" for="cb1">ID</label>
>>>>>>> Stashed changes
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">{{$data->id}}</div>
    </section>
    <!--başlangıç-->
    <input type="radio" name="accordion" id="cb2"/>
    <section class="box">
<<<<<<< Updated upstream
        <label class="box-title" for="cb2">Name</label>
=======
        <label class="box-title" for="cb2">İsim</label>
>>>>>>> Stashed changes
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">{{$data->name}}</div>
    </section>
    <!--başlangıç-->
    <input type="radio" name="accordion" id="cb3"/>
    <section class="box">
        <label class="box-title" for="cb3">E-mail</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">{{$data->email}}</div>
    </section>
    <!--başlangıç-->
    <input type="radio" name="accordion" id="cb4"/>
    <section class="box">
        <label class="box-title" for="cb4">Rol Ekle</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">
            <form action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" class=""
                  enctype="multipart/form-data">
                @csrf
                <select name="roleid">
                    @foreach($datalist as $rs)
                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                        <br>
                    @endforeach
                </select>
<<<<<<< Updated upstream
                <button type="submit" class="btn btn-primary btn-sm">Add role</button>
=======
                <button type="submit" class="btn btn-primary btn-sm">Rol Ekle</button>
>>>>>>> Stashed changes
            </form>
        </div>
    </section>
    <!--başlangıç-->
    <input type="radio" name="accordion" id="cb5"/>
    <section class="box">
        <label class="box-title" for="cb5">Sil</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">
            @foreach($data->roles as $row)
                {{$row->name}}
                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                   onclick="return confirm('Are you sure you want to delete this item?')"><img
                        src="{{asset('assets/admin/assets/images')}}/delete.png" height="25"> </a>
            @endforeach
        </div>
    </section>


    <input type="radio" name="accordion" id="acc-close"/>
</nav>
</body>

</body>
</html>


