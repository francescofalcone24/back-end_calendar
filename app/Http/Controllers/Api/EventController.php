<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $data = [
            'events' => $events,
        ];
        return response()->json($data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);

        // validiamo i dati "a mano" per poter gestire la risposta
        $validator = Validator::make($data, [

            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'user_email' => 'required|email',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                // la funzione errors() della classe Validator resituisce un array
                // in cui la chiave è il campo soggetto a validazione
                // e il valore è un array di messaggi di errore
                'errors' => $validator->errors()
            ]);
        }

        // salviamo a db i dati inseriti nel form di contatto
        $new_event = new Event();
        $new_event->fill($data);
        $new_event->save();

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $eventId = $request->id;
        $event = Event::find($eventId);
        if ($event) {
            $event->delete();
            return response()->json([
                'success' => true,
            ]);
        }
    }
}
