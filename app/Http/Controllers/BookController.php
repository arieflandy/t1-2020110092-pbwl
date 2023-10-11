<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::paginate(10);
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('book.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|integer',
            'judul' => 'required|string|max:255',
            'halaman' => 'required|integer',
            'katagori' => 'required|string',
            'penerbit' => 'required|string',
        ]);

        $book = Book::create([
            'isbn' => $validated['isbn'],
            'judul' => $validated['judul'],
            'halaman' => $validated['halaman'],
            'katagori' => $validated['katagori'],
            'penerbit' => $validated['penerbit'],
            'published_at' => $request->has('is_published') ? Carbon::now() : null,
        ]);

        return redirect()->route('book.index')->with('success', 'berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $validated = $request->validate([
            'isbn' => 'required|integer',
            'judul' => 'required|string|max:255',
            'halaman' => 'required|integer',
            'katagori' => 'required|string',
            'penerbit' => 'required|string',
        ]);

        $book ->update([
            'isbn' => $validated['isbn'],
            'judul' => $validated['judul'],
            'halaman' => $validated['halaman'],
            'katagori' => $validated['katagori'],
            'penerbit' => $validated['penerbit'],
            'published_at' => $request->has('is_published') ? Carbon::now() : null,
        ]);

        return redirect()->route('book.index')->with('success', 'berhasil di edit.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index')->with('success', 'berhasil di hapus');
    }
}
