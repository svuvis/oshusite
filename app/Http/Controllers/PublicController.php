<?php namespace App\Http\Controllers;


use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Response;
use Storage;
use Validator;

class PublicController extends Controller
{

    public function index()
    {
        Carbon::setLocale('nl');
        $news = News::latest()->take(3)->get();
        return view('pages.public.index')->with('news', $news);
    }

    public function oshu()
    {
        return view('pages.public.oshu');
    }

    public function news($page)
    {
        Carbon::setLocale('nl');
        $posts = News::all()->count();
        $pages = ceil($posts / 3);
        if($page > $pages){
            return redirect('nieuws/1');
        }
        $news = News::latest()->skip(($page - 1) * 3)->take(3)->get();
        return view('pages.public.news')->with(['news' => $news,'page' => $page, 'pages' => $pages]);
    }

    public function article($id)
    {
        Carbon::setLocale('nl');
        $article = News::find($id);
        return view('pages.public.article')->with('article',$article);
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

    public function upload(Request $request)
    {
        if(!$request->hasFile('file'))
            return Response::json(['error' => 'No File Sent']);

        if(!$request->file('file')->isValid())
            return Response::json(['error' => 'File is not valid']);

        $file = $request->file('file');

        $v = Validator::make(
            $request->all(),
            ['file' => 'required|mimes:jpeg,jpg,png|max:10000']
        );

        if($v->fails())
            return Response::json(['error' => $v->errors()]);

        //Use some method to generate your filename here. Here we are just using the ID of the image
        $filename = 'oshu'.uniqid('', true).'.'.$file->getClientOriginalExtension();

        //Push file to S3
        \Tinify\setKey(\Config::get('services.tinify.key'));
        $image = \Tinify\fromBuffer(file_get_contents($file))->resize(array('width' => 1920,'height' => 1080))->toBuffer();
        $move = Storage::disk('s3')->put('oshu/' . $filename, $image);
        Storage::disk('s3')->setVisibility('oshu/'.$filename, 'public');

        if($move){
            return Response::json(['filelink'=>'http://d3ie1hv55ztzyy.cloudfront.net/'. $filename]);
        }else{
            return Response::json(['error'=>true]);
        }
    }



}
