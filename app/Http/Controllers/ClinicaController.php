<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;
class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicas = Clinica::paginate(10); // Cambia 10 por el número de elementos por página que desees mostrar.

        return view('clinicas.index', compact('clinicas'));

    }
    public function search(Request $request)
    {
        $search = $request->input('search');

        $clinicas = Clinica::where('nombre_clinica', 'LIKE', "%$search%")
            ->orWhere('direccion', 'LIKE', "%$search%")
            ->orWhere('telefono', 'LIKE', "%$search%")
            ->orWhere('hora_apertura', 'LIKE', "%$search%")
            ->orWhere('hora_cierre', 'LIKE', "%$search%")
            ->paginate(10);

        return view('clinicas.index', compact('clinicas'));
    }
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
