<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mes Compétences</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('skills.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter une compétence</a>

        <div class="mt-6">
            @foreach ($skills as $skill)
                <div class="mb-2 p-3 bg-white shadow rounded flex justify-between items-center">
                    <span>{{ $skill->name }}</span>
                    <form action="{{ route('skills.destroy', $skill) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Supprimer</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
