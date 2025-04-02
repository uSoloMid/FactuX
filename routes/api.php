<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/verificar-api', function () {
    return response()->json(['estado' => 'Laravel sí está leyendo api.php']);
});
