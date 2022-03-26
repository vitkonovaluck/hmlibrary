<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelFunction;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
            'menu' => Menu::with('children')->where('parent_id', '0')->orderBy('menu_sort')->get(),
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
            'menues' => Menu::with('children')->where('parent_id', '0')->orderBy('menu_sort')->get(),
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
        //dd($request->all());
        Menu::create($request->all());
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
    public function edit(Request $request)
    {
        $menus = Menu::where('id',$request->id)->first();
        //Вибираэмо значення для функціїї
        switch ($menus->menu_page) {
            case 'static.index':
                $links = StaticPage::orderBy('page_name')->pluck('page_name','id');
                break;
            case 'static.show':
                $links = StaticPage::orderBy('page_name')->pluck('page_name','id');
                break;
            case 'virtual.index':
                break;
            case 'virtual.show':
                break;
            case 'galery.index':
                break;
            case 'galery.show':

                break;

        }

        return view('admin.menu.edit', [
            'title_page' => 'Редагування пункту меню',
            'menu' => $menus,
            'menues' => Menu::with('children')->where('parent_id', '0')->orderBy('menu_sort')->get(),
            'function' => ModelFunction::orderBy('name')->get(),
            'link' => $links,
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
    public function update(Request $request)
    {
        Menu::find($request->id)->update($request->all());

        return redirect()->route('admin.menu.index');
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
