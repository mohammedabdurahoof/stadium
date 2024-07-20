<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\News;
use App\Models\Stadium;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $matches = Matches::all();
    return view('content.matches.index', compact('matches'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $stadia = Stadium::all();
    return view('content.matches.create', compact('stadia'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'match_date' => 'required|date',
      'match_time' => 'required|date_format:H:i',
      'description' => 'nullable|string',
      'team1' => 'nullable|string|max:255',
      'team2' => 'nullable|string|max:255',
      'team1_score' => 'nullable|integer|min:0',
      'team2_score' => 'nullable|integer|min:0',
      'crowd' => 'nullable|integer|min:0',
      'stadium_id' => 'required|exists:stadia,id',
    ]);

    Matches::create($request->all());

    return redirect()
      ->route('matches.index')
      ->with('success', 'Match created successfully.');
  }

  public function showAll()
  {
    $matchesAll = Matches::all();
    $matches = Matches::latest()
      ->take(4)
      ->get();

    return view('content.matches.matches', compact('matchesAll', 'matches'));
  }

  /**
   * Display the specified resource.
   */
  public function show(Matches $match)
  {

    $popularStadium = Stadium::latest()
      ->take(4)
      ->get();

    $latestNews = News::latest()
      ->take(4)
      ->get();

    $matches = Matches::latest()
      ->take(4)
      ->get();

      $match->load('stadium');

    return view('content.matches.show', compact('match', 'matches', 'popularStadium', 'latestNews'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Matches $match)
  {
    $stadia = Stadium::all();
    return view('content.matches.edit', compact('match', 'stadia'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Matches $match)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'match_date' => 'required|date',
      'match_time' => 'required|date_format:H:i',
      'description' => 'nullable|string',
      'team1' => 'nullable|string|max:255',
      'team2' => 'nullable|string|max:255',
      'team1_score' => 'nullable|integer|min:0',
      'team2_score' => 'nullable|integer|min:0',
      'crowd' => 'nullable|integer|min:0',
      'stadium_id' => 'required|exists:stadia,id',
    ]);

    $match->update($request->all());

    return redirect()
      ->route('matches.index')
      ->with('success', 'Match updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Matches $match)
  {
    $match->delete();

    return redirect()
      ->route('matches.index')
      ->with('success', 'Match deleted successfully.');
  }
}
