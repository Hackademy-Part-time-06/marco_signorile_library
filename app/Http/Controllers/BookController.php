<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookEditRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\InsertMail;
use App\Models\Author;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('index',['books'=>$books]);
    }

    public function create(){
        $authors = Author::all();
        return view('create', compact('authors'));
    }

    public function store(BookRequest $request){

        $path_image = '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }

        Book::create([
            'title' => $request-> title,
            'author_id' => $request-> author_id,
            'pages'=>$request-> pages,
            'year' => $request-> year,
            'mail'=>$request->mail,
            'image'=>$path_image
        ]);
        $data=['mail'=>$request->mail,
        'title' => $request-> title];
        Mail::to($request->mail)->send(new InsertMail($data));
        return redirect()->route('index')->with('success', 'Creazione avvenuta con successo!');
    }

    public function show(Book $book){
        return view ('show',compact('book'));
    }
    //public function send(BookRequest $request){
    //    $data=['title'=>$request->title,
    //    'mail'=>$request->mail,
    //];
    //Mail::to($request->mail)->send(new InsertMail($data));
    //}

    public function edit(Book $book){
        $authors = Author::all();
        return view ('edit',compact('book','authors'));
    }

    public function update(BookEditRequest $request, Book $book){
        $path_image = $book->image;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }
        $book->update([
            'title'=>$request->input('title'),
            'author_id'=>$request->author_id,
            'pages'=>$request->pages,
            'year'=>$request->year,
            'image'=>$path_image
        ]);
        return redirect()->route('index') ->with('success','Modifica effettuata');
    }

    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('index')->with('success','Canellazione effettuata');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index','show','category_index','category_show');
    }
}