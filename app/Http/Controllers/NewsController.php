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
      'image' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $images = [];

    if ($request->hasfile('image')) {
      foreach ($request->file('image') as $file) {
        $name = time() . rand(1, 100) . '.' . $file->extension();
        $file->move(public_path('uploads/images'), $name);
        $images[] = $name;
      }
    }



    $request['featured_image'] = json_encode($images);

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
      'image' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
      // Get existing images from the database and decode them
      $existingImages = json_decode($news->featured_image, true) ?? [];

      // Process new images and add them to the existing ones
      foreach ($request->file('image') as $file) {
        $imageName = time() . rand(1, 100) . '.' . $file->extension();
        $file->move(public_path('uploads/images'), $imageName);
        $existingImages[] = $imageName; // Append new image to existing array
      }

      // Save the updated images array back to the database
      $request['featured_image'] = json_encode($existingImages);
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
    // Decode the JSON array of images from the database
    $images = json_decode($news->featured_image, true);

    // Delete each image from the server
    if ($images) {
      foreach ($images as $image) {
        $imagePath = public_path('uploads/images/' . $image);
        if (file_exists($imagePath)) {
          unlink($imagePath); // Delete the image file
        }
      }
    }

    $news->delete();

    return redirect()
      ->route('news.index')
      ->with('success', 'News deleted successfully.');
  }
}
