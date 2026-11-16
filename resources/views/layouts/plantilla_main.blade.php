<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Priorify')</title>
    <link rel="icon" type="image/svg+xml" href="/img/favicon.webp">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        {!! file_get_contents(public_path('estilos.css')) !!}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @stack('styles')
</head>

<body class="bg-marfil">

    <!-- Navbar header-->
    <nav class="fixed top-0 z-50 w-full bg-nieve border-2 border-carbon ">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <!-- Botón para abrir la sidebar en tamaños pequeños -->
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
                        </div>

                        <!-- Dropdown menú usuario -->
                        <div class="z-50 hidden bg-nieve border border-default-medium rounded-base shadow-lg w-44"
                            id="dropdown-user">
                            <div class="px-4 py-3 border-b border-default-medium" role="none">
                                <p class="text-sm font-medium font-titulo text-carbon text-heading" role="none">
                                
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
                        <a href="{{ route('proyectos.index') }}"
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

    <!-- Contenido de cada página -->
    <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @stack('scripts')
</body>

</html>