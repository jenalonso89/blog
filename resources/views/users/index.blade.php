<!--extiende de la plantilla dashboard blade-->   
<x-layouts.app >
    <div class="mb-8 flex justify-between">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Usuarios</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Admin
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
                @foreach($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200"> 
                    <td class="px-6 py-4">
                        {{$user->name}}
                    </td>
                    <td class="px-6 py-4">
                        @if(!$user->admin)
                            No
                        @else
                            Si
                        @endif
                    </td>
                     <td class="px-6 py-4">
                         <a href="{{route('users.edit', $user->id)}}">
                              <flux:button variant="primary">Editar</flux:button>
                         </a>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{route('users.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                             <flux:button variant="danger" type="submit">Borrar</flux:button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.app >
