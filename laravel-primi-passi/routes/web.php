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

Route::get('/', function () {
    return view('home');
})  -> name('home');

Route::get('/giovanni', function () {
    $testo = [
        'tua_mamma' => 'questo testo è stato scritto nel file web.php, e tu non puoi sapere se sto mentendo o no'];
    return view('giovanni', $testo);
}) -> name('giovanni');

Route::get('/maria', function () {
    $testo = [
        'tua_mamma' => 'questo testo è stato scritto nel file web.php, e tu non puoi sapere se sto mentendo o forse sì?'];
    return view('maria', $testo);
}) -> name('maria');

Route::get('/consuela', function () {
    $testo = [
        'tua_mamma' => 'questo testo è stato scritto nel file web.php, e ormai hai capito che ho fatto il bonus'];
    return view('maria', $testo);
}) -> name('consuela');
