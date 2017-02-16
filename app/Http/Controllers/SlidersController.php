<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SlidersRequest;
use App\Slider;
use Flash;
use Illuminate\Http\Request;
use Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('pages.admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SlidersRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlidersRequest $request)
    {
        $file = $request->file('picture');
        $filename = 'oshu'.uniqid('', true).'.'.$file->getClientOriginalExtension();


        \Tinify\setKey(\Config::get('services.tinify.key'));
        $image = \Tinify\fromBuffer(file_get_contents($file))->resize(array('method' => 'scale','height' => 299))->toBuffer();
        Storage::disk('local')->put('media/' . $filename, $image);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->picture = '/media/'.$filename;
        $slider->save();


        Flash::success('Slider opgeslagen');
        return redirect('admin/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        Flash::success('Slider verwijderd');
        return redirect('admin/sliders');
    }
}
