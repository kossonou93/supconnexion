<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;




//Route::get('/', function () {
 //   return view('home');
//})->name('home');

Route::get('/', 'Users\HomeController@index')->name('home');
Route::resource('/contacts', 'ContactController');
// Send mail
//Route::get('/sendmail', 'MailController@sendEmail')->name('sendmail');

//Route::get('/formlogin', 'HomeController@form')->name('form');
Route::get('/user/verify/{token}', 'MailController@verifyEmail')->name('user.verify');
Route::get('/ecole/verify/{token}', 'MailController@verifyEmailEcole')->name('ecole.verify');

Auth::routes();

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

//Route::get('auth/facebook/ecole', 'Auth\FacebookEcoleController@redirectToFacebook');
//Route::get('auth/facebook/callback', 'Auth\FacebookEcoleController@handleFacebookCallback');
// Admin routes
Route::prefix('admin')->group(function(){
    //Route::get('/form', 'Users\Admin\AdminController@form')->name('form');
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    Route::get('/intervenant-all', 'Users\Admin\AdminController@allIntervenants')->name('admin.intervenant.all');

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
    //Route::post('/search/intervenants/{post}', 'Users\Ecole\EcoleController@intervenant')->name('search.intervenant');
    Route::get('/intervenants', 'Users\Ecole\EcoleController@intervenants')->name('search.intervenants');
    Route::get('/intervenant/{post}', 'Users\Ecole\EcoleController@detailsintervenant')->name('details.intervenant');
    Route::get('/paiements', 'Users\Ecole\PaiementController@index')->name('paiement.intervenants');
    Route::get('/paiements/{post}', 'Users\Ecole\PaiementController@show')->name('paiement.intervenants.show');
    Route::post('/paiements', 'Users\Ecole\PaiementController@store')->name('paiement.intervenants.store');
});

// Intervenant routes
Route::prefix('intervenant')->group(function(){
    Route::get('/', 'Users\Intervenant\IntervenantController@index')->name('intervenant.dashboard');
    Route::get('/login', 'Auth\IntervenantLoginController@showLoginForm')->name('intervenant.login');
    Route::post('/login', 'Auth\IntervenantLoginController@login')->name('intervenant.login.submit');
    Route::get('/register', 'Auth\IntervenantRegisterController@showRegisterForm')->name('intervenant.register');
    Route::post('/register', 'Auth\IntervenantRegisterController@register')->name('intervenant.register.submit');
    Route::post('/password', 'Auth\IntervenantPasswordController@show')->name('intervenant.password.submit');
    Route::get('/password', 'Auth\IntervenantPasswordController@index')->name('intervenant.password');
    Route::post('/password/send', 'Auth\IntervenantPasswordController@modifyPssword')->name('intervenant.password.send.submit');
    Route::get('/password/send', 'Auth\IntervenantPasswordController@sendPassword')->name('intervenant.password.send');
    Route::get('/verify/{token}', 'MailController@verifyPasswordIntervenant')->name('intervenant.verify.password');
    Route::put('/edit/{post}', 'Users\Intervenant\IntervenantController@update')->name('intervenant.update.submit');
    Route::put('/edit_discipline/{post}', 'Users\Intervenant\IntervenantController@updateDiscipline')->name('discipline.update.submit');
    Route::put('/edit_formation/{post}', 'Users\Intervenant\IntervenantController@updateFormation')->name('formation.update.submit');
    Route::post('/', 'Users\Intervenant\IntervenantController@experience')->name('experience.submit');
    Route::resource('/diplomes', 'Users\Intervenant\DiplomeController');
    Route::resource('/experiences', 'Users\Intervenant\ExperienceController');
    Route::get('/temoignages', 'Users\Intervenant\IntervenantController@indexTemoignage')->name('temoignage.intervenant');
    Route::post('/temoignages', 'Users\Intervenant\IntervenantController@storeTemoignage')->name('temoignage.intervenant.submit');
    Route::resource('/offres', 'Users\Intervenant\OffreController');
});

Route::get('/{id}', 'Users\Intervenant\IntervenantController@download')->name('downloadfile');


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
