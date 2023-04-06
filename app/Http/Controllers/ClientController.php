<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function index(){
        $clients=Client::all();
        // dd($produits);
        return view('clients.index',compact('clients'));
    }

    public function add(){
        $c=client::all();
        return view('clients.add',compact('c'));

    }

    public function save(Request $request){
        $c=new Client();
        $c->nom=$request->nom;
        $c->prenom=$request->prenom;
        $c->addresse=$request->addresse;
        $c->email=$request->email;
        $c->tel=$request->tel;
        
        
        
        $c->save();
        //return back();
        return redirect()->route('liste_client')->with('message', 'client ajouter');
    }

    public function delete($id){
        $c=Client::find($id);
        $c->delete();
        return redirect()->route('liste_client')->with('message', 'client supprimer');

    }

    public function edit($id){
        $c =Client::find($id);
        
        return view('clients.edit',compact('c'));
    }

    public function update(Request $request ,$id){
        $c=Client::find($id);
        $c->nom=$request->nom;
        $c->prenom=$request->prenom;
        $c->addresse=$request->addresse;
        $c->email=$request->email;
        $c->tel=$request->tel;
        $c->update();
         return redirect()->route('liste_client')->with('message', 'client modifier');

    }
}


