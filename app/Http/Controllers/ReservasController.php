<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Servicio;
use App\Reserva;
use Laracasts\Flash\Flash;
use App\Trabajo;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Trabajador;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        \Carbon\Carbon::setLocale('es');
    }
    
    public function index()
    {
        //
        $reservas= Reserva::all();
        $servicios = Servicio::pluck('nombre','id');
        return view('reservas.index')->with('servicios',$servicios)->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $reserva = new Reserva();
        $reserva->nombre= $request->nombre;
        $reserva->apellido = $request->apellido;
        $reserva->celular = $request->celular;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->detalle = $request->detalle;
        $reserva->estado = 'pendiente';
        $reserva->id_servicio = $request->servicio;

        $reserva->save();

        Flash::success("Se ha realizado la reserva de forma exitosa!");

        return redirect()->route('reservas.index');
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
        $reserva = Reserva::find($id);
        $servicios = Servicio::lists('nombre','id');
        return view('reservas.edit')->with('reserva',$reserva)->with('servicios',$servicios);
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
        //dd($request->all());
        $reserva = Reserva::find($id);
        $reserva->nombre = $request->nombre;
        $reserva->apellido = $request->apellido;
        $reserva->celular = $request->celular;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->detalle = $request->detalle;
        $reserva->id_servicio = $request->servicio;

        $reserva->save();
        Flash::success("Se ha modificado la reserva de forma exitosa!");

        return redirect()->route('reservas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva= Reserva::find($id);
        $reserva->delete();
        flash("Se ha eliminado la reserva", 'danger')->important();

    return redirect()->route('reservas.index');
    }

    public function confirmar($id)
    {
       
        $ultimo = Trabajo::select('numero','fecha')->orderBy('id','DESC')->first();

        $fecha = $ultimo->fecha;
        if ( \Carbon\Carbon::now()->format('m') > \Carbon\Carbon::parse($ultimo->fecha)->format('m')) {
            $print = 1;

        }
        else{
              
              $print = (($ultimo->numero)+1);
        }
        
        $largo = str_pad($print,4,'0',STR_PAD_LEFT);
        $reserva = Reserva::find($id);
        $servicios = Servicio::pluck('nombre','id');
        $operador = Trabajador::pluck('nombre','id');
        
        return view('reservas.confirmar')->with('servicios',$servicios)->with('reserva',$reserva)->with('ultimo',$ultimo)->with('largo',$largo)->with('operador',$operador)->with('print',$print);
    }
    
    
}
