<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cancelar Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Médico: {{ $cita->medico->nombre_medico }} {{ $cita->medico->apellido_medico }}</h2>
                    <h3>Especialidad: {{ $cita->especialidad->nombre_especialidad }}</h3>
                    <h4>Clínica: {{ $cita->clinica->nombre_clinica }}</h4>
                    <h4>Fecha de Cita: {{ $cita->fecha_cita }}</h4>

                    <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
                        @csrf
                        @method('DELETE') <!-- Método para cancelar la cita -->
                        <button type="submit" class="btn btn-danger">Cancelar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
