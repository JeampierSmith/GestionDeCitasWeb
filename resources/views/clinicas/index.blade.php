<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold">Clínicas</h2>

                    <form action="{{ route('clinicas.search') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Buscar clínica">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </div>
                        </div>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Hora de Apertura</th>
                                <th>Hora de Cierre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clinicas as $clinica)
                                <tr>
                                    <td>{{ $clinica->nombre_clinica }}</td>
                                    <td>{{ $clinica->direccion }}</td>
                                    <td>{{ $clinica->telefono }}</td>
                                    <td>{{ $clinica->hora_apertura }}</td>
                                    <td>{{ $clinica->hora_cierre }}</td>
                                    <td>
                                        <a href="{{ route('clinicas.medicos', $clinica) }}" class="btn btn-primary">Ver Médicos</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $clinicas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
