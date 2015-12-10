<?php

namespace App\Http\Controllers;

use App\Example;
use App\Http\Requests\ExamplesRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examples = Example::all();
        return view('pages.admin.examples.index',compact('examples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.examples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ExamplesRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamplesRequest $request)
    {
        Example::create($request->all());
        \Flash::success('Voorbeeld opgeslagen');
        return redirect('admin/examples');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $example = Example::findOrFail($id);
        return view('pages.admin.examples.edit',compact('example'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ExamplesRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExamplesRequest $request, $id)
    {
        $example = Example::findOrFail($id);
        $example->update($request->all());
        \Flash::success('Voorbeeld aangepast');
        return redirect('admin/examples');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $example = Example::findOrFail($id);
        $example->delete();
        \Flash::success('Voorbeeld verwijderd');
        return redirect('admin/examples');
    }
}
