<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Necesita los dos modelos Fabricante y Avion
use App\Fabricante;
use App\Avion;


class FabricanteAvionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idFabricante)
    {
        //
        //return "Mostrando los aviones del fabricante con Id $idFabricante";
        $fabricante=Fabricante::find($idFabricante);

        if (! $fabricante)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un fabricante con ese código.'])],404);
        }

        return response()->json(['status'=>'ok','data'=>$fabricante->aviones()->get()],200);

    }




    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idFabricante)
    {
        //
        return "Se muestra formulario para crear un avión del fabricante $idFabricante.";
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idFabricante,$idAvion)
    {
        //
        return "Se muestra avión $idAvion del fabricante $idFabricante";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idFabricante,$idAvion)
    {
        //
        return "Se muestra formulario para editar el avión $idAvion del fabricante $idFabricante";
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
