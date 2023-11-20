<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('Logistica') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
				<!-- component -->
				<div class="bg-gradient-to-bl from-blue-50 to-violet-50 flex items-center justify-center lg:h-screen">
					<div class="container mx-auto p-4">
						<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
							<!-- Replace this with your grid items -->
							<div class="bg-white rounded-lg border p-4">
								<h1 class="font-bold text-xl mb-2">
									Operadores
								</h1>
								<img src="\images\logistica\operador.jpeg" alt="Placeholder Image"
									class="w-full h-48 rounded-md object-cover">
								<div class="px-1 py-4">
									<p class="text-gray-700 text-base">
										En esta sección podrás crear, modificar y eliminar Operadores Portuarios los
										cuales prestan el servicio de descargue,
										urbano y almacenamiento del producto
									</p>
								</div>
								<div class="px-1 py-4">
									<a href="{{ route('operadores') }}" class="text-blue-500 hover:underline">Ingresar...</a>
								</div>
							</div>
							<div class="bg-white rounded-lg border p-4">
								<h1 class="font-bold text-xl mb-2">
									Supervision
								</h1>
								<img src="\images\logistica\supervision.png" alt="Placeholder Image"
									class="w-full h-48 rounded-md object-cover">
								<div class="px-1 py-4">
									<p class="text-gray-700 text-base">
										En esta sección podrás Gestionar la creación, actualización y eliminar las
										empresas encargadas de la supervisión del
										descargue de producto
									</p>
								</div>
								<div class="px-1 py-4">
									<a href="{{ route('supervision') }}" class="text-blue-500 hover:underline">Ingresar...</a>
								</div>
							</div>
							<div class="bg-white rounded-lg border p-4">
								<h1 class="font-bold text-xl mb-2">
									Basculas
								</h1>
								<img src="\images\logistica\bascula.jpeg" alt="Placeholder Image"
									class="w-full h-48 rounded-md object-cover">
								<div class="px-1 py-4">
									<p class="text-gray-700 text-base">
										En esta sección podrás Gestionar la creación, actualización y eliminar las
										empresas que prestan el servicio de pesaje de
										producto
									</p>
								</div>
								<div class="px-1 py-4">
									<a href="{{ route('bascula') }}" class="text-blue-500 hover:underline">Ingresar...</a>
								</div>
							</div>
							<div class="bg-white rounded-lg border p-4">
								<h1 class="font-bold text-xl mb-2">
									Bodega
								</h1>
								<img src="\images\logistica\bodega.jpeg" alt="Placeholder Image"
									class="w-full h-48 rounded-md object-cover">
								<div class="px-1 py-4">
									<p class="text-gray-700 text-base">
										En esta sección podrás Gestionar la creación, actualización y eliminar las
										empresas que prestan el servicio de
										almacenamiento de producto
									</p>
								</div>
								<div class="px-1 py-4">
									<a href="{{ route('bodega') }}" class="text-blue-500 hover:underline">Ingresar...</a>
								</div>
							</div>
							<!-- Add more items as needed -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>