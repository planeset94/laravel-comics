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

// COMICS ROUTES
Route::get('/comics', function () {
$comics= config ('comics.data');
$menu= config ('comics.menu');
return view('comics.index', compact('comics','menu'));
})-> name ('comics');

Route::get('comics/{id}', function ($id) { 
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
  if(is_numeric($id) && $id>=0 && $id<count($comics)){
    $comic=$comics[$id];
  } else {
    abort(404);
}
return view('comics.show', compact('comics', 'comic', 'menu'));
})->name('show');
// COMICS ROUTES


Route::get('/characters', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('characters',compact('comics','menu'));
})-> name ('characters');


Route::get('/movies', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('movies',compact('comics','menu'));
})-> name ('movies');


Route::get('/tv', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('tv', compact('comics','menu'));
})-> name ('tv');


Route::get('/games', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('games', compact('comics','menu'));
})-> name ('games');


Route::get('/collectibles', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('collectibles', compact('comics','menu'));
})-> name ('collectibles');


Route::get('/videos', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('videos', compact('comics','menu'));
})-> name ('videos');


Route::get('/fans', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('fans', compact('comics','menu'));
})-> name ('fans');


Route::get('/news', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('news', compact('comics','menu'));
})-> name ('news');


Route::get('/shop', function () {
    $comics= config ('comics.data');
    $menu= config ('comics.menu');
    return view('shop', compact('comics','menu') );
})-> name ('shop');