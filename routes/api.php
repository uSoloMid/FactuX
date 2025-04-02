<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificadosController;

Route::post('/certificados/subir', [CertificadosController::class, 'subir']);
