<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Priorify</title>
    <link rel="icon" type="image/svg+xml" href="/img/favicon.webp">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        {!! file_get_contents(public_path('estilos.css')) !!}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="bg-marfil">

    <!-- Navbar header-->
    <nav class="fixed top-0 z-50 w-full bg-nieve border-2 border-carbon ">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <!-- Botón para abrir la sidebar en tamaños pequeños (?) -->
                    <button data-drawer-target="top-bar-sidebar" data-drawer-toggle="top-bar-sidebar"
                        aria-controls="top-bar-sidebar" type="button"
                        class="sm:hidden text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm p-2 focus:outline-none">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h10" />
                        </svg>
                    </button>

                    <!-- Logo header -->
                    <img src="/img/logo_largo.webp" class="h-10 me-3" alt="Priorify Logo" />
                    <!-- <span
                        class="self-center text-lg font-titulo font-semibold whitespace-nowrap text-lavanda">Priorify</span> -->

                </div>

                <div>
                    <h2 class="text-lg font-titulo font-semibold whitespace-nowrap text-lavanda">¡Bienvenido, Cliente!
                    </h2>
                </div>
                <!-- Usuario -->
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-nieve rounded-full focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>

                            <!-- Dropdown menú usuario -->
                        </div>
                        <div class="z-50 hidden bg-nieve border border-default-medium rounded-base shadow-lg w-44"
                            id="dropdown-user">
                            <div class="px-4 py-3 border-b border-default-medium" role="none">
                                <p class="text-sm font-medium font-titulo text-carbon text-heading" role="none">
                                    Rigoberto Catares
                                </p>
                                <p class="text-sm text-cuerpo truncate" role="none">
                                    Rigotares@gmail.com
                                </p>
                            </div>
                            <ul class="p-2 text-sm text-cuerpo font-medium" role="none">
                                <li>
                                    <a href="#"
                                        class="inline-flex font-titulo items-center w-full p-2 hover:bg-chicle hover:text-heading rounded"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex font-titulo items-center w-full p-2 hover:bg-chicle hover:text-heading rounded"
                                        role="menuitem">Configuración</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex font-titulo items-center w-full p-2 hover:bg-chicle hover:text-heading rounded"
                                        role="menuitem">Notificaciones</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex font-titulo items-center w-full p-2 hover:bg-chicle hover:text-heading rounded"
                                        role="menuitem">Salir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menú lateral izquierdo -->
    <aside id="top-bar-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-full border-2 border-carbon transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 bg-nieve border-e border-default flex flex-col">
            <!-- Menú principal -->
            <div class="flex-1 overflow-y-auto mt-16">

                <ul class="space-y-2 font-titulo font-medium">

                    <li>
                        <a href="/index"
                            class="flex items-center px-2 py-1.5 text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand">
                            <!-- SVG -->
                            <span class="ms-3">Inicio</span>
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex items-center px-2 py-1.5 text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand">
                            <span class="ms-3">Crear proyecto</span>
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex items-center px-2 py-1.5 text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand">
                            <span class="ms-3">Ver proyectos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Cookies -->
            <div class="border-t border-default pt-4 pb-2">
                <a href="#"
                    class="flex items-center px-2 py-2 text-xs text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand">
                    <span class="ms-3 text-sm font-medium whitespace-nowrap">
                        Privacidad - Cookies
                    </span>
                </a>
            </div>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                <!-- COLUMNA ESQUERRA -->
                <div class="lg:col-span-3 space-y-8">

                    <!-- Cercador + botons -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-5">

                        <div class="flex flex-wrap items-center gap-6">

                            <!-- Cercador -->
                            <form class="flex-1 min-w-[350px]">
                                <div class="relative">
                                    <!-- Lupa -->
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-lavanda" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">

                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>

                                    <!-- Input -->
                                    <input type="search" placeholder="Buscar tarea..."
                                        class="w-full h-[60px] pl-10 pr-28 border-3 border-carbon rounded-md bg-nieve focus:outline-none" />

                                    <!-- Botó dins l'input -->
                                    <button type="submit" href="#"
                                        class="absolute right-2 top-1/2 -translate-y-1/2 px-3 py-1.5
                                                bg-turquesa border-2 border-carbon rounded-md hover:bg-mostaza font-semibold text-sm">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>
