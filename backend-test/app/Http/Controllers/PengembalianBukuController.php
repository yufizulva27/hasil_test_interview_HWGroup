<?php

namespace App\Http\Controllers;

use App\Models\PengembalianBuku;
use Illuminate\Http\Request;

class PengembalianBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookReturned = PengembalianBuku::paginate(10);
        return response()->json([
            'data' => $bookReturned
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
        $bookReturned = PengembalianBuku::create([
            'book_return_id' => $request->book_return_id,
            'returned_at' => $request->returned_at,
        ]);

        return response()->json([
            'data' => $bookReturned
        ]);
    }
}
