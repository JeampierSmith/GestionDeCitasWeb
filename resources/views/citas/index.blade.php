<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Fecha de Cita</th>
                                <th>Médico</th>
                                <th>Clínica</th>
                                <th>Especialidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($citas as $cita)
                                <tr>
                                    <td>{{ $cita->fecha_cita }}</td>
                                    <td>{{ $cita->medico->nombre_medico }} {{ $cita->medico->apellido_medico }}</td>
                                    <td>{{ $cita->clinica->nombre_clinica }}</td>
                                    <td>{{ $cita->especialidad->nombre_especialidad }}</td>
                                    <td>
                                        <a href="{{ route('citas.reagendar', $cita) }}" class="btn btn-primary">Reagendar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('citas.destroy', $cita) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Cancelar</button>
                                        </form>
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
