<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Users;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers;
use App\Http\Controllers\Auth\EcoleLoginController;
use App\Http\Controllers\Auth\EcoleRegisterController;
use App\Http\Controllers\Users\Ecole\EcoleController;
use App\Http\Controllers\Users\Ecole\AnnonceController;
use App\Http\Controllers\Users\Ecole\PaiementController;
use App\Http\Controllers\Auth\IntervenantLoginController;
use App\Http\Controllers\Auth\EcolePasswordController;
use App\Http\Controllers\Auth\IntervenantPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\IntervenantRegisterController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Users\Intervenant\DiplomeController;
use App\Http\Controllers\Users\Intervenant\ExperienceController;
use App\Http\Controllers\Users\Intervenant\OffreController;
use App\Http\Controllers\Users\Intervenant\IntervenantController;
use App\Http\Controllers\LocalizationController;
use Dompdf\Dompdf;

//use Illuminate\Support\Facades\Crypt;EcoleLoginController

 

//Route::get('/', function () {
 //   return view('home');
//})->name('home');
//Route::get('laporan-pdf', [PdfController::class, 'generatePDF']);
Route::get('/', [Users\HomeController::class, 'index'])->name('home');
Route::get('locale/{lang}', [LocalizationController::class, 'setLang']);
Route::get('/annonces', [Users\HomeController::class, 'annonces'])->name('annonces');
Route::get('/annonce/{post}', [Users\HomeController::class, 'annonce'])->name('annonce.details');
Route::resource('/contacts', ContactController::class);
Route::get('/actualites', [Users\HomeController::class, 'actualites'])->name('actualite.index');
Route::get('/actualite/{post}', [Users\HomeController::class, 'actualite'])->name('actualite.details');
Route::get('/projet_academiques', [Users\HomeController::class, 'academiques'])->name('academique.index');
Route::get('/projet_academique/{post}', [Users\HomeController::class, 'academique'])->name('academique.details');
Route::get('/projet', [Users\HomeController::class, 'leprojet'])->name('leprojet');
Route::get('/condition_generale', [Users\HomeController::class, 'conditiongenerale'])->name('condition.generale');
Route::get('/galeries', [Users\HomeController::class, 'galeries'])->name('galeries');
Route::get('/academiciens', [Users\HomeController::class, 'academiciens'])->name('academiciens');
Route::get('/uploads/{id}', [Users\HomeController::class, 'downloadCondG'])->name('downloadConditionGle');
// Send mail
//Route::get('/sendmail', 'MailController@sendEmail')->name('sendmail');
Route::post('/interv/password', [IntervenantPasswordController::class, 'show'])->name('interv.password.submit');
Route::get('/interv/password', [IntervenantPasswordController::class, 'index'])->name('interv.password');
Route::put('/interv/password/send', [IntervenantPasswordController::class, 'modifyPassword'])->name('interv.password.send.submit');
Route::get('/interv/password/send', [IntervenantPasswordController::class, 'sendPassword'])->name('interv.password.send');
Route::get('/interv/verify/{token}', [MailController::class, 'verifyPasswordIntervenant'])->name('interv.verify.password');

Route::post('/ecol/password', [EcolePasswordController::class, 'show'])->name('ecol.password.submit');
Route::get('/ecol/password', [EcolePasswordController::class, 'index'])->name('ecol.password');
Route::put('/ecol/password/send', [EcolePasswordController::class, 'modifyPassword'])->name('ecol.password.send.submit');
Route::get('/ecol/password/send', [EcolePasswordController::class, 'sendPassword'])->name('ecol.password.send');
Route::get('/ecol/verify/{token}', [MailController::class, 'verifyPasswordEcole'])->name('ecol.verify.password');
Route::get('/user/verify/{token}', [MailController::class, 'verifyEmail'])->name('user.verify');
Route::get('/ecole/verify/{token}', [MailController::class, 'verifyEmailEcole'])->name('ecole.verify');

Auth::routes();

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', [Users\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/register', [AdminRegisterController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [AdminRegisterController::class, 'register'])->name('admin.register.submit');
    Route::get('/intervenant-all', [Admin\AdminController::class, 'allIntervenants'])->name('admin.intervenant.all');
    Route::delete('/intervenant-destroy/{post}', [Users\Admin\AdminController::class, 'destroyIntervenant'])->name('admin.intervenant.destroy');
    Route::get('/ecole-all', [Users\Admin\AdminController::class, 'allEcoles'])->name('admin.ecole.all');
    Route::delete('/ecole-destroy/{post}', [Users\Admin\AdminController::class, 'destroyEcole'])->name('admin.ecole.destroy');

    Route::resource('/disciplines', 'Users\Admin\DisciplineController');
    Route::resource('/langues', 'Users\Admin\LangueController');
    Route::resource('/contrats', 'Users\Admin\ContratController');
    Route::resource('/disponibilites', 'Users\Admin\DisponibiliteController');
    Route::resource('/durees', 'Users\Admin\DureeController');
    Route::resource('/formations', 'Users\Admin\FormationController');
    Route::resource('/horaires', 'Users\Admin\HoraireController');
    Route::resource('/interventions', 'Users\Admin\InterventionController');
    Route::resource('/modalites', 'Users\Admin\ModaliteController');
    Route::resource('/remunerations', 'Users\Admin\RemunerationController');
    Route::resource('/responsabilites', 'Users\Admin\ResponsabiliteController');
    Route::resource('/typeexperiences', 'Users\Admin\TypeExperienceController');
    Route::resource('/carousels', 'Users\Admin\CarouselController');
    Route::resource('/partenaires', 'Users\Admin\PartenaireController');
    Route::resource('/actualites', 'Users\Admin\ActualiteController');
    Route::resource('/academiques', 'Users\Admin\AcademiqueController');
    Route::resource('/villes', 'Users\Admin\VilleController');
    Route::resource('/pays', 'Users\Admin\PaysController');
    
    

});


