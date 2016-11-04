<?php

namespace proyect\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;
// use Session;

use proyect\Http\Requests;

use proyect\Producto;

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo 'el controlador resource funciona';
        return view('quimicos.quimicos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         echo 'Estoy en en create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Producto();

        $p->nombre = $request->input('nombre');

        $p->detalle = $request->input('detalle');

        $p->precio = $request->input('precio');

        $p->cantidad = $request->input('cantidad');

        // Session::flash('message', 'Mensaje enviado correctamente');

        return redirect('/rc')->with('success','Tarea creada correctamente.');

        // if($p->save()){
        //     return 'todo ok';
        // } 
        
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
}
