<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Input;

class InsertDocumentoController extends Controller
{
    public function insertFormInicial()
    {
        return view('documento.insertDocumento');
    }

    public function insertDocumentoInicial(Request $request) {
        $descripcion = $request->input('desc') ;
        $numSolT = (int)($request->input('nSolT') );

        //$fileSolT = $request->file('archivoSolT');
        //$nombreSolT = 'SolicitudTrabajo - '.$numSolT.$request->file('archivoSolT')->getClientOriginalExtension();
        //$fileSolT->move(base_path() . '/public/SolicitudTrabajo', $nombreSolT);

        DB::insert('insert into documento (descripcion, numSolicitudTrab) values(?, ?) ',[$descripcion, $numSolT]);
        echo "Se ha realizado su registro.<br/>";
        echo '<a href = "/insertarDocumento">Clic aqui</a> para retroceder.';
    }

}
