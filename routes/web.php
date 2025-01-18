<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get('/contatti', function () {
    return view('contatti');
})->name("contatti");

Route::post('/contatti', function () {
    // Validazione dei dati
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => '',
    ]);

    // Invio dell'email
    Mail::html("
    <p><strong>Nome:</strong> {$data['name']}</p>
    <p><strong>Email:</strong> {$data['email']}</p>
    <p><strong>Messaggio:</strong> {$data['message']}</p>
", function ($message) {
        $message->to('test@adoptacat.com')->subject('Nuovo messaggio da Adopt a Cat');
    });


    // Reindirizzamento con messaggio di successo
    return redirect('/contatti')->with('success', 'Messaggio inviato con successo!');
})->name('contatti.submit');
