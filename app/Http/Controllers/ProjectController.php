<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

   // app/Http/Controllers/ProjectController.php

public function store(Request $request)
{
    $project = Project::create($request->only(['name', 'description', 'github_url']));

    // Koppel afbeeldingen (stel dat je een array van image IDs binnenkrijgt)
    if ($request->has('image_ids')) {
        $project->images()->sync($request->input('image_ids'));
    }

    return redirect()->back()->with('succes', 'Project succesvol aangemaakt met fotos.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
