<?php namespace App\Http\Controllers;


use App\BoardMember;
use App\Event;
use App\Example;
use App\News;
use App\Notule;
use App\Page;
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
        $page = Page::where('slug', 'oshu')->first();
        if($page == null){
            $new = new Page();
            $new->slug = 'oshu';
            $new->nav_title = 'OSHU - Wat doen we?';
            $new->title = 'test';
            $new->body = 'test';
            $new->save();
        }
        $page = Page::where('slug', 'oshu')->first();
        $examples =  Example::all();
        return view('pages.public.oshu',compact('page','examples'));
    }

    public function news($page)
    {
        Carbon::setLocale('nl');
        $posts = News::all()->count();
        $pages = ceil($posts / 3);
        if($page > $pages){
            return redirect('nieuws/pagina-1');
        }
        $news = News::latest()->skip(($page - 1) * 3)->take(3)->get();
        return view('pages.public.news')->with(['news' => $news,'page' => $page, 'pages' => $pages]);
    }

    public function article($slug)
    {
        Carbon::setLocale('nl');
        $article = News::where('slug',$slug)->first();
        return view('pages.public.article')->with('article',$article);
    }

    public function bestuur()
    {
        $members = BoardMember::all();
        return view('pages.public.bestuur',compact('members'));
    }

    public function agenda()
    {
        $events = Event::orderBy('endtime')->get();
        return view('pages.public.agenda',compact('events'));
    }

    public function notulen()
    {
        $notulen = Notule::all()->sortBy('date');
        return view('pages.public.notulen',compact('notulen'));
    }


    public function upload(Request $request)
    {

        $file = $request->file('file');

        $v = Validator::make(
            $request->all(),
            ['file' => 'required|mimes:jpeg,jpg,png|max:10000']
        );

        if($v->fails()) {
            return Response::json(['error' => $v->errors()]);
        }

        //Use some method to generate your filename here. Here we are just using the ID of the image
        $filename = 'oshu'.uniqid('', true).'.'.$file->getClientOriginalExtension();

        //Push file to S3
        \Tinify\setKey(\Config::get('services.tinify.key'));
        $image = \Tinify\fromBuffer(file_get_contents($file))->resize(array('width' => 1920,'height' => 1080))->toBuffer();
        $move = Storage::disk('s3')->put('oshu/' . $filename, $image);
        Storage::disk('s3')->setVisibility('oshu/'.$filename, 'public');

        if($move){
            return Response::json(['filelink'=>'http://cdn.oshu.nl/'. $filename]);
        }else{
            return Response::json(['error'=>true]);
        }
    }



}
