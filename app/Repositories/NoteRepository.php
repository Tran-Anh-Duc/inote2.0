<?php

namespace App\Repositories;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteRepository extends BaseRepository
{
    public function __construct(Note $note)
    {
        parent::__construct($note);
    }

    public function getAll()
    {
        return Note::all()->toQuery()->paginate(3);

    }

    public function getById($id)
    {
        return Note::findOrFail($id);
    }

    public function create(Request $request)
    {
        $data = $request->only('title','content','categoryid');
        $data['categoryid'] = $request->input('category');
        $note = Note::create($data);
        return $note;
    }
}
