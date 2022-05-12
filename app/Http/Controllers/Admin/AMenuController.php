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

    public function search(Request $request)
    {
       /* return view('admin.menu.index',[
            'title_page' => 'Меню сайта',
            'menu' => Menu::where('name', 'LIKE', '%' . $request->search . '%')-->orderBy('sort')->get(),
            'delimiter'  => ''
        ]);
*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.menu.index',[
            'title_page' => 'Меню сайта',
            'menu' => Menu::with('children')->where('parent_id', '0')->orderBy('sort')->get(),
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
            'menues' => Menu::with('children')->where('parent_id', '0')->orderBy('sort')->get(),
            'function' => ModelFunction::orderBy('name')->get(),
            'links' => [],
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

    public function showselect(Request $request)
    {
        $sp = [$request->id =>'Поточна сторінка'];

        return json_encode($sp);
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
        $links = [];
        switch ($menus->page) {
            case 'static.index':
                $links = StaticPage::orderBy('name')->get();
                break;
            case 'static.show':
                $links = StaticPage::orderBy('name')->get();
                break;
            case 'virtual.index':
                break;
            case 'virtual.show':
                break;
            case 'galery.index':
                break;
            case 'galery.show':
                break;
            case 'menu.show':
                $links =Menu::where('id', $request->id)->orderBy('sort')->get();
                break;

        }
        //dd($links);
        return view('admin.menu.edit', [
            'title_page' => 'Редагування пункту меню',
            'menu' => $menus,
            'menues' => Menu::with('children')->where('parent_id', '0')->orderBy('sort')->get(),
            'function' => ModelFunction::orderBy('name')->get(),
            'links' => $links,
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

        /*if( $file = $request->file('imagefile') ) {
            $path = 'products/images';
            $url = $this->file($file,$path,134,193);
        }

        */
        $img='';
        if(strlen($request->imagefile)>4){
             $request->validate(['imagefile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);

            $imageName = time().'.'.$request->imagefile->extension();

            $request->imagefile->move(public_path('images/menu'), $imageName);

            $img=$imageName;

        }else{
            if(strlen($request->image)>4){
                $img=$request->image;
            }
        }

        $menu = Menu::findOrFail($request->id);

        $menu->update([

            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'page' => $request->page,
            'link' => $request->link,
            'sort' => $request->sort,
            'published' => $request->published,
            'image' =>$img,
        ]);



        //Menu::find($request->id)->update($request->all());

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
