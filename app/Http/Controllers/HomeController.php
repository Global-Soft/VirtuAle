<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Trabajo;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = \DB::table('trabajos')
            ->join('empresas', 'id_empresa', '=', 'empresas.id')
            ->select('trabajos.*', 'empresas.nombre_empresa', 'empresas.nombre_planta')
            ->orderBy('fecha_inicio', 'desc')
            ->get();
        return view('home', ['trabajos' => $trabajos]);
    }
}
