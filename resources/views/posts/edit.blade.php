<!--extiende de la plantilla dashboard blade-->
    
<x-layouts.app >
    <div class="mb-8 flex justify-between">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('post.index')">Post</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Editar</flux:breadcrumbs.item>

    </flux:breadcrumbs>
      <a href="{{route('post.index')}}">
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Volver</button>
     </a>
    </div>
    <div class="card">
        <form action="{{route('post.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <flux:field>
                <flux:label >Titulo:</flux:label>
                <flux:input name="titulo" value="{{ old('titulo') }}"/>
                <flux:error name="titulo" />
                <flux:label>Tecnologia</flux:label>
                <flux:select name="tecnologia_id" placeholder="Elige tecnologia">
                    @foreach ($tecnologias as $tecnologia)
                        <flux:select.option value="{{ $tecnologia->id }}">
                            {{ $tecnologia->nombre }}
                        </flux:select.option>
                    @endforeach    
                </flux:select>
                 <flux:label >Articulo:</flux:label>
                <flux:textarea name="contenido" value="{{ old('contenido') }}"/>
                <flux:error name="contenido" />
                <flux:button type="submit">Editar</flux:button>
            </flux:field>
        </form>
    </div>    

</x-layouts.app>