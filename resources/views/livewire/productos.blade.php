<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if(session()->has('message'))
        <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <h4>{{ session('message')}}</h4>
                </div>
            </div>
        </div>
        @endif
        <!-- tabla 2 -->
        <section class="container px-4 mx-auto">
            <div class="mt-6 mb-6 md:flex md:items-center md:justify-between">
                <div class="relative flex items-center mt-4 md:mt-0">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    <input type="text" wire:model.live="buscar" placeholder="Buscar"
                        class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <button wire:click="$set('productoCreate.modalC', true)"
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Nuevao Producto</span>
                </button>
    
            </div>
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Calidad</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @foreach ($productos as $producto)
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $producto->name }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">{{ $producto->calidad }}</td>                     
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <button wire:click="destroy({{ $producto->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                                <button wire:click="edit({{ $producto->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $productos->links() }}
            </div>
        </section>
        {{-- Formulario de creacion de Nuevo operador portueario --}}
        <form wire:submit="save">
            <x-dialog-modal wire:model="productoCreate.modalC">
                <x-slot name="title">
                    Nuevo Producto
                </x-slot>
    
                <x-slot name="content">
                    <div class="space-y-12">
                        <div class="px-6 pt-10 border-b border-gray-900/10 ">
                            <p class="mt-1 text-sm leading-6 text-gray-600">Esta información se mostrará públicamente,
                                así
                                que tenga cuidado. lo que compartes.</p>
                        </div>
                        <div class="px-6 border-b border-gray-900/10 pb-4">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion Personal</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Utilice una dirección permanente donde pueda
                                recibir correo.</p>
    
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-full">
                                    <x-label>
                                        Nombre
                                    </x-label>
                                    <x-input class="w-full" wire:model="productoCreate.name" />
                                    <x-input-error for="productoCreate.name" />
                                </div>

                                <div class="sm:col-span-full">
                                    <x-label>
                                        Calidad
                                    </x-label>
                                    <x-input class="w-full" wire:model="productoCreate.calidad" />
                                    <x-input-error for="productoCreate.name" />
                                </div>
    
                            </div>
                        </div>
                    </div>
                </x-slot>
    
                <x-slot name="footer">
                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <x-button>
                            Crear
                        </x-button>
                        <x-danger-button class="mr-2" wire:click="$set('productoCreate.modalC', false)">
                            Cancelar
                        </x-danger-button>
                    </div>
                </x-slot>
            </x-dialog-modal>
        </form>
    
        {{-- Formulario de Edision de Usuarios --}}
        <form wire:submit="update()">
            <x-dialog-modal wire:model="productoEdit.modalE">
                <x-slot name="title">
                    Editar Producto
                </x-slot>
    
                <x-slot name="content">
                    <div class="space-y-12">
                        <div class="px-6 pt-10 border-b border-gray-900/10 ">
                            <p class="mt-1 text-sm leading-6 text-gray-600">Esta información se mostrará públicamente,
                                así
                                que tenga cuidado. lo que compartes.</p>
                        </div>
                        <div class="px-6 border-b border-gray-900/10 pb-4">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion Personal</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Utilice una dirección permanente donde pueda
                                recibir correo.</p>
    
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-full">
                                    <x-label>
                                        Nombre
                                    </x-label>
                                    <x-input class="w-full" wire:model="productoEdit.name" />
                                    <x-input-error for="productoEdit.name" />
                                </div>

                                <div class="sm:col-span-full">
                                    <x-label>
                                        Nombre
                                    </x-label>
                                    <x-input class="w-full" wire:model="productoEdit.calidad" />
                                    <x-input-error for="productoEdit.name" />
                                </div>
    
                            </div>
                        </div>
                    </div>
                </x-slot>
    
                <x-slot name="footer">
                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <x-button>
                            Actualizar
                        </x-button>
                        <x-danger-button class="mr-2" wire:click="$set('productoEdit.modalE', false)">
                            Cancelar
                        </x-danger-button>
                    </div>
                </x-slot>
            </x-dialog-modal>
        </form>
    </div>
</div>
