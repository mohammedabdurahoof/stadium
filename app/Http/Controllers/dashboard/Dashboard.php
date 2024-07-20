<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Matches;
use App\Models\News;
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
    $matchesCount = Matches::count();
    return view('content.dashboard.dashboard', compact('adminsCount', 'newsCount', 'stadiumCount', 'matchesCount'));
  }
}
