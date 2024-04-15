<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    public function index() {

        $data = DB::table("books")
        -> select ("id","isbn","title","author","description","date_published")
        -> get();

        dd($data);

        return view('app',['app' => $data]);
    }
}
