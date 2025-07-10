<!--extiende de la plantilla dashboard blade-->
    
<x-layouts.app >
    <div class="mb-8 flex justify-between">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('tecnologias.index')">Tecnologias</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Edición</flux:breadcrumbs.item>
    </flux:breadcrumbs>
      <a href="{{route('tecnologias.index')}}">
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Volver</button>
     </a>
    </div>
    <div class="card">
        <form action="{{route('tecnologias.update', $tecnologia->id)}}" method="POST">
            @csrf
            @method('PUT')
            <flux:field>
                <flux:label >Nombre:</flux:label>
                <flux:input name="nombre" value="{{ old('nombre') }}"/>
                <flux:error name="nombre" />
                <flux:button type="submit">Editar</flux:button>
            </flux:field>
        </form>
        
    </div>    

</x-layouts.app>