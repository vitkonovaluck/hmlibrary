<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelFunction;
use App\Models\Menu;
use Illuminate\Http\Request;

class AMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.menu.index',[
            'title_page' => 'Меню сайта',
            'menu' => Menu::with('children')->where('menu_main', '0')->orderBy('menu_sort')->get(),
            'delimiter'  => ''
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create', [
            'title_page' => 'Створення пункту меню',
            'menu' => [],
            'menues' => Menu::with('children')->where('menu_main', '0')->orderBy('menu_sort')->get(),
            'function' => ModelFunction::orderBy('name')->get(),
            'link' => [],
            'delimiter'  => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menu:create($request->all());
        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //dd(Menu::with('children')->where('menu_main', '1')->orderBy('menu_sort')->toSql());
        return view('admin.menu.edit', [
            'title_page' => 'Редагування пункту меню',
            'menu' => $menu,
            'menues' => Menu::with('children')->where('menu_main', '0')->orderBy('menu_sort')->get(),
            'function' => [],
            'link' => [],
            'delimiter'=>''
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
