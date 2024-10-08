<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Books/Index', [
            'books' => Book::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Books/Create', [
            'authors' => Author::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        \Log::debug($request);
        $author = new Book($request->input());
        $author->save();

        return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return Inertia::render('Books/Show', [
            'book' => $book,
            'authors' => $book->authors
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        return Inertia::render('Books/Edit', [
            'authors' => Author::all(),
            'book' => $book,
            'authorsOfBook' => $book->authors
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();

        return redirect('books')->with('success', 'Book deleted'); // Enviar un mensaje flash a la vista
    }
}
