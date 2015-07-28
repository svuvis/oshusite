<?php

namespace App\Http\Controllers;

use App\BoardMember;
use App\Http\Requests;
use App\Http\Requests\BoardMemberRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BoardMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $members = BoardMember::all();
        return view('pages.admin.boardmembers.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.admin.boardmembers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BoardMemberRequest $request
     * @return Response
     * @internal param $BoardMemberRequest
     */
    public function store(BoardMemberRequest $request)
    {
        BoardMember::create($request->all());
        \Flash::success('Bestuurslid toegevoegd');
        return redirect('admin/board_members');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $member = BoardMember::findOrFail($id);
        return view('pages.admin.boardmembers.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $member = BoardMember::findOrFail($id);
        $member->update($request->all());
        \Flash::success('Bestuurslid aangepast');
        return redirect('admin/board_members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $member = BoardMember::findOrFail($id);
        $member->delete();
        \Flash::success('Bestuurslid verwijderd');
        return redirect('admin/board_members');
    }
}
