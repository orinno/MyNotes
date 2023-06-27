<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(){
        $notes = Notes::all();
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request){
        $notes = new Notes();
        $notes->title = $request->title;
        $notes->content = $request->content;
        $notes->save();

        return back()->with('success', 'Note created successfully.');
    }

    public function update(Request $request, $id){
        $notes = Notes::find($id);
        $notes->title = $request->title;
        $notes->content = $request->content;
        $notes->save();
        return back()->with('success', 'Note updated successfully!');
    }

    public function destroy($id){
        $notes = Notes::find($id);
        $notes->delete();
        return back()->with('success', 'Note deleted successfully!');
    }

}
