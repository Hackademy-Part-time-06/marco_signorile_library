<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function author_index()
    {
        $authors = Author::all();
        return view('author_index',['authors'=>$authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function author_create()
    {
        return view('author_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function author_store(StoreAuthorRequest $request_aut)
    {
        Author::create([
            'name' => $request_aut-> name,
            'surname' => $request_aut-> surname,
            'date_birth' => $request_aut-> date_birth
        ]);
        return redirect()->route('author_index')->with('success', 'Inserimento avvenuto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function author_show(Author $author)
    {
        return view ('author_show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function author_edit(Author $author)
    {
        return view ('author_edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function author_update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update([
            'name'=>$request->input('name'),
            'surname'=>$request->surname,
            'date_birth'=>$request->date_birth,
        ]);
        return redirect()->route('author_index') ->with('success','Modifica effettuata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function author_destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author_index')->with('success','Canellazione effettuata');
    }
}
