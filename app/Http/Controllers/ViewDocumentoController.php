<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use DB;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;

class ViewDocumentoController extends Controller
{
    public function index() {
        $documentos = DB::select('select * from documento') ;
        return view('documento.vistaDocumento',['documentos'=>$documentos]) ;
    }
}
