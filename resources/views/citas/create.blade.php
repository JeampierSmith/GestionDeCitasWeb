<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registro de Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Médico: {{ $medico->nombre_medico }} {{ $medico->apellido_medico }}</h2>
                    <h3>Especialidad: {{ $especialidad->nombre_especialidad }}</h3>
                    <h4>Clínica: {{ $clinica->nombre_clinica }}</h4>

                    <form action="{{ route('citas.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="medico_id" value="{{ $medico->id }}">
                        <input type="hidden" name="clinica_id" value="{{ $clinica->id }}">
                        <input type="hidden" name="especialidad_id" value="{{ $especialidad->id }}">
                        <div class="mb-3">
                            <label for="fecha_cita" class="form-label">Fecha de Cita</label>
                            <input type="datetime-local" name="fecha_cita" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
