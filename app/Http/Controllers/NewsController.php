<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\News;
use App\Models\Stadium;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $news = News::all();
    return view('content.news.index', compact('news'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('content.news.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'content' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(public_path('uploads/images'), $imageName);

    $request['featured_image'] = $imageName;

    News::create($request->all());

    return redirect()
      ->route('news.index')
      ->with('success', 'News created successfully.');
  }

  public function showAll()
  {
    $news = News::all();
    $matches = Matches::latest()
      ->take(4)
      ->get();

    return view('content.news.news', compact('news', 'matches'));
  }

  /**
   * Display the specified resource.
   */


  public function show(News $news)
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

    return view('content.news.show', compact('news', 'matches', 'popularStadium', 'latestNews'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(News $news)
  {
    return view('content.news.edit', compact('news'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, News $news)
  {
    $request->validate([
      'title' => 'required',
      'content' => 'required',
      'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    if ($request->image) {
      $oldImagePath = public_path('uploads/images/' . $news->featured_image);

      if (file_exists($oldImagePath)) {
        unlink($oldImagePath);
      }

      $imageName = time() . '.' . $request->image->extension();

      $request->image->move(public_path('uploads/images'), $imageName);

      $request['featured_image'] = $imageName;
    }

    $news->update($request->all());

    return redirect()
      ->route('news.index')
      ->with('success', 'News updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(News $news)
  {
    $news->delete();

    return redirect()
      ->route('news.index')
      ->with('success', 'News deleted successfully.');
  }
}
