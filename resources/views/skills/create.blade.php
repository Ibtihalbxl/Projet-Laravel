<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Ajouter une compétence</h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('skills.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block">Nom de la compétence</label>
                <input type="text" name="name" class="w-full border-gray-300 rounded" required>
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded">Ajouter</button>
        </form>
    </div>
</x-app-layout>
