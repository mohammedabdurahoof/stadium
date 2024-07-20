<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Matches;
use App\Models\News;
use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
  public function index()
  {
    $news = News::latest()
      ->take(3)
      ->get();;
    $stadium = Stadium::all();
    $stadiumByState = Stadium::select('state', DB::raw('count(*) as total'))
      ->groupBy('state')
      ->get();
    $matches = Matches::latest()
      ->take(4)
      ->get();

    return view('content.landing.home', compact('news', 'stadium', 'stadiumByState', 'matches'));
  }
}
