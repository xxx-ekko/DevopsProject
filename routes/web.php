<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProduitController;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('liste_produit');

});

Route::get('/categorie/all',[CategorieController::class,'index'])->name('liste_categorie');
Route::get('/categorie/add',[CategorieController::class,'add'])->name('add_categorie');
Route::post('/categorie/add',[CategorieController::class,'save'])->name('save_categorie');
Route::get('/categorie/delete/{id}',[CategorieController::class,'delete'])->name('delete_categorie');
Route::get('/categorie/edit/{id}',[CategorieController::class,'edit'])->name('edit_categorie');
Route::post('/categorie/update/{id}',[CategorieController::class,'update'])->name('update_categorie');

Route::get('/fournisseur/all',[FournisseurController::class,'index'])->name('liste_fournisseur');
Route::get('/fournisseur/add',[FournisseurController::class,'add'])->name('add_fournisseur');
Route::post('/fournisseur/add',[FournisseurController::class,'save'])->name('save_fournisseur');
Route::get('/fournisseur/delete/{id}',[FournisseurController::class,'delete'])->name('delete_fournisseur');
Route::get('/fournisseur/edit/{id}',[FournisseurController::class,'edit'])->name('edit_fournisseur');
Route::post('/fournisseur/update/{id}',[FournisseurController::class,'update'])->name('update_fournisseur');

Route::get('/client/all',[ClientController::class,'index'])->name('liste_client');
Route::get('/client/add',[ClientController::class,'add'])->name('add_client');
Route::post('/client/add',[ClientController::class,'save'])->name('save_client');
Route::get('/client/delete/{id}',[ClientController::class,'delete'])->name('delete_client');
Route::get('/client/edit/{id}',[ClientController::class,'edit'])->name('edit_client');
Route::post('/client/update/{id}',[ClientController::class,'update'])->name('update_client');


Route::get('/produit/all',[ProduitController::class,'index'])->name('liste_produit');
Route::get('/produit/add',[ProduitController::class,'add'])->name('add_produit');
Route::post('/produit/add',[ProduitController::class,'save'])->name('save_produit');
Route::get('/produit/delete/{id}',[ProduitController::class,'delete'])->name('delete_produit');
Route::get('/produit/edit/{id}',[ProduitController::class,'edit'])->name('edit_produit');
Route::post('/produit/update/{id}',[ProduitController::class,'update'])->name('update_produit');

Route::get('/commande/all',[CommandeController::class,'index'])->name('liste_commande');
Route::get('/commande/add',[CommandeController::class,'add'])->name('add_commande');
Route::post('/commande/add',[CommandeController::class,'save'])->name('save_commande');
Route::get('/commande/delete/{id}',[CommandeController::class,'delete'])->name('delete_commande');
Route::get('/commande/edit/{id}',[CommandeController::class,'edit'])->name('edit_commande');
Route::post('/commande/update/{id}',[CommandeController::class,'update'])->name('update_commande');





