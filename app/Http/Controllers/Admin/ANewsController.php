<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newse;
use Illuminate\Http\Request;

class ANewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index',[
            'title_page' => 'Новини',
            'news' => Newse::latest()->paginate(20)
        ]);
    }

    public function indexselect()
    {
        return '';
    }

    public function search(Request $request)
    {
        return view('admin.news.index', [
            'title_page' => 'Новини',
            'news' => Newse::where('title', 'LIKE', '%' . $request->search . '%')->orwhere('text', 'LIKE', '%' . $request->search . '%')->latest()->paginate(20)
        ]);
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', [
            'title_page' => 'Редагування новини',
            'news' => []
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
        $news = Newse::create($request->only(['news_title','posted_at','news_author','news_text','news_frame','news_frame1']));
        return redirect()->route('admin.news.edit', $news)->withSuccess(__('posts.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newse  $newses
     * @return \Illuminate\Http\Response
     */
    public function show(Newse $newses)
    {
        //
    }

    public function showselect()
    {
        return '';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newse  $newses
     * @return \Illuminate\Http\Response
     */
    public function edit(Newse $newses)
    {

        return view('admin.news.edit', [
            'title_page' => 'Редагування новини',
            'news' => $newses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newses  $newses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newse $newses)
    {
        $newses->update($request->only(['news_title','posted_at','news_author','news_text','news_frame','news_frame1']));

        return redirect()->route('admin.posts.edit', $newses)->withSuccess(__('posts.updated'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newses  $newses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newse $newses)
    {
        //
    }
}
