<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //
    public function index(){
        // $commandes=Commande::all();
        // $commandes = Commande::with('clients', 'produits')
        //     ->select('commandes.id as id', 'commandes.date as date',  'commandes.quantite as quantite', 'commandes.etat as etat', 'clients.nom as client_nom', 'produits.nom as produit_nom')
        //     ->get();
        $commandes = DB::table('commandes')
            ->join('clients', 'clients.id', '=', 'commandes.client_id')
            ->join('produits', 'produits.id', '=', 'commandes.produit_id')
            ->join('categories', 'produits.categorie_id', '=', 'categories.id')
            ->select('commandes.id','commandes.date','commandes.quantite','clients.nom as client_nom','commandes.etat','produits.nom as produit_nom', 'categories.nom as categorie_nom')
            ->get();
    
        return view('commandes.index',compact('commandes'));
    }

    public function add(){
        $co=Commande::all();
         $client=Client::all();
         $produit=Produit::all();
        return view('commandes.add',compact(['co','client','produit']));
        

    }

    public function save(Request $request){
        $co=new Commande();
        // $co->date=$request->date;
        $co->quantite=$request->quantite;
        // $co->etat=$request->etat;
        $co->client_id=$request->client_id;
        $co->produit_id=$request->produit_id;
        $co->save();
        //return back();
        return redirect()->route('liste_commande')->with('message', 'commande faite');
    }

    public function delete($id){
        $co=Commande::find($id);
        $co->delete();
        return redirect()->route('liste_commande')->with('message', 'commande supprimer');

    }

    public function edit($id){
        $co=Commande::find($id);
         $client=Client::all();
        $produit=Produit::all();
        
        
        return view('commandes.edit',compact('co','client','produit'));
    }

    public function update(Request $request ,$id){
        $co=Commande::find($id);
        // $co->date=$request->date;
        $co->quantite=$request->quantite;
        $co->etat=$request->etat;
        $co->client_id=$request->client_id;
        $co->produit_id=$request->produit_id;
        
        $co->update();
         return redirect()->route('liste_commande')->with('message', 'commande modifier');

    }
}






