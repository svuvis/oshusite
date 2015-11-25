<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PagesRequest;
use App\Page;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $page = Page::where('slug', 'oshu')->first();
        if($page == null){
            $new = new Page();
            $new->slug = 'oshu';
            $new->nav_title = 'OSHU';
            $new->title = 'test';
            $new->body = 'test';
            $new->save();
        }
        $page = Page::where('slug', 'oshu')->first();
        return view('pages.admin.pages.edit', compact('page'));
    }


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
