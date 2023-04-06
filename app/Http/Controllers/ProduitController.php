<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function index(){
        $produits=Produit::all();
        // dd($produits);
        return view('produits.index',compact('produits'));
    }

    public function add(){
        $p=Produit::all();
        $categorie=Categorie::all();
        $fournisseur=Fournisseur::all();
        return view('produits.add',compact(['p','categorie','fournisseur']));
        

    }

    public function save(Request $request){
        $p=new Produit();
        $p->nom=$request->nom;
        $p->quantite=$request->quantite;
        $p->prix=$request->prix;
        $p->categorie_id=$request->categorie_id;
        $p->fournisseur_id=$request->fournisseur_id;
        $p->save();
        //return back();
        return redirect()->route('liste_produit')->with('message', 'produit ajouter');
    }

    public function delete($id){
        $p=Produit::find($id);
        $p->delete();
        return redirect()->route('liste_produit')->with('message', 'produit supprimer');

    }

    public function edit($id){
        $p=Produit::find($id);
        $fournisseur=Fournisseur::all();
        $categorie=Categorie::all();
        
        
        return view('produits.edit',compact('p','categorie','fournisseur'));
    }

    public function update(Request $request ,$id){
        $p=Produit::find($id);
        $p->nom=$request->nom;
        $p->quantite=$request->quantite;
        $p->prix=$request->prix;
        $p->categorie_id=$request->categorie_id;
        $p->fournisseur_id=$request->fournisseur_id;
        $p->update();
         return redirect()->route('liste_produit')->with('message', 'produit modifier');

    }
}




