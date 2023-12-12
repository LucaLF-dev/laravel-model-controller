<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // elenco dei servizi dal DB
        $movies = Movie::all(); // SELECT * FROM `movies`
        // dd($books);

        return view('guest.index', compact('books'));
    }
}
