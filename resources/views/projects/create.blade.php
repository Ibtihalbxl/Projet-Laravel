<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nouveau Projet</h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block">Titre</label>
                <input type="text" name="title" class="w-full border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block">Description</label>
                <textarea name="description" class="w-full border-gray-300 rounded" required></textarea>
            </div>

            <div>
                <label class="block">Lien (optionnel)</label>
                <input type="url" name="link" class="w-full border-gray-300 rounded">
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded">Créer</button>
        </form>
    </div>
</x-app-layout>
