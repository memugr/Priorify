@extends('layouts.plantilla_main')

@section('title', 'Inicio')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

        <!-- COLUMNA ESQUERRA -->
        <div class="lg:col-span-3 space-y-8">

            <!-- Cercador + botons -->
            <div class="bg-nieve border-3 border-carbon rounded-lg p-5">

                <div class="flex flex-wrap items-center gap-6">

                    <!-- Cercador -->
                    <form class="flex-1" method="GET" action="{{ route('proyectos.index') }}">
                        <div class="relative">

                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <img src="{{ asset('img/lupa.svg') }}" alt="Lupa" class="w-5 h-5">
                            </div>

                            <input type="search" name="buscar" value="{{ request('buscar') }}"
                                placeholder="Buscar proyectos..."
                                class="w-full h-[60px] pl-10 pr-28 border-3 border-carbon rounded-md bg-nieve focus:outline-none" />

                            <button type="submit"
                                class="absolute right-2 top-1/2 -translate-y-1/2 px-3 py-1.5 bg-turquesa border-2 border-carbon rounded-md hover:bg-mostaza font-semibold text-lg">
                                Cercar
                            </button>
                        </div>
                    </form>

                    <!-- Botó Crear Tasca -->
                    <a href=""
                        class="px-8 py-3 bg-turquesa border-3 border-carbon rounded-md hover:bg-mostaza shadow-[6px_6px_0px_#C693FF] 
                                font-semibold flex items-center gap-2">
                        <img src="/img/plus.svg" alt="Plus" class="w-7 h-7">
                        Crear tarea
                    </a>
                    <!-- Botó Crear Projecte -->
                    <a href=""
                        class="px-8 py-3 bg-turquesa border-3 border-carbon rounded-md hover:bg-mostaza shadow-[6px_6px_0px_#C693FF] 
                                font-semibold flex items-center gap-2">
                        <img src="/img/plus.svg" alt="Plus" class="w-7 h-7">
                        Crear proyecto
                    </a>
                </div>
            </div>

            <!-- Tasques -->
            <div class="bg-nieve border-3 border-carbon rounded-lg p-5">

                <div class="border-3 border-carbon rounded-md overflow-hidden shadow-[6px_6px_0px_#C693FF]">

                    <!-- Capçalera -->
                    <div class="bg-mostaza px-4 py-4 border-b-3 border-carbon">
                        <div class="flex items-center gap-5">
                            <div
                                class="w-8 h-8 bg-lavanda border-3 border-carbon rounded-md flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <h2 class="text-lg font-titulo font-bold">
                                Tareas de hoy
                            </h2>
                        </div>
                    </div>

                    <!-- Cos: IMPORTANT A MODIFICAR CON BLADE SEGONS LES TASQUES -->
                    <div class="bg-nieve">
                        <label
                            class="flex items-center gap-3 px-4 py-3 border-b border-gray-300 hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 accent-lavanda">
                            <span>No tienes tareas hoy.</span>
                        </label>
                    </div>
                </div>

            </div>

            <!-- Calendari -->
            <div class="bg-nieve border-3 border-carbon rounded-lg p-5 min-h-[280px]">
                <div class="h-[240px] flex items-center justify-center">
                    <h2 class="text-2xl font-titulo font-bold text-carbon">
                        Calendario en construcción
                    </h2>
                </div>
            </div>
        </div>

        <!-- COLUMNA DRETA -->
        <div class="space-y-5 border-3 border-carbon rounded-lg p-5">

            <!-- Gestiona tus proyectos -->
            <div class="bg-[#B9E296] border-3 border-carbon rounded-lg p-5 shadow-[6px_6px_0px_#C693FF]">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('img/badge.svg') }}" alt="Badge" class="w-10 h-10 mb-4">
                    <h2 class="text-lg font-titulo font-semibold mb-3">
                        Gestiona tus proyectos
                    </h2>
                    <p class="font-semibold leading-tight">
                        ¡Crea proyectos, gestiona las tareas y mejora tu productividad!
                    </p>
                </div>
            </div>

            <!-- Urgente -->
            <button
                class="w-full bg-[#F3C98A] border-3 border-carbon rounded-lg p-4 shadow-[6px_6px_0px_#C693FF] flex items-center justify-between hover:bg-[#efc27f]">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('img/urgente.svg') }}" alt="Urgente" class="w-10 h-10">
                    <span class="font-titulo text-lg font-semibold">
                        Urgente
                    </span>
                </div>
                <span class="text-2xl">▼</span>
            </button>

            <!-- Vence pronto -->
            <button
                class="w-full bg-[#F2A8B8] border-3 border-carbon rounded-lg p-4 shadow-[6px_6px_0px_#C693FF] flex items-center justify-between hover:bg-[#ec9cae]">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('img/vence_pronto.svg') }}" alt="Vence pronto" class="w-10 h-10">
                    <span class="font-titulo text-lg font-semibold">
                        Vence pronto
                    </span>
                </div>
                <span class="text-2xl">▼</span>
            </button>

            <!-- Finalizados -->
            <button
                class="w-full bg-[#B9E296] border-3 border-carbon rounded-lg p-4 shadow-[6px_6px_0px_#C693FF] flex items-center justify-between hover:bg-[#add98a]">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('img/check_turquesa.svg') }}" alt="Finalizados" class="w-10 h-10">
                    <span class="font-titulo text-lg font-semibold">
                        Finalizados
                    </span>
                </div>
                <span class="text-2xl">▼</span>
            </button>

            <!-- Esta semana -->
            <button
                class="w-full bg-[#F3F3F3] border-3 border-carbon rounded-lg p-4 shadow-[6px_6px_0px_#C693FF] flex items-center justify-between hover:bg-gray-100">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('img/vacio.svg') }}" alt="Esta semana" class="w-10 h-10">
                    <span class="font-titulo text-lg font-semibold">
                        Esta semana
                    </span>
                </div>
                <span class="text-2xl">▼</span>
            </button>
        </div>
    </div>
@endsection
