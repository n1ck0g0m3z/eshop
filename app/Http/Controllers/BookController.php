<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Book;

class BookController extends Controller
{
    public function getIndex()
  {
    $books = Book::all();

    return view('book_list')->with('books',$books);
  }
}
