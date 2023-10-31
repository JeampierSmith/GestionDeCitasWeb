<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;
use App\Models\Medico;
use App\Models\Especialidad;
use App\Models\Cita;
class CitaController extends Controller
{

    public function index(){
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    public function create($medico_id, $clinica_id, $especialidad_id)
    {
        $medico = Medico::find($medico_id);
        $clinica = Clinica::find($clinica_id);
        $especialidad = Especialidad::find($especialidad_id);

        return view('citas.create', compact('medico', 'clinica', 'especialidad'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'fecha_cita' => 'required|date',

        ]);

        $cita = new Cita([
            'fecha_cita' => $request->input('fecha_cita'),
            'user_id' => auth()->user()->id, // Obtén el ID del usuario autenticado
            'clinica_id' => $request->input('clinica_id'),
            'medico_id' => $request->input('medico_id'),
            'especialidad_id' => $request->input('especialidad_id'),
        ]);


         $cita->save();


        return redirect()->route('citas.index')->with('success', 'La cita se ha registrado con éxito.');
    }

    public function reagendar(Cita $cita)
    {
        return view('citas.reagendar', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {

        $request->validate([
            'fecha_cita' => 'required|date',
        ]);

        $cita->update([
            'fecha_cita' => $request->input('fecha_cita'),
        ]);

        return redirect()->route('citas.index')->with('success', 'La cita ha sido actualizada con éxito.');
    }

    public function showCancel(Cita $cita)
    {
        return view('citas.cancel', compact('cita'));
    }

    public function destroy(Cita $cita)
    {

        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'La cita ha sido cancelada con éxito.');
    }
}
