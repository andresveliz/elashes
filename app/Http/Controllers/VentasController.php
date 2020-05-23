<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trabajador;
use App\Producto;
use App\Venta;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ventas= Venta::busqueda($request->busca)->orderBy('id','DESC')->paginate(10);
        return view('ventas.index')->with('ventas',$ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operadores = Trabajador::pluck('nombre','id');
        $precio = Producto::pluck('valor','id');
        $productos = Producto::pluck('nombre','id');
        return view('ventas.create')->with('operadores',$operadores)->with('productos',$productos)->with('precio',$precio);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $venta = new Venta;
        $venta->fecha = $request->fecha;
        $venta->precio = $request->precio;
        $venta->descuento = $request->descuento;
        $venta->id_producto = $request->id_producto;
        $venta->id_trabajador = $request->id_trabajador;

        $venta->save();

       // Flash::success("Se ha registrado la venta con exito!");

        //return redirect()->route('ventas.index'); 
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
        $ventas = Venta::Find($id);
        $operadores = Trabajador::pluck('nombre','id');
        $precio = Producto::pluck('valor','id');
        $productos = Producto::pluck('nombre','id');
        return view('ventas.edit')->with('ventas',$ventas)->with('operadores',$operadores)->with('productos',$productos)->with('precio',$precio);


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
        //
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
