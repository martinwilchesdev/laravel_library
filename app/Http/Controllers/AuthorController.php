<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Country;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $countries = Country::all();
        $authors = Author::with(['countries:id,country', 'books:title'])->get();

        return Inertia::render('Authors/Index', [
            'countries' => $countries,
            'authors' => $authors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:80',
            'last_name' => 'required|max:80',
            'country_id' => 'required|numeric',
        ]);

        $author = new Author($request->input());
        $author->save();

        return redirect('authors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
        $request->validate([
            'name' => 'required|max:80',
            'last_name' => 'required|max:80',
            'country_id' => 'required|numeric',
        ]);

        $author->update($request->input());

        return redirect('authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();

        return redirect('authors');
    }
}
