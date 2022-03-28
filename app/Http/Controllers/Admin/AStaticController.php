<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPage;


class AStaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.static.index', [
            'title_page' => 'Статисничні сторінки',
            'statics' => StaticPage::orderBy('id')->paginate(10),
        ]);

    }

    public function search(Request $request)
    {
        return view('admin.static.index', [
            'title_page' => 'Статисничні сторінки',
            'statics' => StaticPage::where('name', 'LIKE', '%' . $request->search . '%')->paginate(10),
        ]);
//        'news' => Newse::where('news_title', 'LIKE', '%' . $request->search . '%')->orwhere('news_text', 'LIKE', '%' . $request->search . '%')->latest()->paginate(20)
    }

    public function indexselect()
    {
        // для створення меню
        $sp = StaticPage::orderBy('name')->pluck('name','id');

        return json_encode($sp);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.static.create', [
            'title_page' => 'Створення сторінки',
            'statics' => [],

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showselect()
    {
        // для створення меню
        $sp = StaticPage::orderBy('name')->pluck('name','id');

        return json_encode($sp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('admin.static.edit', [
            'title_page' => 'Редагування сторінки',
            'statics' => StaticPage::where('id',$request->id)->first(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        StaticPage::find($request->id)->update($request->all());

        return redirect()->route('admin.static.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
