<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WhatsAppController;

Route::get('/whatsapp', function () {
    return view('whatsapp');
});


Route::post('/whatsapp/send', [WhatsAppController::class, 'send'])->name('whatsapp.send');
