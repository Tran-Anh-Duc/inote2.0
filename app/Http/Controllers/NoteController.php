<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Repositories\NoteRepository;
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
        $categories = $this->noteRepository->getAllCategory();
        return view('backend.note.create',compact('categories'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        $data = $request->all();
//        User::query()->create($data);
//        $note = new Note();
//        $note->title = $request->title;
//        $note->content = $request->content;
//        $note->categoryid = $request->categoryid;
//        $note->save();
        $note = $this->noteRepository->create($request);
        return redirect()->route('note.list');
    }

    public function showFormEdit($id)
    {
        $categories = $this->noteRepository->getAllCategory();
        $note = Note::query()->findOrFail($id);
        return view('backend.note.edit',compact('note','categories'));
    }

    public function update(Request $request,$id): \Illuminate\Http\RedirectResponse
    {
        $note = Note::query()->findOrFail($id);
        $data = $request->only('title','content','categoryid');
        $data['categoryid'] = $request->input('category');
        Note::query()->where('id','=',$id)->update($data);
        return redirect()->route('note.list');

    }

//    public function delete($id): \Illuminate\Http\RedirectResponse
//    {
//        $note = Note::query()->findOrFail($id);
//        $note->delete();
//        echo "success delete product";
//        return redirect()->route('note.list');
//    }

}
