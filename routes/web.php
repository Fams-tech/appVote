<?php

use App\Models\Secteur;
use App\Models\Electeur;
use App\Models\Programme;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\CandidatController;

use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\ProgrammeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/candidat',[CandidatController::class,'index']);
// Route::get('/electeur',[ElecteurController::class,'index']);
// Route::get('/programme',[ProgrammeController::class,'index']);
// Route::get('/secteur',[SecteurController::class,'index']);
Route::get('/ajouter/candidat',[CandidatController::class,'index'])->name('ajouter.candidat');
Route::post('/enregistrer/candidat',[CandidatController::class,'store'])->name('store.candidat');
Route::get('/liste/candidat',[CandidatController::class,'liste'])->name('liste.candidat');
Route::get('/supprimer-candidat/{id}', [CandidatController::class,'destroy'])->name('delete-candidat');
Route::get('/editer-candidat/{id}', [CandidatController::class,'edit'])->name('edit-candidat');
Route::post('/modifier/candidat/{id}',[CandidatController::class,'update'])->name('update.candidat');