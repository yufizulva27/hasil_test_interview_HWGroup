<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loansBook = PeminjamanBuku::paginate(10);
        return response()->json([
            'data' => $loansBook
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loansBook = PeminjamanBuku::create([
            'book_id' => $request->book_id,
            'borrowed_at' => $request->borrowed_at,
        ]);

        return response()->json([
            'data' => $loansBook
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeminjamanBuku  $peminjamanBuku
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanBuku $peminjamanBuku)
    {
        return response()->json([
            'data' => $peminjamanBuku
        ]);
    }

    public function borrowedBooks()
    {
        $borrowedBooks = PeminjamanBuku::where('borrowed_at')->with('book')->get();

        return response()->json($borrowedBooks);
    }
}
