<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profil de {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow rounded">
            <h3 class="text-xl font-bold text-gray-900">{{ $user->title }}</h3>
            <p class="mt-2 text-gray-700">{{ $user->bio }}</p>

            <hr class="my-4">

            <h4 class="text-lg font-semibold">Projets</h4>
            <ul class="list-disc pl-5">
                @forelse ($user->projects as $project)
                    <li><strong>{{ $project->title }}</strong> — {{ $project->description }}</li>
                @empty
                    <li>Aucun projet pour le moment.</li>
                @endforelse
            </ul>

            <h4 class="text-lg font-semibold mt-4">Compétences</h4>
            <ul class="list-disc pl-5">
                @forelse ($user->skills as $skill)
                    <li>{{ $skill->name }}</li>
                @empty
                    <li>Aucune compétence pour le moment.</li>
                @endforelse
            </ul>

            <a href="{{ route('pdf.generate', $user->username) }}"
               class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
               Télécharger le CV en PDF
            </a>
        </div>
    </div>
</x-app-layout>
