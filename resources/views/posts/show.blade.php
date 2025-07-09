<x-layouts.app >
    <div class="mb-8 flex justify-between">
        
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>
      <a href="{{route('post.index')}}">
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Volver</button>
     </a>
    </div>
    <div>
        <flux:heading>{{$post->titulo}}</flux:heading>
        <flux:text class="mt-2">{{$post->contenido}}</flux:text>
    </div>
</x-layouts.app>