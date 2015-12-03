<?php

namespace App\Http\Controllers;

use App\Association;
use App\Faculty;
use App\Http\Requests;
use App\Http\Requests\AssociationsRequest;

class AssociationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        $associations = Association::all();
        return view('pages.admin.associations.index',compact('associations','faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::lists('title','id');
        return view('pages.admin.associations.create',compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AssociationsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociationsRequest $request)
    {
        Association::create($request->all());
        \Flash::success('Vereniging toegevoegd');
        return redirect('admin/associations');
    }

    /**
     * Display the specified resource.
     *
     * @param $faculty
     * @param $association
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($faculty,$association)
    {
        $slug = $faculty;
        $association = Association::where('slug',$association)->firstOrFail();
        return view('pages.public.studieverenigingen.empty',compact('association','slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association = Association::findOrFail($id);
        $faculties = Faculty::lists('title','id');
        return view('pages.admin.associations.edit',compact('faculties','association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AssociationsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssociationsRequest $request, $id)
    {
        $association = Association::findOrFail($id);
        $association->update($request->all());
        \Flash::success('Vereniging aangepast');
        return redirect('admin/associations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $association = Association::findOrFail($id);
        $association->delete();
        \Flash::success('Vereniging verwijderd');
        return redirect('admin/associations');
    }
}
