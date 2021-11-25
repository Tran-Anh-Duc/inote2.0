<?php

namespace App\NoteRepositories;

use App\Models\Note;

class NoteRepository
{
    public function getAll()
    {
        return Note::all();
    }

    public function getById($id)
    {
        return Note::findOrFail($id);
    }
}
