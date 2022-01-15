<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book as Books;


class Book extends Controller
{
    //
    public function addBook(){
        return view('add-book');
    }
    public function createBook(Request $request){
        $book = new Books();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->save();
        return back()->with('bookadded','new book inserted successfully');
    }

    public function getBook(){
        $books = Books::get();
        return view('all-books',compact('books'));
    }

}
