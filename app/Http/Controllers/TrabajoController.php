<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Empresa;
use App\Trabajo;
use Illuminate\Http\Request;

use App\Http\Requests;

class TrabajoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set('America/Santiago');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = [];
        foreach (Empresa::all() as $empresa) {
            $empresas[$empresa->id] = $empresa->nombre_empresa . ' - ' . $empresa->nombre_planta;
        }
        return view('trabajo.create', ['empresas' => $empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->nombre == '') $request->nombre = 'SIN NOMBRE';
        $trabajo = new Trabajo();
        $trabajo->nombre = $request->nombre;
        $trabajo->id_empresa = $request->empresa;
        $trabajo->fecha_inicio = date("Y-m-d");
        $trabajo->save();
        return redirect('home')->with('status', '¡Trabajo creado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabajo = \DB::table('trabajos')
            ->join('empresas', 'id_empresa', '=', 'empresas.id')
            ->select('trabajos.*', 'empresas.nombre_empresa', 'empresas.nombre_planta')
            ->where('trabajos.id', '=', $id)
            ->first();
        $documentos = \DB::table('documentos')
            ->where([['id_padre', '=', $id], ['tipo_padre', '=', '1']])
            ->get();
        return view('trabajo.show', ['trabajo' => $trabajo, 'documentos' => $documentos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabajo = \DB::table('trabajos')
            ->join('empresas', 'id_empresa', '=', 'empresas.id')
            ->where('trabajos.id', '=', $id)
            ->first();
        $empresas = [];
        foreach (Empresa::all() as $empresa) {
            $empresas[$empresa->id] = $empresa->nombre_empresa . ' - ' . $empresa->nombre_planta;
        }
        return view('trabajo.edit', ['trabajo' => $trabajo, 'empresas' => $empresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trabajo = Trabajo::find($id);
        $trabajo->nombre = $request->nombre;
        $trabajo->id_empresa = $request->empresa;
        $trabajo->save();
        return redirect('trabajo/'.$id)->with('status', '¡Trabajo modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
