<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $songs = [
        ['title' => 'Imagine', 'artist' => 'John Lennon', 'year' => 1971, 'genre' => 'Rock'],
        ['title' => 'Bohemian Rhapsody', 'artist' => 'Queen', 'year' => 1975, 'genre' => 'Rock'],
        ['title' => 'Billie Jean', 'artist' => 'Michael Jackson', 'year' => 1982, 'genre' => 'Pop'],
        ['title' => 'Hotel California', 'artist' => 'Eagles', 'year' => 1976, 'genre' => 'Rock'],
    ];

    return response()->json($songs, 200);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
