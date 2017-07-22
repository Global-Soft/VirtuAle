<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeDocumentoController extends Controller
{
    public function index()
    {
        return view('documento.principalDocumento');
    }
}
