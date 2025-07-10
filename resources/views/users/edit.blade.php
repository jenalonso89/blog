<x-layouts.app >
    <div class="mb-8 flex justify-between">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('users.index')">Usuarios</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Editar</flux:breadcrumbs.item>
    </flux:breadcrumbs>
        <a href="{{route('users.index')}}">
            <flux:button variant="primary">Volver</flux:button>
        </a>
    </div>
    <form class="max-w-sm mx-auto" action="{{route('users.update', $user->id)}} " method="POST">
        @csrf
        @method('PUT')
    <div class="mb-5">
        <flux:label>Username</flux:label>
        <flux:input name="name"  value="{{ old('name', $user->name) }}" />
    </div>
    <div class="mb-5">
        <flux:label>Administrador</flux:label>
        <flux:select size="sm" name="admin">
            <flux:select.option value="1">Si</flux:select.option>
            <flux:select.option value="0">No</flux:select.option>
        </flux:select>
    </div>
    <flux:button variant="primary" type="submit">Editar</flux:button>

    </form>

</x-layouts.app>    