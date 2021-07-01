<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Users;
use App\Http\Controllers\Auth;
use App\Http\Controllers;
//use Illuminate\Support\Facades\Crypt;




//Route::get('/', function () {
 //   return view('home');
//})->name('home');
//Route::get('laporan-pdf', [PdfController::class, 'generatePDF']);
Route::get('/', [Users\HomeController::class, 'index'])->name('home');
Route::get('/annonces', [Users\HomeController::class, 'annonces'])->name('annonces');
Route::get('/annonce/{post}', [Users\HomeController::class, 'annonce'])->name('annonce.details');
Route::resource('/contacts', ContactController::class);
Route::get('/actualites', [Users\HomeController::class, 'actualites'])->name('actualite.index');
Route::get('/actualite/{post}', [Users\HomeController::class, 'actualite'])->name('actualite.details');
Route::get('/projet_academiques', [Users\HomeController::class, 'academiques'])->name('academique.index');
Route::get('/projet_academique/{post}', [Users\HomeController::class, 'academique'])->name('academique.details');
Route::get('/projet', [Users\HomeController::class, 'leprojet'])->name('leprojet');
Route::get('/condition_generale', [Users\HomeController::class, 'conditiongenerale'])->name('condition.generale');
// Send mail
//Route::get('/sendmail', 'MailController@sendEmail')->name('sendmail');
Route::post('/interv/password', [Auth\IntervenantPasswordController::class, 'show'])->name('interv.password.submit');
Route::get('/interv/password', [Auth\IntervenantPasswordController::class, 'index'])->name('interv.password');
Route::put('/interv/password/send', [Auth\IntervenantPasswordController::class, 'modifyPassword'])->name('interv.password.send.submit');
Route::get('/interv/password/send', [Auth\IntervenantPasswordController::class, 'sendPassword'])->name('interv.password.send');
Route::get('/interv/verify/{token}', [MailController::class, 'verifyPasswordIntervenant'])->name('interv.verify.password');

Route::post('/ecol/password', [Auth\EcolePasswordController::class, 'show'])->name('ecol.password.submit');
Route::get('/ecol/password', [Auth\EcolePasswordController::class, 'index'])->name('ecol.password');
Route::put('/ecol/password/send', [Auth\EcolePasswordController::class, 'modifyPassword'])->name('ecol.password.send.submit');
Route::get('/ecol/password/send', [Auth\EcolePasswordController::class, 'sendPassword'])->name('ecol.password.send');
Route::get('/ecol/verify/{token}', [MailController::class, 'verifyPasswordEcole'])->name('ecol.verify.password');
Route::get('/user/verify/{token}', [MailController::class, 'verifyEmail'])->name('user.verify');
Route::get('/ecole/verify/{token}', [MailController::class, 'verifyEmailEcole'])->name('ecole.verify');

Auth::routes();

Route::get('auth/google', [Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [Auth\GoogleController::class, 'handleGoogleCallback']);
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/facebook', [Auth\FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [Auth\FacebookController::class, 'handleFacebookCallback']);

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', [Users\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/login', [Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/register', [Auth\AdminRegisterController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [Auth\AdminRegisterController::class, 'register'])->name('admin.register.submit');
    Route::get('/intervenant-all', [Users\Admin\AdminController::class, 'allIntervenants'])->name('admin.intervenant.all');
    Route::delete('/intervenant-destroy/{post}', [Users\Admin\AdminController::class, 'destroyIntervenant'])->name('admin.intervenant.destroy');
    Route::get('/ecole-all', [Users\Admin\AdminController::class, 'allEcoles'])->name('admin.ecole.all');
    Route::delete('/ecole-destroy/{post}', [Users\Admin\AdminController::class, 'destroyEcole'])->name('admin.ecole.destroy');

    Route::resource('/disciplines', Users\Admin\DisciplineController::class);
    Route::resource('/langues', Users\Admin\LangueController::class);
    Route::resource('/contrats', Users\Admin\ContratController::class);
    Route::resource('/disponibilites', Users\Admin\DisponibiliteController::class);
    Route::resource('/durees', Users\Admin\DureeController::class);
    Route::resource('/formations', Users\Admin\FormationController::class);
    Route::resource('/horaires', Users\Admin\HoraireController::class);
    Route::resource('/interventions', Users\Admin\InterventionController::class);
    Route::resource('/modalites', Users\Admin\ModaliteController::class);
    Route::resource('/remunerations', Users\Admin\RemunerationController::class);
    Route::resource('/responsabilites', Users\Admin\ResponsabiliteController::class);
    Route::resource('/typeexperiences', Users\Admin\TypeExperienceController::class);
    Route::resource('/carousels', Users\Admin\CarouselController::class);
    Route::resource('/partenaires', Users\Admin\PartenaireController::class);
    Route::resource('/actualites', Users\Admin\ActualiteController::class);
    Route::resource('/academiques', Users\Admin\AcademiqueController::class);
    Route::resource('/villes', Users\Admin\VilleController::class);
    Route::resource('/pays', Users\Admin\PaysController::class);
    
    

});


