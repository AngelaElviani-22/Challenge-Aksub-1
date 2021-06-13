<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('create');
    }

    public function store(Request $request) {
        Book::create([
            'title' => $request-> book_title,
            'description' => $request-> desc,
            'price' => $request-> price
        ]);
        return redirect('/');
    }

    public function listBook(){
        $books = Book::all();
        return view('list', compact('books'));
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    public function update($id, Request $request){
        book::findOrFail($id)->update([
            'title' => $request-> book_title,
            'description' => $request-> desc,
            'price' => $request-> price 
        ]);
        return redirect('/book');
    }

    public function delete($id){
        book::destroy($id);
        return back();
    }
}
