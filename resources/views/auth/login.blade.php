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

    <div class="flex justify-items-center items-center justify-self-center flex-col">
        <img class="m-8 w-24" src="/img/logo_alto.webp" alt="Logo Priorify">
        <h2 class="text-center font-titulo font-bold text-lavanda text-xl">No te preocupes,<br>¡Ocúpate!</h2>
    </div>

    <form class="max-w-sm mx-auto rounded-md border-separate m-8 border-4 border-carbon bg-nieve" action="{{ route('index') }}" method="get">
        <div class="m-8">
            <label for="email" class="block mb-2.5 text-sm font-bold font-titulo text-heading">Tu email</label>
            <input type="email" id="email"
                class="bg-nieve border-2 rounded-sm border-carbon font-cuerpo text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-chicle"
                placeholder="tuemail@gmail.com" required />
        </div>

        <div class="m-8">
            <label for="password" class="block mb-2.5 text-sm font-titulo font-bold text-heading">Tu contraseña</label>
            <input type="password" id="password"
                class="bg-nieve border-2 rounded-sm border-carbon font-cuerpo text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-chicle"
                placeholder="••••••••" required />
        </div>

        <label for="remember" class="flex items-center m-8">

            <p class="ms-2 text-sm font-cuerpo text-lavanda text-heading select-none"><a href="#"
                    class="font-bold text-fg-brand hover:underline">¿Has olvidado la contraseña?</a></p>
        </label>

        <button type="submit"
            class="m-8  flex justify-self-center text-nieve bg-lavanda box-border border-2 border-carbon rounded-md hover:bg-turquesa shadow-xs 
            font-bold leading-5 rounded-base font-titulo text-sm px-4 py-2.5 focus:outline-none">Entrar</button>

        <label for="cuenta nueva" class="flex justify-self-center m-8">
            <p class="ms-2 text-sm font-bold text-heading text-carbon font-cuerpo select-none">¿No tienes cuenta? <a
                    href="{{ route('registro') }}"
                    class="text-lavanda text-fg-brand font-cuerpo font-bold underline hover:text-carbon">Regístrate</a>.
            </p>
        </label>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>
