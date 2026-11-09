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
    <link rel="stylesheet" href="public/temas/temas.css">
    <style type="text/tailwindcss">
        {!! file_get_contents(public_path('estilos.css')) !!}
    </style>


</head>

<body class="bg-marfil">

    <div class="flex justify-center">
        <img class="m-8" src="/img/logo_largo.webp" alt="Logo Priorify">
    </div>

    @if (session('exito'))
        <div class= "flex justify-center text-lavanda text-fg-brand font-titulo font-bold">
            {{ session('exito') }}
        </div>
    @endif
    <form class="max-w-sm mx-auto rounded-md border-separate m-8 border-4 border-carbon bg-nieve"
        action="{{ route('usuario.store') }}" method="POST">
        @csrf
        <div class="m-8">
            <label for="email" class="block mb-2.5 text-sm font-bold font-titulo text-heading">Tu email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="bg-nieve border-2 rounded-sm border-carbon font-cuerpo text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-chicle"
                placeholder="tuemail@gmail.com" required />
        </div>

        <div class="m-8">
            <label for="nombre_usuario" class="block mb-2.5 text-sm font-bold font-titulo text-heading">Nombre de
                usuario</label>
            <input type="nombre_usuario" name= "nombre_usuario" id="nombre_usuario" value="{{ old('nombre_usuario') }}"
                class="bg-nieve border-2 rounded-sm border-carbon font-cuerpo text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-chicle"
                placeholder="Tu nombre" required />
        </div>

        <div class="m-8">
            <label for="password" class="block mb-2.5 text-sm font-titulo font-bold text-heading">Tu contraseña</label>
            <input type="password" name= "password" id="password"
                class="bg-nieve border-2 rounded-sm border-carbon font-cuerpo text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-chicle"
                placeholder="••••••••" required />
        </div>

        <div class="m-8">
            <label for="password" class="block mb-2.5 text-sm font-titulo font-bold text-heading">Confirma tu
                contraseña</label>
            <input type="password" name= "password_confirmation" id="password_confirmation"
                class="bg-nieve border-2 rounded-sm border-carbon font-cuerpo text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-chicle"
                placeholder="••••••••" required />
            @error('password')
                <span class="text-coral font-bold text-sm mt-1 block">
                    {{ $message }}
                </span>
            @enderror
        </div>


        <button type="submit"
            class="m-8  flex justify-self-center text-nieve bg-lavanda box-border border-2 border-carbon rounded-md hover:bg-turquesa shadow-xs font-bold leading-5 rounded-base font-titulo text-sm px-4 py-2.5 focus:outline-none">Registrarme</button>

        <label for="cuenta nueva" class="flex justify-self-center m-8">
            <p class="ms-2 text-sm font-bold text-heading text-carbon font-cuerpo select-none">¿Ya tienes cuenta? <a
                    href="route('auth.login')"
                    class="text-lavanda text-fg-brand font-cuerpo font-bold underline hover:text-carbon">Inicia
                    sesión</a>.
            </p>
        </label>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>
