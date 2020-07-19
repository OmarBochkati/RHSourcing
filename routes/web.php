<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/detail','CandidatController@show');



Route::get('/paiement', function(){
    return view('paiement');
} );






Route::get('create_profil',function(){
    return view('create_profil');
});
Route::resource('cv','CvController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('change-password', 'ChangePasswordController@index');

Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::resource('candidats','CandidatController');
Route::delete('candidats/force/{candidat}', 'CandidatController@forceDestroy')->name('candidats.force.destroy');
Route::put('candidats/restore/{candidat}', 'CandidatController@restore')->name('candidats.restore');
Route::resource('posts','PostController');
Route::delete('posts/force/{post}', 'PostController@forceDestroy')->name('posts.force.destroy');
Route::put('posts/restore/{post}', 'PostController@restore')->name('posts.restore');
Route::post('/comment/store', 'CommentController@store')->name('comment.store');
Route::resource('comments','CommentController');
Route::resource('startup','GroupementController');

Route::get('/contact', [
    'uses' => 'MessagerieController@createForm'
]);
Route::get('contact', 'MessagerieController@create')->name('contact.create');
Route::post('contact', 'MessagerieController@store')->name('contact.store');
Route::get('send-mail', function () {



    $details = [

        'title' => 'Mail from ItSolutionStuff.com',

        'body' => 'This is for testing email using smtp'

    ];



    \Mail::to('laouinioumaima1@gmail.com')->send(new \App\Mail\MyTestMail($details));



    dd("Email is Sent.");

});
