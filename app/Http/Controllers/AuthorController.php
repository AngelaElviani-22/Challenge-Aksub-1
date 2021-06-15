<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('author.list', compact('authors'));
    }

    public function create(){
        return view('author.create');
    }

    public function store(Request $request){
        Author::create([
            'name'=>$request->name,
            'address'=>$request->address
        ]);
        return back();
    }

    public function detail($id){
        $author = Author::findOrFail($id);
        return view('author.detail', compact('author'));
    }
}
