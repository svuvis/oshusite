<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\NotulenRequest;
use App\Notule;
use Storage;

class NotulenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notulen = Notule::all();
        return view('pages.admin.notulen.index',compact('notulen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.notulen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NotulenRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotulenRequest $request)
    {
        $file = $request->file('notule');


        $filename = 'oshu'.$request->date.'-'.uniqid('', true).'.'.$file->getClientOriginalExtension();

        Storage::disk('s3')->put('oshu/' . $filename, file_get_contents($file));
        Storage::disk('s3')->setVisibility('oshu/'.$filename, 'public');

        $notule = new Notule();
        $notule->date = $request->date;
        $notule->url = 'http://cdn.oshu.nl/'. $filename;
        $notule->save();

        \Flash::success('Notule opgeslagen');
        return redirect('admin/notulen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notule = Notule::findOrFail($id);
        $notule->delete();
        \Flash::success('Notule verwijderd');
        return redirect('admin/notulen');
    }
}
