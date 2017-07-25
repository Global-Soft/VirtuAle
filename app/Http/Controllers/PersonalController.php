<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Personal;
use Illuminate\Http\Request;

use App\Http\Requests;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', ['personal' => $personal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalRequest $request)
    {
        $persona = new Personal();
        $rut = preg_replace('/[^k0-9]/i', '', $request->rut);
        $persona->rut = substr($rut, 0, strlen($rut)-1);
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->correo = $request->correo;
        $persona->telefono = $request->telefono;
        $persona->save();
        return redirect('personal')->with('status', '¡Personal agregado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documentos = \DB::table('documentos')
            ->where([['id_padre', '=', $id], ['tipo_padre', '=', '2']])
            ->get();

        $persona = Personal::find($id);
        return view('personal.show', ['persona' => $persona, 'documentos' => $documentos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Personal::find($id);
        return view('personal.edit', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalRequest $request, $id)
    {
        $persona = Personal::find($id);
        $rut = preg_replace('/[^k0-9]/i', '', $request->rut);
        $persona->rut = substr($rut, 0, strlen($rut)-1);
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->correo = $request->correo;
        $persona->telefono = $request->telefono;
        $persona->save();
        return redirect('personal')->with('status', '¡Personal modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personal::destroy($id);
        return redirect('personal')->with('status', '¡Persona eliminada con éxito!');
    }
}
