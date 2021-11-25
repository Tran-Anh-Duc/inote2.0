<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\NoteRepositories\NoteRepository;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    protected $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
        $notes = $this->noteRepository->getAll();
        return view("backend.note.list",compact('notes'));
    }

    public function getById($id)
    {
        $note = $this->noteRepository->getById($id);
        return view('backend.note.detail',compact('note'));
    }
    public function showCreateForm()
    {
        return view('backend.note.create');
    }

    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
        return redirect()->route('note.list');
    }

    public function showFormEdit($id)
    {
        $note = Note::query()->findOrFail($id);
        return view('backend.note.edit',compact('note'));
    }

    public function update(Request $request,$id)
    {
        $note = Note::query()->findOrFail($id);
        $data = $request->only('title','content');
        Note::query()->where('id','=',$id)->update($data);
        return redirect()->route('note.list');

    }

    public function delete($id)
    {
        $note = Note::query()->findOrFail($id);
        $note->delete();
        echo "success delete product";
        return redirect()->route('note.list');
    }




}
