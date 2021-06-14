<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;




//Route::get('/', function () {
 //   return view('home');
//})->name('home');
Route::get('laporan-pdf','PdfController@generatePDF');
Route::get('/', 'Users\HomeController@index')->name('home');
Route::get('/annonces', 'Users\HomeController@annonces')->name('annonces');
Route::get('/annonce/{post}', 'Users\HomeController@annonce')->name('annonce.details');
Route::resource('/contacts', 'ContactController');

Route::get('/checkout/{post}','CheckoutController@checkout')->name('checkout.credit');
//->name('checkout.credit');
Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');
// Send mail
//Route::get('/sendmail', 'MailController@sendEmail')->name('sendmail');
Route::post('/interv/password', 'Auth\IntervenantPasswordController@show')->name('interv.password.submit');
Route::get('/interv/password', 'Auth\IntervenantPasswordController@index')->name('interv.password');
Route::put('/interv/password/send', 'Auth\IntervenantPasswordController@modifyPassword')->name('interv.password.send.submit');
Route::get('/interv/password/send', 'Auth\IntervenantPasswordController@sendPassword')->name('interv.password.send');
Route::get('/interv/verify/{token}', 'MailController@verifyPasswordIntervenant')->name('interv.verify.password');

Route::post('/ecol/password', 'Auth\EcolePasswordController@show')->name('ecol.password.submit');
Route::get('/ecol/password', 'Auth\EcolePasswordController@index')->name('ecol.password');
Route::put('/ecol/password/send', 'Auth\EcolePasswordController@modifyPassword')->name('ecol.password.send.submit');
Route::get('/ecol/password/send', 'Auth\EcolePasswordController@sendPassword')->name('ecol.password.send');
Route::get('/ecol/verify/{token}', 'MailController@verifyPasswordEcole')->name('ecol.verify.password');

//Route::get('/formlogin', 'HomeController@form')->name('form');
Route::get('/user/verify/{token}', 'MailController@verifyEmail')->name('user.verify');
Route::get('/ecole/verify/{token}', 'MailController@verifyEmailEcole')->name('ecole.verify');

Auth::routes();

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    Route::get('/intervenant-all', 'Users\Admin\AdminController@allIntervenants')->name('admin.intervenant.all');
    Route::get('/ecole-all', 'Users\Admin\AdminController@allEcoles')->name('admin.ecole.all');

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
    Route::resource('/villes', 'Users\Admin\VilleController');
    Route::resource('/pays', 'Users\Admin\PaysController');
    
    

});


// Ecole routes
Route::prefix('ecole')->group(function(){
    Route::get('/', 'Users\Ecole\EcoleController@index')->name('ecole.dashboard');
    Route::get('/login', 'Auth\EcoleLoginController@showLoginForm')->name('ecole.login');
    Route::post('/login', 'Auth\EcoleLoginController@login')->name('ecole.login.submit');
    Route::get('/register', 'Auth\EcoleRegisterController@showRegisterForm')->name('ecole.register');
    Route::post('/register', 'Auth\EcoleRegisterController@register')->name('ecole.register.submit');
    Route::put('/edit/{post}', 'Users\Ecole\EcoleController@update')->name('ecole.update.submit');
    Route::put('/edit_discipline/{post}', 'Users\Ecole\EcoleController@updateDiscipline')->name('ecole.discipline.update.submit');
    Route::put('/edit_formation/{post}', 'Users\Ecole\EcoleController@updateFormation')->name('ecole.formation.update.submit');
    Route::get('/temoignages', 'Users\Ecole\EcoleController@indexTemoignage')->name('temoignage.ecole');
    Route::post('/temoignages', 'Users\Ecole\EcoleController@storeTemoignage')->name('temoignage.ecole.submit');
    Route::resource('/annonces', 'Users\Ecole\AnnonceController');
    Route::get('/annonce/create/{post}', 'Users\Ecole\AnnonceController@creer')->name('annonce.creer');
    Route::get('/choix_annonces', 'Users\Ecole\EcoleController@choixannonces')->name('choix.annonces');
    Route::get('/annonce/paiements', 'Users\Ecole\EcoleController@paiement')->name('paiement.annonces');
    Route::get('/annonce/paiements/{post}', 'Users\Ecole\EcoleController@show')->name('paiement.annonces.show');
    Route::get('/intervenants', 'Users\Ecole\EcoleController@intervenants')->name('search.intervenants');
    Route::get('/intervenant/{post}', 'Users\Ecole\EcoleController@detailsintervenant')->name('details.intervenant');
    Route::get('/choix_paiements', 'Users\Ecole\EcoleController@choixpaiements')->name('choix.paiements');
    Route::get('/paiements', 'Users\Ecole\PaiementController@index')->name('paiement.intervenants');
    Route::get('/paiements/{post}', 'Users\Ecole\PaiementController@show')->name('paiement.intervenants.show');
    Route::post('/paiements', 'Users\Ecole\PaiementController@store')->name('paiement.intervenants.store');

    Route::post('/logout', 'Auth\EcoleLoginController@logoutEcole')->name('eco.logout');
});

// Intervenant routes
Route::prefix('intervenant')->group(function(){
    Route::get('/', 'Users\Intervenant\IntervenantController@index')->name('intervenant.dashboard');
    Route::get('laporan-pdf','Users\Intervenant\IntervenantController@generatePDF')->name('pdf');
    Route::get('/login', 'Auth\IntervenantLoginController@showLoginForm')->name('intervenant.login');
    Route::post('/login', 'Auth\IntervenantLoginController@login')->name('intervenant.login.submit');
    Route::get('/register', 'Auth\IntervenantRegisterController@showRegisterForm')->name('intervenant.register');
    Route::post('/register', 'Auth\IntervenantRegisterController@register')->name('intervenant.register.submit');
    Route::put('/edit/{post}', 'Users\Intervenant\IntervenantController@update')->name('intervenant.update.submit');
    Route::put('/edit_discipline/{post}', 'Users\Intervenant\IntervenantController@updateDiscipline')->name('discipline.update.submit');
    Route::put('/edit_formation/{post}', 'Users\Intervenant\IntervenantController@updateFormation')->name('formation.update.submit');
    Route::post('/', 'Users\Intervenant\IntervenantController@experience')->name('experience.submit');
    Route::resource('/diplomes', 'Users\Intervenant\DiplomeController');
    Route::resource('/experiences', 'Users\Intervenant\ExperienceController');
    Route::get('/temoignages', 'Users\Intervenant\IntervenantController@indexTemoignage')->name('temoignage.intervenant');
    Route::post('/temoignages', 'Users\Intervenant\IntervenantController@storeTemoignage')->name('temoignage.intervenant.submit');
    Route::resource('/offres', 'Users\Intervenant\OffreController');
    Route::post('/logout', 'Auth\IntervenantLoginController@logoutIntervenant')->name('inter.logout');
});

Route::get('/{id}', 'Users\Intervenant\IntervenantController@download')->name('downloadfile');

