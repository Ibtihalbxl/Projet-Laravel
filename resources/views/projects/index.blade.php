<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mes Projets</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un projet</a>

        <div class="mt-6">
            @foreach ($projects as $project)
                <div class="mb-4 p-4 bg-white shadow rounded">
                    <h3 class="text-xl font-bold">{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    @if ($project->link)
                        <a href="{{ $project->link }}" class="text-blue-500" target="_blank">Voir plus</a>
                    @endif
                    <div class="mt-2">
                        <a href="{{ route('projects.edit', $project) }}" class="text-yellow-500">Modifier</a> |
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
