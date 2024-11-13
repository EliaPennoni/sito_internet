<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Website::all();
        return view('websites.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('websites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'required|url',
            'location' => 'nullable|string|max:255',
            'taken_at' => 'nullable|date',
            'category' => 'nullable|string|max:100',
        ]);

        Website::create($validatedData);
        return redirect()->route('websites.index')->with('success', 'Nuova foto aggiunta con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Website $website)
    {
        return view('websites.show', compact('website'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Website $website)
    {
        return view('websites.edit', compact('website'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Website $website)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'required|url',
            'location' => 'nullable|string|max:255',
            'taken_at' => 'nullable|date',
            'category' => 'nullable|string|max:100',
        ]);


        $website->update($validatedData);


        return redirect()->route('websites.index')->with('success', 'Foto aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Website $website)
    {

        $website->delete();


        return redirect()->route('websites.index')->with('success', 'Foto eliminata con successo!');
    }
}
