<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Requests\EventsRequest;
use Response;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $events = Event::orderBy('endtime')->get();
        return view('pages.admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventsRequest $request
     * @return Response
     * @internal param $
     */
    public function store(EventsRequest $request)
    {
        Event::create($request->all());
        \Flash::success('Agenda evenement gepubliceerd');
        return redirect('admin/events');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('pages.admin.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventsRequest $request
     * @param  int $id
     * @return Response
     * @internal param $
     */
    public function update(EventsRequest $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        \Flash::success('Agenda evenement aangepast');
        return redirect('admin/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        \Flash::success('Agenda evenement verwijderd');
        return redirect('admin/events');
    }
}
