<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Books::with('autor')->get();
        return return response()->json($books);
    }
}
