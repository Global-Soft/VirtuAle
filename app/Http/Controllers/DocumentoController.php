<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocumentoController extends Controller
{
    public function index()
    {
        return view('documento.documento');
    }

}
