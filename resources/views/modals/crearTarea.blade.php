<div id="crear-tarea-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-3xl max-h-full">
        <div class="relative bg-nieve border-3 border-carbon rounded-lg p-8 shadow-[6px_6px_0px_#C693FF]">

            <!-- Cerrar -->
            <button type="button" data-modal-hide="crear-tarea-modal"
                class="absolute top-3 right-4 font-titulo font-bold text-xl hover:text-lavanda">✕
            </button>

            <div class="mb-6 text-center">
                <p class="block mb-2 font-titulo font-bold text-carbon">
                    Añadir tarea
                </p>

            </div>
            <form action="{{ route('tareas.store', $proyecto) }}" method="POST" class="space-y-5">
                @csrf
                <!-- Títol -->
                <div class="grid-cols-1 md:grid-cols-2 gap-4 grid">
                    <div class="flex flex-col gap-5">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="nombre_tarea" class="block mb-2 font-titulo font-bold text-carbon">Nombre de la
                                tarea</label>
                            <input type="text" id="nombre_tarea" name="nombre_tarea"
                                value="{{ old('nombre_tarea') }}" placeholder="Nombre de la tarea" required
                                maxlength="150"
                                class="w-full h-[50px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none placeholder:text-lavanda" />
                            @error('nombre_tarea')
                                <p class="mt-1 text-sm font-semibold text-coral">{{ $message }}</p>
                            @enderror
                        </div>


                        <!-- Etiqueta -->
                        <div class="col-span-2 sm:col-span-1">
                            <label for="etiqueta" class="block mb-2 font-titulo font-bold text-carbon">Etiqueta</label>
                            <textarea id="etiqueta" name="etiqueta" value="{{ old('etiqueta') }}" placeholder="Etiqueta de la tarea"
                                maxlength="100"
                                class="w-full h-[50px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none resize-none text-lavanda">{{ old('etiqueta') }}</textarea>
                            @error('etiqueta')
                                <p class="mt-1 text-sm font-semibold text-coral">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Descripción -->
                        <div class="col-span-2 sm:col-span-1">
                            <label for="descripcion"
                                class="block mb-2 font-titulo font-bold text-carbon">Descripción</label>
                            <textarea id="descripcion" name="descripcion" value="{{ old('descripcion') }}" placeholder="Descripción del proyecto"
                                maxlength="1000"
                                class="w-full h-[150px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none resize-none text-lavanda">{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                                <p class="mt-1 text-sm font-semibold text-coral">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                

                    <div class="flex flex-col gap-5">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="estado_tarea" class="block mb-2 font-titulo font-bold text-carbon">Estado</label>
                            <select id="estado_tarea" name="estado_tarea" class="w-full h-[50px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none text-lavanda">
                                <option value="">Seleccionar estado</option>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado->id_estado }}" {{ old('estado_tarea') == $estado->id_estado ? 'selected' : '' }}>
                                        {{ $estado->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('estado_tarea')
                                <p class="mt-1 text-sm font-semibold text-coral">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="persona_asignada" class="block mb-2 font-titulo font-bold text-carbon">Persona asignada</label>
                            <input type="text" id="persona_asignada" name="persona_asignada"
                                value="{{ old('persona_asignada') }}" placeholder="Persona asignada" required
                                maxlength="150"
                                class="w-full h-[50px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none placeholder:text-lavanda" />
                            @error('persona_asignada')
                                <p class="mt-1 text-sm font-semibold text-coral">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="fecha_inicio" class="block mb-2 font-titulo font-bold text-carbon">Fecha de
                                inicio</label>
                            <input type="date" id="fecha_inicio" name="fecha_inicio"
                                value="{{ old('fecha_inicio') }}"
                                class="w-full h-[50px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none text-lavanda" />
                            @error('fecha_inicio')
                                <p class="mt-1 text-sm font-semibold text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Fecha de entrega -->
                        <div>
                            <label for="fecha_entrega" class="block mb-2 font-titulo font-bold text-carbon">Fecha de
                                entrega</label>
                            <input type="date" id="fecha_entrega" name="fecha_entrega"
                                value="{{ old('fecha_entrega') }}"
                                class="w-full h-[50px] px-4 py-2 border-3 border-carbon rounded-md bg-nieve focus:outline-none text-lavanda" />
                            @error('fecha_entrega')
                                <p class="mt-1 text-sm font-semibold text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div>

                </div>    
                
                    <button type="submit"
                        class="w-full py-2 bg-verde_hada border-3 border-carbon rounded-md hover:bg-mostaza font-titulo font-bold text-carbon text-2xl">
                        Añadir
                    </button>
            </form>
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
