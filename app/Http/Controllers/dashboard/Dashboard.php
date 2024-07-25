<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Matches;
use App\Models\News;
use App\Models\Season;
use App\Models\Stadium;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
  public function index()
  {
    $adminsCount = User::count();
    $newsCount = News::count();
    $stadiumCount = Stadium::count();
    $clubsCount = Club::count();
    $seasons = Season::all();
    return view('content.dashboard.dashboard', compact('adminsCount', 'newsCount', 'stadiumCount', 'seasons', 'clubsCount'));
  }

  public function showSeason($id)
  {
    $season = Season::find($id);
    return response()->json($season);
  }

  function updateSeason(Request $request, Season $season)
  {
    $request->validate([
      'matches' => 'required|integer|min:0',
      'total' => 'required|integer|min:0',
      'avg' => 'required|numeric|min:0',
      'high' => 'required|integer|min:0',
      'low' => 'required|integer|min:0',
    ]);

    $season->update($request->all());
    // return redirect()
    //   ->route('dashboard')
    //   ->with('success', 'Season updated successfully.');

    return response()->json(['success' => true]);
  }
}
