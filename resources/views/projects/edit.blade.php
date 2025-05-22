<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Modifier Projet</h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        @if(isset($project))
            <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block">Titre</label>
                    <input type="text" name="title" value="{{ $project->title }}" class="w-full border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block">Description</label>
                    <textarea name="description" class="w-full border-gray-300 rounded" required>{{ $project->description }}</textarea>
                </div>

                <div>
                    <label class="block">Lien (optionnel)</label>
                    <input type="url" name="link" value="{{ $project->link }}" class="w-full border-gray-300 rounded">
                </div>

                <button class="bg-yellow-500 text-white px-4 py-2 rounded">Mettre à jour</button>
            </form>
        @else
            <p class="text-red-500">Erreur : projet non trouvé.</p>
        @endif
    </div>
</x-app-layout>
