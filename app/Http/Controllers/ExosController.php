<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exo;

class ExosController extends Controller
{
    public function index()
    {
        $contenuExos = Exo::all();
        return view('welcome',compact('contenuExos'));
    }
    public function destroy($id) {
        $item = Exo::find($id);
        $item->delete();
        return redirect ('/');
    }
    public function edit($id){
        $item = Exo::find($id);
        return view ('edit',compact ('item'));
    }
    public function update(Request $request, $id){
        $item = Exo::find($id);
        $item->titre = $request->leTitre;
        $item->description = $request->laDescription;
        $item->save();
        return redirect ('/');
    }   
    public function create(Request $request){
        $item = new Exo;
        $item->titre=$request->leTitre;
        $item->description = $request->laDescription;
        $item->year1 = $request->ann1;
        $item->year2 = $request->ann2;
        $item->save();
        return redirect ('/');
    }  
}
