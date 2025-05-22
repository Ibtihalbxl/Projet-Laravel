<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CV - {{ $user->name }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            margin: 40px;
            color: #2c3e50;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 32px;
            margin-bottom: 5px;
        }

        header p {
            font-size: 16px;
            color: #555;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            border-bottom: 2px solid #3498db;
            color: #3498db;
            padding-bottom: 5px;
            font-size: 20px;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }

        li {
            margin-bottom: 8px;
        }

        a {
            color: #2980b9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .info-line {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->title ?? 'Développeur Web' }}</p>
        <p>{{ $user->email }}</p>
    </header>

    <div class="section">
        <h2>À propos de moi</h2>
        <p>{{ $user->bio ?? 'Pas de biographie disponible.' }}</p>
    </div>

    <div class="section">
        <h2>Compétences</h2>
        <ul>
            @forelse ($user->skills as $skill)
                <li>{{ $skill->name }}</li>
            @empty
                <li>Aucune compétence enregistrée.</li>
            @endforelse
        </ul>
    </div>

    <div class="section">
        <h2>Projets</h2>
        <ul>
            @forelse ($user->projects as $project)
                <li>
                    <strong>{{ $project->title }}</strong> <br>
                    <span class="info-line">{{ $project->description }}</span><br>
                    @if($project->link)
                        🔗 <a href="{{ $project->link }}">{{ $project->link }}</a>
                    @endif
                </li>
            @empty
                <li>Aucun projet disponible.</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
