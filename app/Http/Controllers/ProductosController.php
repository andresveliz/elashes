<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categoria;
use Laracasts\Flash\Flash;
use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $producto = Producto::busqueda($request->busca)->paginate(10);
        return view('productos.index')->with('producto',$producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::lists('nombre','id');
        return view('productos/create')->with('categoria',$categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->valor = $request->valor;
        $producto->cantidad = $request->cantidad;
        $producto->id_categoria = $request->categoria;

        $producto->save();

        Flash::success("Se ha registrado el producto con exito!");

        return redirect()->route('productos.index');
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
        //
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

    public function vendido($id)
    {
        //dd($id);
        $vendido = Producto::find($id);

        $cantidad = $vendido->cantidad;
        if($cantidad>0){
        $vendido->cantidad = $cantidad-1;

        $vendido->save();

        Flash::success('Se ha realizado la venta con exito!');
        return redirect()->route('ventas.index');
        }
        else{
           Flash::warning('No cuenta con suficiente stock'); 
           return redirect()->route('ventas.create');
        }
       

        //dd($cantidad);
    }
}
