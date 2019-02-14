<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class VoyageController extends Controller
{
  /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       var_dump($request);
         $voyage = new Voyage;
         $voyage->libelle = $request->libelle;
         $voyage->pays = $request->pays;
         $voyage->ville = $request->ville;
         $voyage->date_debut = $request->date_debut;
         $voyage->date_fin = $request->date_fin;
         $voyage->cout = $request->cout;
         $voyage->photo = $request->photo;
         $voyage->description = $request->description;
         $voyage->disponibilite = $request->disponibilite;
         $voyage->save();
         return redirect()->route('admin.voyages.index');
     }

    public function show($id) {
      $voyages = Voyage::find($id);
      return view('hotels')->with('id', $id)->with('voyages', $voyages);
    }
    public function index() {
      $voyages = Voyage::all();
      return view('hotels')->with('voyages', $voyages);
    }
}
