@extends('layouts.plantilla_main')

@section('title', $proyecto->nombre)

@section('content')
    @if (session('success'))
        <div class="mb-6 bg-[#B9E296] border-3 border-carbon rounded-md px-4 py-3 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mb-6 bg-[#FBAABA] border-3 border-carbon rounded-md px-4 py-3 font-semibold">
            {{ session('error') }}
        </div>
    @endif
    <div class="bg-turquesa border-3 border-carbon rounded-lg p-6 shadow-[6px_6px_0px_#C693FF]">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-2">
            <h1 class="text-3xl font-titulo font-bold">
                {{ $proyecto->nombre }}
            </h1>

            <p class="shrink-0 px-3 py-1 bg-nieve border-2 border-carbon rounded-md text-md font-semibold">
                Creado por: {{ $admin ?? 'Desconocido' }}
            </p>
        </div>

        <p class="mb-4">
            {{ $proyecto->descripcion ?: 'Sin descripción' }}
        </p>

        <!-- Iconos -->
        <div class="flex items-center justify-end gap-2">
            <!-- Editar -->
            <button type="button" title="Editar" aria-label="Editar"
                class="p-2 bg-nieve border-2 border-carbon rounded-md hover:bg-mostaza cursor-pointer"
                data-modal-target="modificar-proyecto-modal" data-modal-toggle="modificar-proyecto-modal">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 20h9" />
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                </svg>
            </button>


            <!-- Gestionar Miembros (Admin)-->
            @if ($esAdmin)
                <button type="button" title="Miembros" aria-label="Miembros"
                    class="p-2 bg-nieve border-2 border-carbon rounded-md hover:bg-mostaza cursor-pointer"
                    data-modal-target="gestionar-miembros-modal" data-modal-toggle="gestionar-miembros-modal">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 20c0-3.5 3-6 7-6s7 2.5 7 6" />
                    </svg>
                </button>
            @endif

            <!-- Eliminar -->
            <form method="POST" action="{{ route('proyectos.destroy', $proyecto) }}"
                onsubmit="return confirm('¿Seguro que quieres eliminar este proyecto?');">
                @csrf
                @method('DELETE')
                <button type="submit" title="Eliminar" aria-label="Eliminar"
                    class="p-2 bg-nieve border-2 border-carbon rounded-md hover:bg-red-300 cursor-pointer">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M3 6h18" />
                        <path d="M8 6V4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2" />
                        <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
                        <path d="M10 11v6M14 11v6" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <a href="{{ route('proyectos.index') }}"
        class="inline-block mt-6 px-6 py-2 bg-nieve border-3 border-carbon rounded-md hover:bg-mostaza font-semibold">
        ← Volver a proyectos
    </a>

    @include('modals.modificarProyecto')
    @include('modals.gestionarMiembros')
@endsection
