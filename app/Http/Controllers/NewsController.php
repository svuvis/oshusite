<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('pages.admin.news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        $request->merge(array('slug' => \Str::slug($request->slug)));
        News::create($request->all());
        return redirect('admin/news');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('pages.admin.news.edit')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = News::findOrFail($id);
        $request->merge(array('slug' => \Str::slug($request->slug)));
        $news->update($request->all());
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('admin/news');
    }
}
