<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\NewsLetterControllers;
use App\Models\Annonce;
use App\Models\NewsLetter;
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
Route::get('/',[Controller::class,'show']);
Route::get('/a_propos', function(){
    return view('about');
})->name('a_propos');
Route::get('contact', function() {
    return view('contact');
})->name('contact');
Route::get('formationContinue', function() {
    return view('formationContinue');
})->name('formationContinue');
Route::get('evenements', function() {
    return view('evenements');
})->name('evenements');
/* NewsLetter */
Route::get('/form',[NewsLetterControllers::class,'getFormulaireNewsletter'])->name('storeNewsletter');
Route::get('/listeNewsletter',[NewsLetterControllers::class,'listNewsletter'])->name('listNewsletter');
Route::post('/create/storeNewsletter',[NewsLetterControllers ::class,'storeNewsletter'])->name('storeNewsletter');

/* Annonce */
Route::get('/formAnnonce',[AnnonceController::class,'getFormulaireAnnonce'])->name('storeAnnonce');
Route::get('/listeAnnonce',[AnnonceController::class,'listAnnonce'])->name('listAnnonce');
Route::post('/create/storeAnnonce',[AnnonceController ::class,'storeAnnonce'])->name('storeAnnonce');
Route::get('/editAnnonce/{id}',[AnnonceController::class,'editAnnonce'])->name('editAnnonce');
Route::post('/updateAnnonce/{id}', [AnnonceController::class,'updateAnnonce'])->name('updateAnnonce');
Route::delete('/deleteAnnonce/{id}', [AnnonceController::class,'deleteAnnonce'])->name('deleteAnnonce');

Route::get('emplois', [EmploiController::class, 'getAll'])->name('emplois');
Route::get('/emploi/{id}', [EmploiController::class, 'getEmploi'])->name('emploi');


Route::post('contact',[ContactController ::class,'sendMessage'])->name('sendMail');
