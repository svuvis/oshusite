<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Http\Requests;
use App\Http\Requests\FacultiesRequest;

class FacultyController extends Controller
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
        $faculties = Faculty::all();
        return view('pages.admin.faculties.index',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.faculties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FacultiesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacultiesRequest $request)
    {
        Faculty::create($request->all());
        \Flash::success('Faculteit toegevoegd');
        return redirect('admin/faculties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('pages.admin.faculties.edit',compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FacultiesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacultiesRequest $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->update($request->all());
        \Flash::success('Faculteit aangepast');
        return redirect('admin/faculties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        \Flash::success('Faculteit verwijderd');
        return redirect('admin/faculties');
    }
}
