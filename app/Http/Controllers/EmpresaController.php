<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Http\Requests\EmpresaRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class EmpresaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresa.index', ['empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $empresa = new Empresa();
        $rut = preg_replace('/[^k0-9]/i', '', $request->rut);
        $empresa->rut = substr($rut, 0, strlen($rut)-1);
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->nombre_planta = $request->nombre_planta;
        $empresa->save();
        return redirect('empresa')->with('status', '¡Empresa creada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('empresa.edit', ['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, $id)
    {
        $empresa = Empresa::find($id);
        $rut = preg_replace('/[^k0-9]/i', '', $request->rut);
        $empresa->rut = substr($rut, 0, strlen($rut)-1);
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->nombre_planta = $request->nombre_planta;
        $empresa->save();
        return redirect('empresa')->with('status', '¡Empresa modificada con éxito!');
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
