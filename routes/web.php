<?php

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
Auth::routes();

Route::get('/', function () {
    return view('layout.default2');
});

Route::get('/demandes', function () {
    return view('demandes.create');
});
/*  Route::get('/formateurs/selectservice', function () {
    return view('services.selectservice');
    
})->name('services.selectservice'); */

Route::get('/formateurs/selectservice', function () {
    return view('formateurs.selectservice');
    
})->name('formateurs.selectservice');

Route::get('/formateurs/affichage', function () {
    return view('formateurs.affichage');
    
})->name('formateurs.affichage');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/default', 'HomeController@index')->name('layout.default');
Route::get('/default2', 'HomeController@index')->name('layout.default2');

/* Route::get('/demandes', 'DemandeController@create')->name('demandes.create'); */

Route::get('/formateurs/index', 'FormateurController@index')->name('formateurs.index');
Route::get('/formateurs/create', 'FormateurController@create')->name('formateurs.create');
Route::get('/formateurs/list', 'FormateurController@list')->name('formateurs.list'); 
Route::post('/store','FormateurController@store')->name('formateurs.store');
Route::delete('formateur/delete/{id}', ['as' => 'formateurs.delete', 'uses' => 'FormateurController@destroy']);
/* Route::resource('formateurs', 'FormateurController'); */


Route::get('/pieces/index', 'PieceController@index')->name('pieces.index');
Route::get('/pieces/list', 'PieceController@list')->name('pieces.list');
Route::get('/pieces/create', 'PieceController@create')->name('pieces.create');
Route::post('pieces/store','PieceController@store')->name('pieces.store');
// Route::get('/pieces/edit', 'PieceController@edit')->name('pieces.edit');
Route::get('pieces/delete', ['as' => 'pieces.destroy', 'uses' => 'PieceController@destroy']);  
Route::delete('pieces/{idpieces}', 'PieceController@destroy')->name('pieces.destroy');  


Route::get('pieces/{piece}', ['as' => 'pieces.edit', 'uses' => 'PieceController@edit']);

 
/* Route::resource('demandes', 'DemandeController'); */

 /* Route::get('/demandes', 'FormateurController@edit')->name('formateurs.edit');
 Route::get('/demandes1', 'FormateurController@edit')->name('formateurs.destroy'); */
 Route::get('/services', 'ServiceController@index')->name('services.index');
 Route::get('/services1', 'ServiceController@create')->name('services.create');
 Route::get('services/list', 'ServiceController@list')->name('services.list'); 
/*  Route::get('/service', 'ServiceController@edit')->name('services.edit');
 Route::post('/store','ServiceController@store')->name('services.store');
 Route::delete('service/delete/{id}', ['as' => 'services.delete', 'uses' => 'ServiceController@destroy']); */
 /* Route::post('/projects', 'ProjectsController@store'); */
/* Route::resource('demandes', 'DemandeController');  */

Route::get('/diplomes/list', 'DiplomeController@list')->name('diplomes.list');
Route::get('/diplomes/edit', 'DiplomeController@edit')->name('diplomes.edit');
Route::post('/store','DiplomeController@store')->name('diplomes.store');
Route::delete('diplome/delete/{id}', ['as' => 'diplomes.delete', 'uses' => 'DiplomeController@destroy']);
Route::get('/diplomes/index', 'DiplomeController@index')->name('diplomes.index');
 Route::get('/diplomes/create', 'DiplomeController@create')->name('diplomes.create');

 
//  Route::post('/diplomes/post', ['as'=>'diplomes.post','uses'=>'DiplomeController@post']);
Route::get('/specialites/index', 'SpecialiteController@index')->name('specialites.index');
 Route::get('/specialites/create', 'SpecialiteController@create')->name('specialites.create');
 Route::get('/specialites/list', 'SpecialiteController@list')->name('specialites.list'); 
 Route::post('/store','SpecialiteController@store')->name('specialites.store');
 Route::get('/specialites/edit', 'SpecialiteController@edit')->name('specialites.edit');



 

 Route::get('contact-us', 'ContactUSController@contactUS')->name('ContactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
/* Route::get('/listedemande', function () {
    return view('listedemande');
});


Route::get('/test2', function () {
    return view('auth.register');
});

Route::get('/contact-us', 'ContactUSController@contactUS');
Route::post('/contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
  */
Auth::routes();

Route::resource('formateurs', 'FormateurController');
Route::resource('services', 'ServiceController');
Route::resource('diplomes', 'DiplomeController'); 
Route::resource('specialites', 'SpecialiteController'); 
Route::resource('pieces', 'PieceController'); 


