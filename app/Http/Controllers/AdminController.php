<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Response;
use Storage;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.admin.index')->with('name', Auth::user()->name);
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
        $image = \Tinify\fromBuffer(file_get_contents($file))->resize(array('method' => 'cover','width' => 175,'height' => 175))->toBuffer();
        $move = Storage::disk('local')->put('media/' . $filename, $image);

        if($move){
            return Response::json(['file'=> ['filelink' => ['/media/'. $filename]]]);
        }else{
            return Response::json(['error'=>true]);
        }
    }

}
