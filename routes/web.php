<?php
/**
 * Fichier web pour gérer les routes de notre application
 * @author : A.Haidara
 * @since : 02-07-2018
*/
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

Route::get('/','IndexController@index')->name('index');  

/**
 * Lien post pour ajouter un étudiant
 */
Route::post('etudiants/add','EtudiantController@add')->name('addEtudiant');

/**
 * Lien détails pour afficher les information d'un étudiant 
 */
Route::get('etudiants/show/{id}','EtudiantController@show')->name('showEtudiant')->where('id','[0-9]+');

/**
 * Lien modifier pour afficher le formulaire de modification d'un étudiant
 */
Route::get('etudiants/edit/{id}','EtudiantController@edit')->name('editEtudiant')->where('id','[0-9]+');

/**
 * Lien modifier valider la modification 
 */

Route::put('etudiant/update/{id}','EtudiantController@update')->name('updateEtudiant')->where('id','[0-9]+');

/**
 * Lien de suppression d'un étudiant 
 */

 Route::delete('etudiant/delete/{id}','EtudiantController@delete')->name('deleteEtudiant')->where('id','[0-9]+');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