// Ecole routes
Route::prefix('ecole')->group(function(){
    Route::get('/', [EcoleController::class, 'index'])->name('ecole.dashboard');
    Route::get('/login', [EcoleLoginController::class, 'showLoginForm'])->name('ecole.login');
    Route::post('/login', [EcoleLoginController::class, 'login'])->name('ecole.login.submit');
    Route::get('/register', [EcoleRegisterController::class, 'showRegisterForm'])->name('ecole.register');
    Route::post('/register', [EcoleRegisterController::class, 'register'])->name('ecole.register.submit');
    Route::put('/edit/{post}', [EcoleController::class, 'update'])->name('ecole.update.submit');
    Route::put('/edit_discipline/{post}', [EcoleController::class, 'updateDiscipline'])->name('ecole.discipline.update.submit');
    Route::put('/edit_formation/{post}', [EcoleController::class, 'updateFormation'])->name('ecole.formation.update.submit');
    Route::get('/temoignages', [EcoleController::class, 'indexTemoignage'])->name('temoignage.ecole');
    Route::post('/temoignages', [EcoleController::class, 'storeTemoignage'])->name('temoignage.ecole.submit');
    Route::resource('/annonces', 'Users\Ecole\AnnonceController');
    Route::get('/annonce/create/{post}', [AnnonceController::class, 'creer'])->name('annonce.creer');
    Route::get('/choix_forfait', [EcoleController::class, 'choixannonces'])->name('choix.annonces');
    Route::get('/annonce/paiements', [EcoleController::class, 'paiement'])->name('paiement.annonces');
    Route::get('/annonce/paiements/{post}', [EcoleController::class, 'show'])->name('paiement.annonces.show');
    Route::get('/intervenants', [EcoleController::class, 'intervenants'])->name('search.intervenants');
    Route::get('/intervenant/{post}', [EcoleController::class, 'detailsintervenant'])->name('details.intervenant');
    Route::get('/choix_paiements', [EcoleController::class, 'choixpaiements'])->name('choix.paiements');
    Route::get('/paiements', [PaiementController::class, 'index'])->name('paiement.intervenants');
    Route::get('/paiements/{post}', [PaiementController::class, 'show'])->name('paiement.intervenants.show');
    Route::post('/paiements', [PaiementController::class, 'store'])->name('paiement.intervenants.store');
    Route::get('/annonce/checkout/{post}', [CheckoutController::class, 'checkout'])->name('checkout.credit');
    Route::post('/annonce/checkout/{post}', [CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');
    Route::get('/checkout/intervenant/{post}', [CheckoutController::class, 'checkoutIntervenant'])->name('checkout.intervenant');
    Route::post('/checkout/intervenant/{post}', [CheckoutController::class, 'afterpaymentIntervenant'])->name('checkout.intervenant-card');
    Route::get('/intervenant/all/{post}', [EcoleController::class, 'intervenantAll'])->name('ecole.intervenant.all');
    Route::post('/logout', [EcoleLoginController::class, 'logoutEcole'])->name('eco.logout');

});

// Intervenant routes
Route::prefix('intervenant')->group(function(){
    Route::get('/', [IntervenantController::class, 'index'])->name('intervenant.dashboard');
    Route::get('laporan-pdf',[IntervenantController::class, 'generatePDF'])->name('pdf');
    Route::get('/login', [IntervenantLoginController::class, 'showLoginForm'])->name('intervenant.login');
    Route::post('/login', [IntervenantLoginController::class, 'login'])->name('intervenant.login.submit');
    Route::get('/register', [IntervenantRegisterController::class, 'showRegisterForm'])->name('intervenant.register');
    Route::post('/register', [IntervenantRegisterController::class, 'register'])->name('intervenant.register.submit');
    Route::put('/edit/{post}', [IntervenantController::class, 'update'])->name('intervenant.update.submit');
    Route::put('/edit_discipline/{post}', [IntervenantController::class, 'updateDiscipline'])->name('discipline.update.submit');
    Route::put('/edit_formation/{post}', [IntervenantController::class, 'updateFormation'])->name('formation.update.submit');
    Route::post('/', [IntervenantController::class, 'experience'])->name('experience.submit');
    Route::resource('/diplomes', 'Users\Intervenant\DiplomeController');
    Route::resource('/experiences', 'Users\Intervenant\ExperienceController');
    Route::get('/temoignages', [IntervenantController::class, 'indexTemoignage'])->name('temoignage.intervenant');
    Route::post('/temoignages', [IntervenantController::class, 'storeTemoignage'])->name('temoignage.intervenant.submit');
    Route::resource('/offres', 'Users\Intervenant\OffreController');
    Route::post('/logout', [IntervenantLoginController::class, 'logoutIntervenant'])->name('inter.logout');
    //Route::get('/annonce/{post}', [Users\Intervenant\OffreController::class, 'annonce'])->name('annonce.details');
});

Route::get('/{id}', [IntervenantController::class, 'download'])->name('downloadfile');


