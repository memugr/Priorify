<div id="gestionar-miembros-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-nieve border-3 border-carbon rounded-lg p-8">

            <!-- Cerrar -->
            <button type="button" data-modal-hide="gestionar-miembros-modal"
                class="absolute top-3 right-4 font-titulo font-bold text-xl hover:text-lavanda">✕</button>

            <h2 class="text-3xl font-titulo font-bold text-center mb-6">
                Miembros
            </h2>

            <form method="POST" action="{{ route('proyectos.miembros.add', $proyecto) }}">
                @csrf

                <select name="usuario" class="w-full border-3 border-carbon rounded-lg p-3 mb-6">
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id_usuario }}">
                            {{ $usuario->nombre_usuario }}
                        </option>
                    @endforeach
                </select>

                <button type="submit"
                    class="w-full bg-turquesa border-3 border-carbon rounded-lg p-3 font-semibold hover:bg-mostaza">
                    Añadir
                </button>

            </form>

            <h3 class="text-2xl font-titulo font-bold text-center mt-8 mb-4">
                Tu equipo
            </h3>

            <div class="space-y-3">
                @foreach ($miembros as $miembro)
                    <div class="flex items-center justify-between bg-nieve border-2 border-carbon rounded-lg p-3">
                        <span>
                            {{ $miembro->nombre_usuario }}
                        </span>
                        <form method="POST"
                            action="{{ route('proyectos.miembros.remove', [$proyecto, $miembro->id_usuario]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700">
                                <img src="{{ asset('img/papelera.svg') }}" alt="Paperera" class="w-4 h-4">
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- Si falla la validación, reabrir el modal --}}
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            FlowbiteInstances.getInstance('Modal', 'crud-proyecto-modal').show();
        });
    </script>
@endif
