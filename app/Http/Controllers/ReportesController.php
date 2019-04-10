<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trabajo;
use Carbon\Carbon;
use Jenssegers\Date\Date;
use App\Trabajador;
use Illuminate\Support\Facades\DB;
class ReportesController extends Controller
{

	public function ticket($id)
	{

	$trabajo = Trabajo::where('codigo',$id)->get()->first();
    Date::setLocale('es');


    $view= \View::make('reportes.ticket')->with('trabajo',$trabajo)->render();
    $pdf = \App::make('dompdf.wrapper');

    $pdf->loadHTML($view);
         
    return $pdf->stream('ticket.pdf');
    }

    public function operador(Request $request)
    {
    	//$work = Trabajo::where('id_trabajador',1)->where('fecha','2018-03-15')->get();
    	$operadores = Trabajador::lists('nombre','id');
    	$trabajo = Trabajo::comision($request->operador,$request->fecha)->get();
    	return view('reportes/operador')->with('trabajo',$trabajo)->with('operadores',$operadores);
    }

    public function diario(Request $request)
    {
        $operadores = Trabajador::all();
        $cuenta = DB::table('trabajos')->select(array('*',DB::raw('count(*) as cantidad')))
                                       ->where('fecha',$request->fecha)
                                       ->groupBy('id_trabajador')
                                       ->get();
        $cuentas = Trabajo::cuenta($request->fecha);
        $pestanias = Trabajo::pestanias($request->fecha);
        $trabajo = Trabajo::todo($request->fecha)->get();
        return view('reportes/diario')->with('operadores',$operadores)->with('trabajo',$trabajo)->with('cuentas',$cuentas)->with('pestanias',$pestanias);
    }
}
