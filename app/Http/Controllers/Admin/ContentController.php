<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = Content::all();
        return view('admin.content',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $datalist = Menu::all();
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
        return view('admin.content_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Content();
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = $request->input('image');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $data->price = $request->input('price');
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

        if($request->tur != "aidat")
        {

        }
        else{
            $data->price = $request->input('price');
        }

        //$data->price = $request->input('price');
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
        $data->detail = $request->input('detail');
        $data->status = $request->input('status');
        $data->slug = $request->input('slug');
        $data->menu_id = $request->input('menu_id');
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
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
        $data->image = Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content,$id)
    {
        //
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $datalist = Menu::all();
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
=======
       // $datalist = Menu::all();
        $datalist = Menu::with('children')->get();
>>>>>>> Stashed changes
        $data = Content::find($id);
        return view('admin.content_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content,$id)
    {
        //
        $data = Content::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = $request->input('image');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $data->price = $request->input('price');
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

        if($request->tur != "aidat")
        {

        }
        else{
            $data->price = $request->input('price');
        }

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
        $data->detail = $request->input('detail');
        $data->status = $request->input('status');
        $data->slug = $request->input('slug');
        $data->menu_id = $request->input('menu_id');
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
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
=======
        $data->tur = $request->input('tur');//tür bilgisi burda tutulacak 10.01.2021 tarihinde eklendi
>>>>>>> Stashed changes
        if($request->file('image') != NULL)
        {
            $data->image = Storage::putFile('images',$request->file('image'));
        }
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        
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
=======

>>>>>>> Stashed changes
        $data->save();
        return redirect()->route('admin_contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content,$id)
    {
        //
        //DB::table('contents')->where('id', '=', $id)->delete();


        $data = Content::find($id);
        $data->delete();
        return redirect()->route('admin_contents');
    }
}
