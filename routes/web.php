<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\ExemplaireController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\LecteurController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\RetournerController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('app_home');
    Route::get('/about', 'about')->name('app_about');
    Route::match(['get', 'post'], '/dashboard', 'dashboard')->middleware('auth')->name('app_dashboard');
    Route::get('/search', 'search')->name('app_search');
    Route::get('/terms', 'terms')->name('app_terms');
});

Route::controller(EmpruntController::class)->group(function(){
    Route::get('/emprunt', 'index')->name('emprunt.index');
    Route::get('/emprunt/user', 'userindex')->name('emprunt.userindex');
    Route::get('/emprunt/create','create')->name('emprunt.create');
    Route::post('/emprunt/store','store')->name('emprunt.store');
    Route::get('/emprunt/{emprunt}/show','show')->name('emprunt.show');
    Route::get('/emprunt/{emprunt}/edit','edit')->name('emprunt.edit');
    Route::put('/emprunt/{emprunt}','update')->name('emprunt.update');
    Route::get('/emprunt/{emprunt}','destroy')->name('emprunt.destroy');
});


Route::controller(FournisseurController::class)->group(function(){
    Route::get('/fournisseur','index')->name('fournisseur.index');
    Route::get('/fournisseur/user','userindex')->name('fournisseur.userindex');
    Route::get('/fournisseur/create','create')->name('fournisseur.create');
    Route::post('/fournisseur/store','store')->name('fournisseur.store');
    Route::get('/fournisseur/{fournisseur}/show','show')->name('fournisseur.show');
    Route::get('/fournisseur/{fournisseur}/edit','edit')->name('fournisseur.edit');
    Route::put('/fournisseur/{fournisseur}','update')->name('fournisseur.update');
    Route::get('/fournisseur/{fournisseur}','destroy')->name('fournisseur.destroy');

});

Route::controller(LecteurController::class)->group(function(){
    Route::get('/lecteur', 'index')->name('lecteur.index');
    Route::get('/lecteur/create','create')->name('lecteur.create');
    Route::post('/lecteur/store','store')->name('lecteur.store');
    Route::get('/lecteur/{lecteur}/show','show')->name('lecteur.show');
    Route::get('/lecteur/{lecteur}/edit','edit')->name('lecteur.edit');
    Route::put('/lecteur/{lecteur}','update')->name('lecteur.update');
    Route::get('/lecteur/{lecteur}','destroy')->name('lecteur.destroy');

});

Route::controller(LivreController::class)->group(function(){
    Route::get('/livre','index')->name('livre.index');
    Route::get('/livre/user','userindex')->name('livre.userindex');
    Route::get('/livre/create','create')->name('livre.create');
    Route::post('/livre/store','store')->name('livre.store');
    Route::get('/livre/{livre}/show','show')->name('livre.show');
    Route::get('/livre/{livre}/edit','edit')->name('livre.edit');
    Route::put('/livre/{livre}','update')->name('livre.update');
    Route::get('/livre/{livre}','destroy')->name('livre.destroy');

});

Route::controller(PersonnelController::class)->group(function(){
    Route::get('/personnel','index')->name('personnel.index');
    Route::get('/personnel/user','userindex')->name('personnel.userindex');
    Route::get('/personnel/create','create')->name('personnel.create');
    Route::post('/personnel/store','store')->name('personnel.store');
    Route::get('/personnel/{personnel}/show','show')->name('personnel.show');
    Route::get('/personnel/{personnel}/edit','edit')->name('personnel.edit');
    Route::put('/personnel/{personnel}','update')->name('personnel.update');
    Route::get('/personnel/{personnel}','destroy')->name('personnel.destroy');


});

Route::controller(RetournerController::class)->group(function(){
    Route::get('/retourner', 'index')->name('retourner.index');
    Route::get('/retourner/create','create')->name('retourner.create');
    Route::post('/retourner/store','store')->name('retourner.store');
    Route::get('/retourner/{retourner}/show','show')->name('retourner.show');
    Route::get('/retourner/{retourner}/edit','edit')->name('retourner.edit');
    Route::post('/retourner/{retourner}','update')->name('retourner.update');
    Route::get('/retourner/{retourner}','destroy')->name('retourner.destroy');

});


Route::controller(UtilisateurController::class)->group(function(){
    Route::get('/utilisateur','index')->name('utilisateur.index');
    Route::get('/utilisateur/create','create')->name('utilisateur.create');
    Route::post('/utilisateur/store','store')->name('utilisateur.store');
    Route::get('/utilisateur/{utilisateur}/show','show')->name('utilisateur.show');
    Route::get('/utilisateur/{utilisateur}/edit','edit')->name('utilisateur.edit');
    Route::put('/utilisateur/{utilisateur}','update')->name('utilisateur.update');
    Route::get('/utilisateur/{utilisateur}','destroy')->name('utilisateur.destroy');

});



Route::controller(LoginController::class)->group(function(){
    Route::get('/logout', 'logout')->name('app_logout');
    Route::post('/exist_email', 'existEmail')->name('app_exist_email');
    Route::match(['get', 'post'], '/activation_code/{token}', 'activationCode')->name('app_activation_code');
    Route::get('/user_checher', 'userChecker')->name('app_user_checher');
    Route::get('/resend_activation_code/{token}', 'resendActivationCode')->name('app_resend_activation_code');
    Route::get('/activation_account_link/{token}', 'activationAccountLink')->name('app_activation_account_link');
    Route::match(['get', 'post'], '/activation_account_change_email/{token}', 'ActivationAccoutChangeEmail')->name('app_activation_account_change_email');
    Route::match(['get', 'post'], '/forgot_password', 'forgotPassword')->name('app_forgotpassword');
    Route::match(['get', 'post'], '/change_password/{token}', 'changePassword')->name('app_changepassword');
});
