<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    //

    public function index(){
        $fournisseurs=Fournisseur::all();
        // dd($produits);
        return view('fournisseurs.index',compact('fournisseurs'));
    }

    public function add(){
        $f=Fournisseur::all();
        return view('fournisseurs.add',compact('f'));

    }

    public function save(Request $request){
        $f=new Fournisseur();
        $f->nom=$request->nom;
        $f->prenom=$request->prenom;
        $f->addresse=$request->addresse;
        $f->email=$request->email;
        $f->tel=$request->tel;
        
        
        
        $f->save();
        //return back();
        return redirect()->route('liste_fournisseur')->with('message', 'fournisseurs ajouter');
    }

    public function delete($id){
        $f=Fournisseur::find($id);
        $f->delete();
        return redirect()->route('liste_fournisseur')->with('message', 'fournisseur supprimer');

    }

    public function edit($id){
        $f =Fournisseur::find($id);
        
        return view('fournisseurs.edit',compact('f'));
    }

    public function update(Request $request ,$id){
        $f=Fournisseur::find($id);
        $f->nom=$request->nom;
        $f->prenom=$request->prenom;
        $f->addresse=$request->addresse;
        $f->email=$request->email;
        $f->tel=$request->tel;
        $f->update();
         return redirect()->route('liste_fournisseur')->with('message', 'fournisseurs modifier');

    }
}
