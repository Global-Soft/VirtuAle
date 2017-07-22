<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UpdateDocumentoController extends Controller
{

    public function index() {
        $documentos = DB::select('select * from documento') ;
        return view('documento.vistaSeleccionEditarDocumento',['documentos'=>$documentos]) ;
    }

    public function showVariables($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.vistaSeleccionVariableDocumento',['documentos'=>$documentos]) ;
    }

    public function showDescripcion($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaDescripcion',['documentos'=>$documentos]) ;
    }

    public function showNumSolicitudTrab($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaNumSolicitudTrab',['documentos'=>$documentos]) ;
    }

    public function showNumCotizacion($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaNumCotizacion',['documentos'=>$documentos]) ;
    }

    public function showNumAdjudicacion($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaNumAdjudicacion',['documentos'=>$documentos]) ;
    }

    public function showNumInformeTec($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaNumInformeTec',['documentos'=>$documentos]) ;
    }

    public function showNumGES($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaNumGES',['documentos'=>$documentos]) ;
    }

    public function showNumFactura($codigoDoc) {
        $documentos = DB::select('select * from documento where codigoDoc = ?',[$codigoDoc]) ;
        return view('documento.editar.vistaNumFactura',['documentos'=>$documentos]) ;
    }

    public function editDescripcion(Request $request,$codigoDoc) {
        $new = $request->input('nuevo') ;
        DB::update('update documento set descripcion = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

    public function editNumSolititudTrab(Request $request,$codigoDoc) {
       $new = (int)($request->input('nuevo'));
        DB::update('update documento set numSolicitudTrab = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

    public function editNumCotizacion(Request $request,$codigoDoc) {
        $new = (int)($request->input('nuevo'));
        DB::update('update documento set numCotizacion = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

    public function editNumAdjudicacion(Request $request,$codigoDoc) {
        $new = (int)($request->input('nuevo'));
        DB::update('update documento set numAdjudicacion = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

    public function editNumInformeTec(Request $request,$codigoDoc) {
        $new = (int)($request->input('nuevo'));
        DB::update('update documento set numInformeTec = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

    public function editNumGES(Request $request,$codigoDoc) {
        $new = (int)($request->input('nuevo'));
        DB::update('update documento set numGES = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

    public function editNumFactura(Request $request,$codigoDoc) {
        $new = (int)($request->input('nuevo'));
        DB::update('update documento set numFactura = ? where codigoDoc = ?',[$new,$codigoDoc]) ;
        echo "Se ha actualizado exitosamente.<br/>";
        echo '<a href = "/seleccionarEditarDocumento">Clic aqui</a> para regresar.';
    }

}
