<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Servicio;
use App\Reserva;
use App\Trabajo;
use App\Trabajador;
use Laracasts\Flash\Flash;

class TrabajosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $trabajos= Trabajo::busqueda($request->busca)->orderBy('id','DSC')->paginate(10);
        return view('trabajos.index')->with('trabajos',$trabajos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ultimo = Trabajo::select('numero','fecha')->orderBy('id','DSC')->first();
        //$ultimo = $ultimos->numero;
        $fecha = $ultimo->fecha;
        if ( \Carbon\Carbon::now()->format('m') > \Carbon\Carbon::parse($ultimo->fecha)->format('m')) {
            $print = 1;

        }
        else{
              
              $print = (($ultimo->numero)+1);
        }
       
        $largo = str_pad($print,4,'0',STR_PAD_LEFT);
        $servicios = Servicio::lists('nombre','id');
        $operador = Trabajador::lists('nombre','id');
        return view('trabajos.create')->with('servicios',$servicios)->with('largo',$largo)->with('operador',$operador)->with('print',$print);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $ultimo = Trabajo::select('numero','fecha')->orderBy('id','DSC')->first();

        $trabajo = new Trabajo;
        $trabajo->nombre = $request->nombre;
        $trabajo->apellido = $request->apellido;
        $trabajo->celular = $request->celular;
        $trabajo->fecha = $request->fecha;
        $trabajo->hora = $request->hora;
        $trabajo->observacion = $request->detalle;
        $trabajo->numero= $request->print;
        $trabajo->codigo = $request->codigo;
        $trabajo->id_servicio = $request->servicio;
        $trabajo->id_trabajador = $request->trabajador;

        $trabajo->save();
         Flash::success("Se ha registrado el trabajo de forma exitosa!");

        return redirect()->route('trabajos.index');
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
        $trabajo = Trabajo::find($id);
        $servicios = Servicio::lists('nombre','id');
        $trabajadores = Trabajador::lists('nombre','id');
        return view('trabajos.edit')->with('trabajo',$trabajo)->with('servicios',$servicios)->with('trabajadores',$trabajadores);
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
        $trabajo->apellido = $request->apellido;
        $trabajo->celular = $request->celular;
        $trabajo->fecha = $request->fecha;
        $trabajo->hora = $request->hora;
        $trabajo->observacion = $request->detalle;
        $trabajo->id_servicio = $request->servicio;
        $trabajo->id_trabajador = $request->trabajador;
        
        $trabajo->save();
        Flash::success("Se ha modificado la reserva de forma exitosa!");

        return redirect()->route('trabajos.index');
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
