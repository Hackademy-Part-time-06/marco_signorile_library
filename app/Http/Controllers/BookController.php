<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookEditRequest;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\InsertMail;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('index',['books'=>$books]);
    }

    public function create(){
        $authors = Author::all();
        $categories = Category::all();
        return view('create', compact('authors', 'categories'));
    }

    public function store(BookRequest $request){

        $path_image = '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }

        $book = Book::create([
            'title' => $request-> title,
            'author_id' => $request-> author_id,
            'category_id'=>$request-> category_id,
            'pages'=>$request-> pages,
            'year' => $request-> year,
            'mail'=> Auth::user()->email,
            'image'=>$path_image,
            'user_id' => Auth::user()->id
        ]);

        $book->categories()->attach($request-> categories);

        $data=['mail'=>Auth::user()->email,
        'title' => $request-> title];
        Mail::to(Auth::user()->email)->send(new InsertMail($data));
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

        if (!(Auth::user()->id == $book->user_id)) {
            abort(401);
        }

        $authors = Author::all();
        $categories = Category::all();
        return view('edit', ['book' => $book, 'authors' => $authors, 'categories' => $categories]);
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

        $book->categories()->sync($request->categories);
        return redirect()->route('index') ->with('success','Modifica effettuata');
    }

    public function destroy(Book $book){
        $book->categories()->detach();
        $book->delete();
        return redirect()->route('index')->with('success','Cancellazione effettuata');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index','show','category_index','category_show');
    }

    public function my_index(){
        //$books = Book::all();
        if(Auth::user()){
            $books = Book::where('user_id',Auth::user()->id)->get();
        }else{
            $books = Book::all();
        }
        return view('my_index',['books'=>$books]);
    }
}