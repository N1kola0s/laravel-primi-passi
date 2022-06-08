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

Route::get('/home', function () {
    
    $personas = [
        'Nome' => 'Nicola',
        'Cognome'=> 'Migliore',
        'Classe'=> 'classe 60',
        'Ruolo'=> 'Boolean Student'
    ];
    return view('home', compact('personas'));

});

Route::get('/about', function () {
    
    $about_me = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ullam commodi alias, debitis molestias nihil dolor accusamus. Ullam, dicta quasi.';
    return view('about', compact('about_me'));
    
});

Route::get('/contacts', function () {
    
    $email = 'axxxx.xxx@gmail.com';
    return view('contacts', compact('email'));
    
});



