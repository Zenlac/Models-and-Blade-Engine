<?php

namespace App\Http\Controllers;
use App\Models\Book;
class BookController extends Controller
{
    // public function index() {

    //     $data = DB::table("books")
    //     -> select ("id","isbn","title","author","description","date_published")
    //     -> get();

    //     dd($data);
        
    //     return view('Books.index', ['Books' => $data]);
    // }

    public function show(){
        $data=Book::all();
        return view('books',['books'=>$data]);
    }
}
