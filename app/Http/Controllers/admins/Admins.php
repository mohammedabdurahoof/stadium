<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Admins extends Controller
{
  public function index()
  {
    $admins = User::all();
    return view('content.admins.admins',compact('admins'));
  }
}
