<?php

namespace App\Http\Controllers;

use App\Models\Event;

use App\Models\Participant;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return Event::firstOrCreate([
            "libelle"=>$request->libelle,
            "date_event"=>$request->date,
            "user_id"=>$request->user_id
        ]) ;
    }

    public function associateEventWithClass(Request $request, $event)
    {
        $classeId= $request->classe_id;
        $participant = new Participant();
        $participant->classe_id = $classeId;
        $participant->event_id = $event;
        $participant->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
