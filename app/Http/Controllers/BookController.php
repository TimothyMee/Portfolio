<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.create');
    }

    protected function create(array $data)
    {
        Book::create([
            'title' => $data['title'],
            'year' => $data['year'],
            'volume' => Hash::make($data['volume']),
            'genre' => $data['genre'],
            'author' => Auth::id()
        ]);

        return view('book.create')->with(['sucess'=> 'sucess']);
    }
    //
}
