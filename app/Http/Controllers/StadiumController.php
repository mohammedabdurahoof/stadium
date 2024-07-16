<?php

namespace App\Http\Controllers;

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
      'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
      'description' => 'required|string',
      'location' => 'required|string|max:255',
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

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(public_path('uploads/images'), $imageName);

    $data = $request->all();
    $data['image'] = $imageName;

    // Create a new stadium with the modified request data
    Stadium::create($data);

    return redirect()
      ->route('stadium.index')
      ->with('success', 'Stadium created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Stadium $stadium)
  {
    return view('content.stadium.show', compact('stadium'));
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
      'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      'description' => 'required|string',
      'location' => 'required|string|max:255',
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

    if ($request->image) {
      $oldImagePath = public_path('uploads/images/' . $stadium->image);

      if (file_exists($oldImagePath)) {
        unlink($oldImagePath);
      }

      $imageName = time() . '.' . $request->image->extension();

      $request->image->move(public_path('uploads/images'), $imageName);

      $data['image'] = $imageName;
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
    $stadium->delete();

    return redirect()
      ->route('stadium.index')
      ->with('success', 'Stadium deleted successfully.');
  }
}
