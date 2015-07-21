<?php namespace App\Http\Controllers;


use App\News;
use Storage;

class PublicController extends Controller
{

    public function index()
    {
        Storage::put('file5.txt', 'test');
        $news = News::latest()->get();
        return view('pages.public.index')->with('news',$news);
    }

    public function oshu()
    {
        return view('pages.public.oshu');
    }

    public function bestuur()
    {
        return view('pages.public.bestuur');
    }

    public function agenda()
    {
        return view('pages.public.agenda');
    }

    public function uvis()
    {
        return view('pages.public.studieverenigingen.fnt.uvis');
    }

    public function uranymus()
    {
        return view('pages.public.studieverenigingen.fnt.v-v-s-uranymus');
    }

    public function cabo()
    {
        return view('pages.public.studieverenigingen.fnt.cabo-bianci');
    }

    public function utv()
    {
        return view('pages.public.studieverenigingen.fnt.u-t-v');
    }

    public function ingenium()
    {
        return view('pages.public.studieverenigingen.fnt.sv-ingenium');
    }

    public function paramedus()
    {
        return view('pages.public.studieverenigingen.fg.s-v-paramedus');
    }

    public function so2s()
    {
        return view('pages.public.studieverenigingen.fg.so2s');
    }

    public function lef()
    {
        return view('pages.public.studieverenigingen.fcj.sv-lef');
    }

    public function vox()
    {
        return view('pages.public.studieverenigingen.fcj.vox');
    }

    public function mad()
    {
        return view('pages.public.studieverenigingen.fcj.mad');
    }

    public function codex()
    {
        return view('pages.public.studieverenigingen.fmr.codex');
    }

    public function haerem()
    {
        return view('pages.public.studieverenigingen.fmr.haerem');
    }

    public function vesta()
    {
        return view('pages.public.studieverenigingen.fmr.vesta');
    }

    public function forum()
    {
        return view('pages.public.studieverenigingen.fem.forum');
    }


}
