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
        <div class="h-full px-3 my-15 py-4 bg-nieve border-e border-default flex flex-col">

            <!-- Navbar menú lateral -->
            <ul class="space-y-2 font-titulo font-medium">
                <li> <!-- Inicio -->
                    <a href="/"
                        class="flex items-center px-2 py-1.5 text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand group">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893L15.7071 6.29289L17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711C17.3166 10.0976 16.6834 10.0976 16.2929 9.70711L16 9.41421V16C16 17.1046 15.1046 18 14 18H11C10.4477 18 10 17.5523 10 17V14H8V17C8 17.5523 7.55228 18 7 18H4C2.89543 18 2 17.1046 2 16V9.41421L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L2.29289 6.29289L8.29289 0.292893Z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="#be8be7" />
                        </svg>
                        <span class="ms-3">Inicio</span>
                    </a>
                </li>

                <li> <!-- Crear proyecto -->
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand group">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.3196 6.17647H5.00001C3.89543 6.17647 3 7.12457 3 8.29412V18.8824C3 20.0519 3.89543 21 5.00001 21H16.0001C17.1046 21 18.0001 20.0519 18.0001 18.8824V11.1322L14.0863 15.2762C13.7373 15.6457 13.2928 15.8976 12.8088 16.0001L10.1277 16.5678C8.37839 16.9383 6.83608 15.3053 7.18594 13.4531L7.72217 10.6142C7.81896 10.1018 8.05685 9.63114 8.40585 9.26162L11.3196 6.17647Z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="#be8be7" />
                            <path
                                d="M19.8464 4.31839C19.745 4.05932 19.5964 3.82394 19.4091 3.62571C19.2218 3.42734 18.9995 3.26998 18.7549 3.16262C18.5102 3.05526 18.2479 3 17.983 3C17.7182 3 17.4559 3.05526 17.2112 3.16262C16.9666 3.26998 16.7443 3.42734 16.557 3.62571L16.0112 4.2037L18.8632 7.22346L19.4091 6.64547C19.5964 6.44724 19.745 6.21186 19.8464 5.95279C19.9478 5.69372 20 5.41603 20 5.13559C20 4.85515 19.9478 4.57746 19.8464 4.31839ZM17.449 8.72087L14.5969 5.70111L9.82006 10.759C9.75026 10.8329 9.70268 10.927 9.68332 11.0295L9.1471 13.8684C9.07713 14.2388 9.38559 14.5654 9.73545 14.4913L12.4166 13.9236C12.5134 13.9031 12.6023 13.8527 12.6721 13.7788L17.449 8.72087Z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="#be8be7" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Crear proyecto</span>
                    </a>
                </li>

                <li> <!-- Ver proyectos -->
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand group">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.99787 7.7801C6.72929 6.34494 9.19846 5 12 5C14.8015 5 17.2707 6.34494 19.0021 7.7801C19.8749 8.50351 20.5911 9.2747 21.0981 9.96347C21.351 10.3071 21.5629 10.6452 21.7161 10.9597C21.8554 11.2456 22 11.6185 22 12C22 12.3815 21.8554 12.7544 21.7161 13.0403C21.5629 13.3548 21.351 13.6929 21.0981 14.0365C20.5911 14.7253 19.8749 15.4965 19.0021 16.2199C17.2707 17.6551 14.8015 19 12 19C9.19846 19 6.72929 17.6551 4.99787 16.2199C4.12513 15.4965 3.40886 14.7253 2.9019 14.0365C2.649 13.6929 2.43705 13.3548 2.28385 13.0403C2.14458 12.7544 2 12.3815 2 12C2 11.6185 2.14458 11.2456 2.28385 10.9597C2.43705 10.6452 2.649 10.3071 2.9019 9.96347C3.40886 9.2747 4.12513 8.50351 4.99787 7.7801ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="#be8be7" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Ver proyectos</span>
                    </a>
                </li>

                <!-- Separador -->
                <ul class="space-y-2 font-medium border-t border-default pt-4 mt-4">

                    <li> <!-- Pagina legal y Cookies -->
                        <a href="#"
                            class="flex items-center px-2 py-1.5 text-xs text-body border-2 rounded-sm hover:bg-mostaza hover:text-fg-brand group">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0212 2.37541C12.2281 2.67522 12.2556 3.06381 12.093 3.38976C12.0095 3.55704 11.9644 3.88622 12.0064 4.20815C12.0409 4.47258 12.1589 4.7266 12.3628 4.9305C12.7426 5.31024 13.3074 5.39672 13.7714 5.18416C14.2736 4.95416 14.8671 5.17476 15.097 5.67688C15.1328 5.75485 15.1576 5.83503 15.1722 5.91571C15.2444 6.28456 15.1046 6.67886 14.7812 6.91545C14.7142 6.96446 14.6497 7.01954 14.5883 7.08092C13.9506 7.71861 13.9506 8.7525 14.5883 9.39019C15.226 10.0279 16.2599 10.0279 16.8976 9.39019C17.008 9.27973 17.0984 9.15871 17.1697 9.03101C17.4346 8.55685 18.0295 8.38078 18.5098 8.63441C18.99 8.88804 19.18 9.47863 18.9378 9.96472C18.831 10.179 18.7919 10.4209 18.8227 10.6568C18.8557 10.9099 18.9687 11.153 19.1639 11.3483C19.4289 11.6133 19.7859 11.7289 20.1348 11.6935C20.1821 11.6887 20.2298 11.6873 20.2773 11.6892C20.3883 11.6939 20.8025 11.6821 21.0307 11.6734C21.3172 11.6626 21.5946 11.7752 21.7924 11.9827C21.9902 12.1902 22.0895 12.4726 22.065 12.7583C21.8705 15.023 20.9058 17.2363 19.1729 18.9692C15.2676 22.8745 8.93598 22.8745 5.03074 18.9692C1.1255 15.064 1.1255 8.73234 5.03074 4.8271C6.727 3.13084 8.88362 2.17056 11.0983 1.94837C11.4607 1.91201 11.8143 2.0756 12.0212 2.37541ZM8.65695 8.41498C8.10466 8.41498 7.65695 8.86269 7.65695 9.41498C7.65695 9.96726 8.10466 10.415 8.65695 10.415H8.66695C9.21923 10.415 9.66695 9.96726 9.66695 9.41498C9.66695 8.86269 9.21923 8.41498 8.66695 8.41498H8.65695ZM7.27106 12C6.71877 12 6.27106 12.4478 6.27106 13C6.27106 13.5523 6.71877 14 7.27106 14H7.28106C7.83334 14 8.28106 13.5523 8.28106 13C8.28106 12.4478 7.83334 12 7.28106 12H7.27106ZM14.9585 13.9157C14.4062 13.9157 13.9585 14.3634 13.9585 14.9157C13.9585 15.468 14.4062 15.9157 14.9585 15.9157H14.9685C15.5208 15.9157 15.9685 15.468 15.9685 14.9157C15.9685 14.3634 15.5208 13.9157 14.9685 13.9157H14.9585ZM11 16C10.4477 16 9.99996 16.4478 9.99996 17C9.99996 17.5523 10.4477 18 11 18H11.01C11.5623 18 12.01 17.5523 12.01 17C12.01 16.4478 11.5623 16 11.01 16H11Z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="#be8be7" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Privacidad - Cookies</span>
                        </a>
                    </li>
                </ul>
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
                                <span class="text-xl">+</span>
                                Crear tarea
                            </a>

                            <!-- Botó Crear Projecte -->
                            <a href=""
                                class="px-8 py-3 bg-turquesa border-3 border-carbon rounded-md hover:bg-mostaza shadow-[6px_6px_0px_#C693FF] 
                                font-semibold flex items-center gap-2">
                                <span class="text-xl">+</span>
                                Crear proyecto
                            </a>

                        </div>
                    </div>

                    <!-- Tasques -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-5">
                    </div>

                    <!-- Calendari -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-5 min-h-[280px]">
                    </div>
                </div>

                <!-- COLUMNA DRETA -->
                <div class="space-y-5 border-3 border-carbon rounded-lg p-5">

                    <!-- Gestiona tus proyectos -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-5">
                    </div>

                    <!-- Urgente -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-4"> 
                    </div>

                    <!-- Vence pronto -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-4">
                    </div>

                    <!-- Finalizados -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-4">  
                    </div>

                    <!-- Esta semana -->
                    <div class="bg-nieve border-3 border-carbon rounded-lg p-4">    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>