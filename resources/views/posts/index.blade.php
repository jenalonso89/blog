<x-layouts.app >
    <div class="mb-8 flex justify-between">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>
      <a href="{{route('post.create')}}">
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Nuevo Post</button>
     </a>
    </div>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3">
                    Editar
                </th>
                <th scope="col" class="px-6 py-3">
                    Borrar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <td class="px-6 py-4">
                    <a href="{{route('post.show',  $post->id)}}"> <!--aquí ruta para show del controller-->
                        {{$post->titulo}}
                    </a>
                </td>
                 <td class="px-6 py-4">
                    <a href="{{route('post.edit',$post->id)}}"
                    <flux:button type="submit">Editar</flux:button>
                    </a>
                </td>
                 <td class="px-6 py-4">
                    <form action="{{route('post.destroy', $post->id)}}" method="POST"> 
                        @csrf
                        @method('DELETE')
                     <flux:button type="submit" variant="danger">Borrar</flux:button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.app>