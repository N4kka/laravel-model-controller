<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class Movies extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }

    public function details() {
        $chosen_movie = Movie::where('author', 1)
        ->get();

        return view('details', compact('details'));
    }
}
