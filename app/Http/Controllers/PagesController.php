<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PagesRequest;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit()
    {
        $page = Page::where('slug', 'oshu')->first();
        return view('pages.admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(PagesRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->body = $request->body;
        $page->save();
        \Flash::success('Pagina aangepast');
        return redirect('admin');
    }

}
