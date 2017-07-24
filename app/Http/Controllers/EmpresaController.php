<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class EmpresaController extends Controller
{

    public function home()
    {
        return view('empresa.home');
    }

    public function search()
    {
        return view('empresa.search');
    }

    public function searchNombre(Request $request)
    {
        $parametro = $request->input('nombre') ;
        $empresas = DB::select('select * from empresa where nombre = ? ', [$parametro]) ;
        return view('empresa.index', ['empresas' => $empresas]);
    }

    public function searchPlanta(Request $request)
    {
        $parametro = $request->input('planta') ;
        $empresas = DB::select('select * from empresa where planta = ? ', [$parametro]) ;
        return view('empresa.index', ['empresas' => $empresas]);
    }

    public function listt()
    {
        $empresas = Empresa::all();
        return view('empresa.index', ['empresas' => $empresas]);
    }

    public function create()
    {
        return view('empresa.create');
    }


    public function store(Request $request)
    {
        //dd($request);
        //$empresa = new Empresa();
        //$empresa -> nombre = $request -> nombre;
        //$empresa -> planta = $request -> planta;
        //$empresa -> save();

        $nombre = $request->input('empresa') ;
        $planta = $request->input('planta') ;
        DB::insert('insert into empresa (nombre, planta) values(?, ?) ',[$nombre, $planta]);

        return redirect('empresa/todas')->with('status', 'Empresa ha sido creada exitosamente.');
    }

    public function modificate()
    {
        $empresas = Empresa::all();
        return view('empresa.modificate', ['empresas' => $empresas]);
    }

    public function showVariables($id) {
        $empresas = DB::select('select * from empresa where id = ?',[$id]) ;
        return view('empresa.modificateV',['empresas'=>$empresas]) ;
    }

    public function showNombre($id) {
        $empresas = DB::select('select * from empresa where id = ?',[$id]) ;
        return view('empresa.viewNombre',['empresas'=>$empresas]) ;
    }

    public function editNombre(Request $request,$id) {
        $new = $request->input('nuevo') ;
        DB::update('update empresa set nombre = ? where id = ?',[$new,$id]) ;
        return redirect('empresa/modificar/variables/'.$id)->with('status', 'Actualizada exitosamente.');
    }

    public function showPlanta($id) {
        $empresas = DB::select('select * from empresa where id = ?',[$id]) ;
        return view('empresa.viewPlanta',['empresas'=>$empresas]) ;
    }

    public function editPlanta(Request $request,$id) {
        $new = $request->input('nuevo') ;
        DB::update('update empresa set planta = ? where id = ?',[$new,$id]) ;
        return redirect('empresa/modificar/variables/'.$id)->with('status', 'Actualizada exitosamente.');
    }

}
