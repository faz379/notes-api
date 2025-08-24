<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Resources\NoteResource;
use App\Http\Requests\NoteCreateRequest;
use App\Http\Requests\NoteUpdateRequest;

class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        $notes = Note::all();
        return response()->json([
            'data' => NoteResource::collection($notes)
        ], 200, [], JSON_PRETTY_PRINT);
    }

    public function show(Note $note)
    {
        return response()->json([
            'data' => new NoteResource($note)
        ], 200, [], JSON_PRETTY_PRINT);
    }

    public function store(NoteCreateRequest $request)
    {
        $note = Note::create([
            'user_id' => auth()->id(),
            'title'   => $request->title,
            'content' => $request->content,
        ]);
    
        return response()->json([
            'message' => 'Note created successfully',
            'data' => $note
        ], 201, [], JSON_PRETTY_PRINT);

        if ($user = auth()->user()) {
            $note->user()->associate($user);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
    

    public function update(NoteUpdateRequest $request, Note $note)
    {
        $note->update($request->validated());

        return response()->json([
            'message' => 'Note updated successfully',
            'data' => new NoteResource($note->fresh())
        ], 200, [], JSON_PRETTY_PRINT);

    }

    public function destroy(Note $note)
    {
        $note->delete();

        return response()->json(['message' => 'Note deleted'], 200);
    }
}
