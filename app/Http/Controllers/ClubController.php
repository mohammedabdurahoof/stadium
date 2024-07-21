<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Http\Controllers\Controller;
use App\Models\Matches;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('content.clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'club_name' => 'required|string|max:255',
            'no_matches' => 'required|integer|min:0',
            'total_crowds' => 'required|integer|min:0',
            'average_crowds' => 'required|integer|min:0',
            'season' => 'required|string|max:255',
        ]);

        Club::create($request->all());

        return redirect()
            ->route('clubs.index')
            ->with('success', 'Club created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Club $club)
    {
        $clubs = Club::all();
        $matches = Matches::latest()
            ->take(4)
            ->get();

        return view('content.clubs.show', compact('clubs', 'matches'));
    }

    public function getBySeason($season)
    {
        $clubs = Club::where('season', $season)->get();
        return response()->json($clubs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        return view('content.clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        $request->validate([
            'club_name' => 'required|string|max:255',
            'no_matches' => 'required|integer|min:0',
            'total_crowds' => 'required|integer|min:0',
            'average_crowds' => 'required|integer|min:0',
            'season' => 'required|string|max:255',
        ]);

        $club->update($request->all());

        return redirect()
            ->route('clubs.index')
            ->with('success', 'Club updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        $club->delete();

        return redirect()
            ->route('clubs.index')
            ->with('success', 'Club deleted successfully.');
    }
}
