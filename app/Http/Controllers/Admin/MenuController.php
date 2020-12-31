<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('admin.menu');

        $datalist = DB::select('select * from menus');
        return view('admin.menu', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('menus')->insert([
            'title' => $request->input('title'),
            'parent_id' => $request->input('parent_id'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'slug' => $request->input('slug')
        ]);

        return redirect()->route('admin_menu');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        //return view('admin.menu_add');
        //$datalist = DB::select('select * from menus');
        $datalist = DB::table('menus')->get()->where('parent_id', 0);
        return view('admin.menu_add', ['datalist' => $datalist]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu, $id)
    {

        $datalist = DB::table('menus')->get()->where('parent_id', 0);
        $data = Menu::find($id);
        return view('admin.menu_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu, $id)
    {
        //
        $data = Menu::find($id);

        $data->title = $request->input('title');
        $data->parent_id = $request->input('parent_id');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->slug = $request->input('slug');

        $data->save();
        return redirect()->route('admin_menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, $id)
    {
        //
        DB::table('menus')->where('id', '=', $id)->delete();
        return redirect()->route('admin_menu');
    }
}
