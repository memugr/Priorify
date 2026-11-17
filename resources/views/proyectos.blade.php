@extends('layouts.plantilla_main')

@section('title', 'Proyectos')

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
                <a href="{{ route('proyectos.show', $proyecto) }}"
                    class="block w-[90%] mx-auto bg-turquesa border-3 border-carbon rounded-lg p-5 shadow-[6px_6px_0px_#C693FF]
                hover:translate-y-[-2px] transition-all">

                    <div class="flex flex-col justify-between">
                        <div class="flex items-center gap-4">
                            <h3 class="text-2xl font-titulo font-bold">
                                {{ $proyecto->nombre }}
                            </h3>
                        </div>

                        <div class="flex items-center gap-10">
                            <span class="font-semibold text-sm">
                                {{ $proyecto->descripcion }}
                            </span>
                        </div>

                        @if ($proyecto->fecha_entrega)
                            <div class="flex flex-col items-end gap-2 min-w-[140px]">
                                <h3 class="text-sm font-bold uppercase tracking-wide text-carbon">
                                    Fecha de entrega
                                </h3>
                                <span
                                    class="bg-mostaza border-3 border-carbon rounded-lg px-4 py-2
                                font-titulo text-md">
                                    {{ \Carbon\Carbon::parse($proyecto->fecha_entrega)->format('d/m/Y') }}
                                </span>
                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        @endif
    </div>
@endsection
