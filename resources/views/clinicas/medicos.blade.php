<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Médicos de la Clínica') }} - {{ $clinica->nombre_clinica }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre Médico</th>
                                <th>Apellido Médico</th>
                                <th>Email</th>
                                <th>Especialidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicos as $medico)
                                <tr>
                                    <td>{{ $medico->nombre_medico }}</td>
                                    <td>{{ $medico->apellido_medico }}</td>
                                    <td>{{ $medico->email }}</td>
                                    <td>{{ $medico->especialidad->nombre_especialidad }}</td>
                                    <td>
                                        <a href="{{ route('citas.create', [
                                            'medico_id' => $medico->id,
                                            'clinica_id' => $clinica->id,
                                            'especialidad_id' => $medico->especialidad->id
                                        ]) }}" class="btn btn-primary">Registrar Cita</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
