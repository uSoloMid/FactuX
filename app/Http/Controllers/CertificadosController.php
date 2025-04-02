<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadosController extends Controller
{
    public function subir(Request $request)
    {
        return response()->json([
            'ok' => true,
            'mensaje' => '¡Funciona!',
        ]);
    }
}
