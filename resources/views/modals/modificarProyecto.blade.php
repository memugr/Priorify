<div id="modificar-proyecto-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-turquesa border-3 border-carbon rounded-lg p-8 shadow-[6px_6px_0px_#C693FF]">

            <!-- Cerrar -->
            <button type="button" data-modal-hide="modificar-proyecto-modal"
                class="absolute top-3 right-4 font-titulo font-bold text-xl hover:text-lavanda">✕</button>

            <form action="{{ route('proyectos.update', $proyecto) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <!-- Nombre -->
                <div>
                    <label for="editar_nombre" class="block mb-2 font-titulo font-bold text-carbon">Nombre del proyecto</label>
                    <input type="text" id="editar_nombre" name="nombre"
                        value="{{ old('nombre', $proyecto->nombre) }}" placeholder="Proyecto 1" required maxlength="150"
                        class="w-full h-[50px] px-4 border-3 border-carbon rounded-md bg-nieve focus:outline-none" />
                    @error('nombre', 'editar')
                        <p class="mt-1 text-sm font-semibold text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descripción -->
                <div>
                    <label for="editar_descripcion" class="block mb-2 font-titulo font-bold text-carbon">Descripción</label>
                    <textarea id="editar_descripcion" name="descripcion" placeholder="Descripción del proyecto" maxlength="1000"
                        class="w-full h-[100px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none resize-none">{{ old('descripcion', $proyecto->descripcion) }}</textarea>
                    @error('descripcion', 'editar')
                        <p class="mt-1 text-sm font-semibold text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Fecha de entrega -->
                <div>
                    <label for="editar_fecha_entrega" class="block mb-2 font-titulo font-bold text-carbon">Fecha de entrega</label>
                    <input type="date" id="editar_fecha_entrega" name="fecha_entrega" 
                        value="{{ old('fecha_entrega', \Carbon\Carbon::parse($proyecto->fecha_entrega)->format('Y-m-d')) }}"
                        class="w-full h-[50px] px-4 border-3 border-carbon rounded-md bg-nieve focus:outline-none" />
                    @error('fecha_entrega', 'editar')
                        <p class="mt-1 text-sm font-semibold text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-2 bg-lavanda border-3 border-carbon rounded-md hover:bg-mostaza font-titulo font-bold text-white text-2xl">
                    Modificar
                </button>
            </form>
        </div>
    </div>
</div>

{{-- Si falla la validación del formulario de editar, reabrir el modal --}}
@if ($errors->editar->any())
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            FlowbiteInstances.getInstance('Modal', 'modificar-proyecto-modal').show();
        });
    </script>
@endif