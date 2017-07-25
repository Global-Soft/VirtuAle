<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Http\Requests\DocumentoRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Storage;

class DocumentoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $tipo_padre)
    {
        return view('documentos.create', ['id_padre' => $id, 'tipo_padre' => $tipo_padre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoRequest $request, $id, $tipo_padre)
    {
        $documento = new Documento();
        $documento->titulo = $request->titulo;
        $documento->descripcion = $request->descripcion;
        $documento->id_padre = $id;
        $documento->tipo_padre = $tipo_padre;
        $archivo = $request->file('archivo');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        $documento->nombre_archivo = $ruta;
        $contenido_archivo = file_get_contents($archivo->getRealPath());
        $documento->peso = $archivo->getSize();
        Storage::disk($tipo_padre == 1 ? 'trabajos' : 'personal')->put($ruta, $contenido_archivo);
        $documento->save();
        return redirect(($tipo_padre == 1 ? 'trabajo/' : 'personal/').$id)->with('status', '¡Documento agregado con éxito!');
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
    public function edit($id_trabajo, $id_documento)
    {
        $documento = Documento::find($id_documento);
        return view('documentos.edit', ['documento' => $documento, 'id_trabajo' => $id_trabajo]);
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
        $documento = Documento::find($id);
        $documento->titulo = $request->titulo;
        $documento->descripcion = $request->descripcion;
        $documento->save();

        return redirect(($documento->tipo_padre == 1 ? 'trabajo/' : 'personal/').$documento->id_padre)->with('status', '¡Documento modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $tipo_padre)
    {
        $documento = Documento::find($id);
        $id_trabajo = $documento->id_padre;
        Documento::destroy($id);
        return redirect(($tipo_padre == 1 ? 'trabajo/' : 'personal/').$id_trabajo)->with('status', '¡Documento eliminado con éxito!');
    }

    public function download($id_padre, $id_documento, $tipo_padre)
    {
        $documento = Documento::find($id_documento);
        if (Storage::disk($tipo_padre == 1 ? 'trabajos' : 'personal')->exists($documento->nombre_archivo)) {
            $path = Storage::disk($tipo_padre == 1 ? 'trabajos' : 'personal')->getDriver()->getAdapter()->applyPathPrefix($documento->nombre_archivo);
            return response()->download($path);
        }
        return Redirect::route($tipo_padre == 1 ? 'show-trabajo' : 'show-personal', [$id_padre])->withInput()->withErrors(['error' => 'No se pudo encontrar el archivo.']);
    }
}
