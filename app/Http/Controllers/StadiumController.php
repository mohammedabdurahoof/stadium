<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\News;
use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $stadium = Stadium::all();
    return view('content.stadium.index', compact('stadium'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('content.stadium.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'stadium_name' => 'required|string|max:255',
      'image' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      'description' => 'required|string',
      'location' => 'required|string|max:255',
      'state' => 'required|string|max:255',
      'country' => 'required|string|max:255',
      'address' => 'required|string|max:255',
      'capacity' => 'required|integer|min:0',
      'seats' => 'required|integer|min:0',
      'record_crowd' => 'required|integer|min:0',
      'lights' => 'required|boolean',
      'arena_roof' => 'required|boolean',
      'video_screen' => 'required|boolean',
      'opened' => 'required|integer|max:' . date('Y'),
      'other_names' => 'required|string|max:255',
      'sports_played' => 'required|string|max:255',
    ]);

    $images = [];

    if ($request->hasfile('image')) {
      foreach ($request->file('image') as $file) {
        $name = time() . rand(1, 100) . '.' . $file->extension();
        $file->move(public_path('uploads/images'), $name);
        $images[] = $name;
      }
    }

    $data = $request->all();
    $data['image'] = json_encode($images);

    // Create a new stadium with the modified request data
    Stadium::create($data);

    return redirect()
      ->route('stadium.index')
      ->with('success', 'Stadium created successfully.');
  }

  public function stadiumBy($state)
  {
    $stadium = Stadium::where('state', $state)->get();
    $matches = Matches::latest()
      ->take(4)
      ->get();

    return view('content.stadium.stadium', compact('stadium', 'matches'));
  }


  public function showAll()
  {
    $stadium = Stadium::all();
    $matches = Matches::latest()
      ->take(4)
      ->get();

    return view('content.stadium.stadium', compact('stadium', 'matches'));
  }

  /**
   * Display the specified resource.
   */
  public function show(Stadium $stadium)
  {
    $matches = Matches::latest()
      ->take(4)
      ->get();

    $popularStadium = Stadium::latest()
      ->take(4)
      ->get();

    $latestNews = News::latest()
      ->take(4)
      ->get();
    return view('content.stadium.show', compact('stadium', 'matches', 'popularStadium', 'latestNews'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Stadium $stadium)
  {
    return view('content.stadium.edit', compact('stadium'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Stadium $stadium)
  {
    $request->validate([
      'stadium_name' => 'required|string|max:255',
      'image' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      'description' => 'required|string',
      'location' => 'required|string|max:255',
      'state' => 'required|string|max:255',
      'country' => 'required|string|max:255',
      'address' => 'required|string|max:255',
      'capacity' => 'required|integer|min:0',
      'seats' => 'required|integer|min:0',
      'record_crowd' => 'required|integer|min:0',
      'lights' => 'required|boolean',
      'arena_roof' => 'required|boolean',
      'video_screen' => 'required|boolean',
      'opened' => 'required|integer|max:' . date('Y'),
      'other_names' => 'required|string|max:255',
      'sports_played' => 'required|string|max:255',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
      // Get existing images from the database and decode them
      $existingImages = json_decode($stadium->image, true) ?? [];

      // Process new images and add them to the existing ones
      foreach ($request->file('image') as $file) {
        $imageName = time() . rand(1, 100) . '.' . $file->extension();
        $file->move(public_path('uploads/images'), $imageName);
        $existingImages[] = $imageName; // Append new image to existing array
      }

      // Save the updated images array back to the database
      $data['image'] = json_encode($existingImages);
    }

    $stadium->update($data);

    return redirect()
      ->route('stadium.index')
      ->with('success', 'Stadium updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Stadium $stadium)
  {
    // Decode the JSON array of images from the database
    $images = json_decode($stadium->image, true);

    // Delete each image from the server
    if ($images) {
      foreach ($images as $image) {
        $imagePath = public_path('uploads/images/' . $image);
        if (file_exists($imagePath)) {
          unlink($imagePath); // Delete the image file
        }
      }
    }

    $stadium->delete();

    return redirect()
      ->route('stadium.index')
      ->with('success', 'Stadium deleted successfully.');
  }
}
