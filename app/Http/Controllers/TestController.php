<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ParameterBag;


class TestController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,Note $note)
    {
        $index= $request->input('index',0);
        
        $note = Note::all();

        return response()->json($note[$index]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $notes,Request $request)
    {
            /*
            $notes->update([
                'title'=>$request->input('title'),
                'content'=>$request->input('content')
            ]);
            */
            //$notes = Note::all();
            //$notes=$request->input('notes');                         
            
        //return view('notes.kami',compact('notes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
