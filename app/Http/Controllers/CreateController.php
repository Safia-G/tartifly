<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
  public function show($id) {
    $voyages = Voyage::find($id);
    return view('create')->with('voyages', $voyages);
  }
}