// Ecole routes
Route::prefix('ecole')->group(function(){
    Route::get('/', [Users\Ecole\EcoleController::class, 'index'])->name('ecole.dashboard');
    Route::get('/login', [Auth\EcoleLoginController::class, 'showLoginForm'])->name('ecole.login');
    Route::post('/login', [Auth\EcoleLoginController::class, 'login'])->name('ecole.login.submit');
    Route::get('/register', [Auth\EcoleRegisterController::class, 'showRegisterForm'])->name('ecole.register');
    Route::post('/register', [Auth\EcoleRegisterController::class, 'register'])->name('ecole.register.submit');
    Route::put('/edit/{post}', [Users\Ecole\EcoleController::class, 'update'])->name('ecole.update.submit');
    Route::put('/edit_discipline/{post}', [Users\Ecole\EcoleController::class, 'updateDiscipline'])->name('ecole.discipline.update.submit');
    Route::put('/edit_formation/{post}', [Users\Ecole\EcoleController::class, 'updateFormation'])->name('ecole.formation.update.submit');
    Route::get('/temoignages', [Users\Ecole\EcoleController::class, 'indexTemoignage'])->name('temoignage.ecole');
    Route::post('/temoignages', [Users\Ecole\EcoleController::class, 'storeTemoignage'])->name('temoignage.ecole.submit');
    Route::resource('/annonces', Users\Ecole\AnnonceController::class);
    Route::get('/annonce/create/{post}', [Users\Ecole\AnnonceController::class, 'creer'])->name('annonce.creer');
    Route::get('/choix_forfait', [Users\Ecole\EcoleController::class, 'choixannonces'])->name('choix.annonces');
    Route::get('/annonce/paiements', [Users\Ecole\EcoleController::class, 'paiement'])->name('paiement.annonces');
    Route::get('/annonce/paiements/{post}', [Users\Ecole\EcoleController::class, 'show'])->name('paiement.annonces.show');
    Route::get('/intervenants', [Users\Ecole\EcoleController::class, 'intervenants'])->name('search.intervenants');
    Route::get('/intervenant/{post}', [Users\Ecole\EcoleController::class, 'detailsintervenant'])->name('details.intervenant');
    Route::get('/choix_paiements', [Users\Ecole\EcoleController::class, 'choixpaiements'])->name('choix.paiements');
    Route::get('/paiements', [Users\Ecole\PaiementController::class, 'index'])->name('paiement.intervenants');
    Route::get('/paiements/{post}', [Users\Ecole\PaiementController::class, 'show'])->name('paiement.intervenants.show');
    Route::post('/paiements', [Users\Ecole\PaiementController::class, 'store'])->name('paiement.intervenants.store');
    Route::get('/annonce/checkout/{post}', [CheckoutController::class, 'checkout'])->name('checkout.credit');
    Route::post('/annonce/checkout/{post}', [CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');
    Route::get('/checkout/intervenant/{post}',[CheckoutController::class, 'checkoutIntervenant'])->name('checkout.intervenant');
    Route::post('/checkout/intervenant/{post}', [CheckoutController::class, 'afterpaymentIntervenant'])->name('checkout.intervenant-card');
    Route::get('/intervenant/all/{post}', [Users\Ecole\EcoleController::class, 'intervenantAll'])->name('ecole.intervenant.all');
    Route::post('/logout', [Auth\EcoleLoginController::class, 'logoutEcole'])->name('eco.logout');

});

// Intervenant routes
Route::prefix('intervenant')->group(function(){
    Route::get('/', [Users\Intervenant\IntervenantController::class, 'index'])->name('intervenant.dashboard');
    Route::get('laporan-pdf', [Users\Intervenant\IntervenantController::class, 'generatePDF'])->name('pdf');
    Route::get('/login', [Auth\IntervenantLoginController::class, 'showLoginForm'])->name('intervenant.login');
    Route::post('/login', [Auth\IntervenantLoginController::class, 'login'])->name('intervenant.login.submit');
    Route::get('/register', [Auth\IntervenantRegisterController::class, 'showRegisterForm'])->name('intervenant.register');
    Route::post('/register', [Auth\IntervenantRegisterController::class, 'register'])->name('intervenant.register.submit');
    Route::put('/edit/{post}', [Users\Intervenant\IntervenantController::class, 'update'])->name('intervenant.update.submit');
    Route::put('/edit_discipline/{post}', [Users\Intervenant\IntervenantController::class, 'updateDiscipline'])->name('discipline.update.submit');
    Route::put('/edit_formation/{post}', 'Users\Intervenant\IntervenantController@updateFormation')->name('formation.update.submit');
    Route::post('/', [Users\Intervenant\IntervenantController::class, 'experience'])->name('experience.submit');
    Route::resource('/diplomes', Users\Intervenant\DiplomeController::class);
    Route::resource('/experiences', Users\Intervenant\ExperienceController::class);
    Route::get('/temoignages', [Users\Intervenant\IntervenantController::class, 'indexTemoignage'])->name('temoignage.intervenant');
    Route::post('/temoignages', [Users\Intervenant\IntervenantController::class, 'storeTemoignage'])->name('temoignage.intervenant.submit');
    Route::resource('/offres', Users\Intervenant\OffreController::class);
    Route::post('/logout', [Auth\IntervenantLoginController::class, 'logoutIntervenant'])->name('inter.logout');
});

Route::get('/{id}', [Users\Intervenant\IntervenantController::class, 'download'])->name('downloadfile');

