<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function category_index(){
        $categories = Category::all();
        return view('category_index',['categories'=>$categories]);
    }
    public function category_create(){
        
        return view('category_create');
    }

    public function category_store(CategoryRequest $request_cat){

        Category::create([
            'name' => $request_cat-> name
        ]);
        return redirect()->route('category_index')->with('success', 'Inserimento avvenuto con successo!');
    }

    public function category_show(Category $category){
        return view ('category_show',compact('category'));
    }

    public function category_edit(Category $category){
        return view ('category_edit',compact('category'));
    }

    public function category_update(CategoryRequest $request, Category $category){
        $category->update([
            'name'=>$request->input('name'),
        ]);
        return redirect()->route('category_index') ->with('success','Modifica effettuata');
    }

    public function category_destroy(Category $category){
        $category->delete();
        return redirect()->route('category_index')->with('success','Canellazione effettuata');
    }
}
