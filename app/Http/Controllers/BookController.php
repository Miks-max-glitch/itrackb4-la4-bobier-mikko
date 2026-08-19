<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'year' => 1954],
            ['title' => 'Spiderman', 'author' => 'Lhorenz', 'year' => 2005],
            ['title' => 'The Return of the King', 'author' => 'Khaliq', 'year' => 1999],
            ['title' => 'World of Warcraft', 'author' => 'Lenard', 'year' => 1943],
            ['title' => 'The Hobbit', 'author' => 'Justin', 'year' => 1954],
        ];
        return view('books.index', ['books' => $books]);
    }
}
