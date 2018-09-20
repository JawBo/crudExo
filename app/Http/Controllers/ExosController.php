<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exo;
use App\Http\Requests\StoreExos;
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
        $item->titre = $request->titre;
        $item->description = $request->description;
        $item->save();
        return redirect ('/');
    }   
    public function store(StoreExos $request)
    {
        $ext= $request->image->getClientOriginalExtension();
        $file = date('YmdHis').rand(1,999).".".$ext;
        $path=$request->file('image')->store('upload');
        
        
        $item = new Exo;
        $item->image = $file;
        $item->titre=$request->titre;
        $item->description = $request->description;
        $item->year1 = $request->ann1;
        $item->year2 = $request->ann2;
        $item->save();
        return redirect ('/');       
    }   
    public function create(Request $request){
        
        
    }  
}
