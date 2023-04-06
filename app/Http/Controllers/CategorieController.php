<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //


    public function index(){
        $categories=Categorie::all();
        // dd($produits);
        return view('categories.index',compact('categories'));
    }

    public function add(){
        $c=Categorie::all();
        return view('categories.add',compact('c'));

    }

    public function save(Request $request){
        $c=new Categorie();
        $c->nom=$request->nom;
        
        $c->save();
        //return back();
        return redirect()->route('liste_categorie')->with('message', 'categories ajouter');
    }

    public function delete($id){
        $c=Categorie::find($id);
        $c->delete();
        return redirect()->route('liste_categorie')->with('message', 'categories supprimer');

    }

    public function edit($id){
        $c =Categorie::find($id);
        
        return view('categories.edit',compact('c'));
    }

    public function update(Request $request ,$id){
        $c=Categorie::find($id);
        $c->nom=$request->nom;
        $c->update();
         return redirect()->route('liste_categorie')->with('message', 'categories modifier');

    }
}