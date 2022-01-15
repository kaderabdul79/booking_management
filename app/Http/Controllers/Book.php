<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    //
    public function addBook(){
        return view('add-book');
    }
}
