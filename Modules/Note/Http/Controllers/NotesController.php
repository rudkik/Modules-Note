<?php

namespace Modules\Note\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Note\Entities\Note;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $notes = Note::all();
        return view('note::admin.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('note::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            // решил не прописывать
        ]);
        $note = new Note;
        $note->questions = $request->questions;
        $note->answer = $request->answer;
        $note->top = $request->top;
        $note->bottom = $request->bottom;
        $note->save();
        return redirect()->route('notes.index')->with('success','Company Has Been created successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Note $note)
    {
        return view('note::admin.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Note $note)
    {
        return view('note::admin.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          // решил не прописывать
        ]);
        $note = Note::find($id);
        $note->questions = $request->questions;
        $note->answer = $request->answer;
        $note->top = $request->top;
        $note->bottom = $request->bottom;
        $note->save();
        return redirect()->route('notes.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Note::where('id',$id)->delete();
        return redirect()->route('notes.index');
    }


    public function showAll(){
        $notes = Note::all();
        return view('note::index', ['notes' => $notes]);
    }
}
