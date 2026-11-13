@extends('layouts.plantilla_main')

@section('title', 'Proyectos')

@section('content')
    <!-- Cercador -->
    <form class="flex-1" method="GET" action="{{ route('proyectos.index') }}">
        <div class="relative">
            <!-- Lupa -->
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <img src="{{ asset('img/lupa.svg') }}" alt="Lupa" class="w-5 h-5">
            </div>

            <!-- Input -->
            <input type="search" name="search" value="{{ request('search') }}" placeholder="Buscar proyectos..."
                class="w-full h-[60px] pl-10 pr-28 border-3 border-carbon rounded-md bg-nieve focus:outline-none" />

            <!-- Botó dins l'input -->
            <button type="submit" href="#"
                class="absolute right-2 top-1/2 -translate-y-1/2 px-3 py-1.5
                                                bg-turquesa border-2 border-carbon rounded-md hover:bg-mostaza font-semibold text-lg">
                Cercar
            </button>
        </div>
    </form>

    <!-- Llista de projectes -->
    <div class="space-y-6 mt-8">
    @if ($proyectos->isEmpty())
        <div class="bg-nieve border-3 border-carbon rounded-lg p-8 text-center">
            <h2 class="font-titulo text-2xl font-bold mb-2">
                No hay proyectos
            </h2>
            <p>
                Crea tu primer proyecto para empezar.
            </p>
        </div>
    @else
        @foreach ($proyectos as $proyecto)
            <div
                class="w-[90%] mx-auto bg-turquesa border-3 border-carbon rounded-lg p-5 shadow-[6px_6px_0px_#C693FF] 
                        hover:translate-y-[-2px] transition-all">

                <div class="flex flex-col justify-between">
                    <!-- Esquerra -->
                    <div class="flex items-center gap-4">
                        <h3 class="text-2xl font-titulo font-bold">
                            {{ $proyecto->nombre }}
                        </h3>
                    </div>

                    <!-- Informació -->
                    <div class="flex items-center gap-10">
                        <span class="font-semibold text-sm">
                            {{ $proyecto->descripcion }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
