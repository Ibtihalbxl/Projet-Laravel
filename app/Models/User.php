<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// ✅ Relations utilisées
use App\Models\Project;
use App\Models\Skill;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les champs autorisés en création / mise à jour
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'title',
        'bio',
        'username',
    ];

    /**
     * Les champs cachés à la sortie JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Les champs convertis automatiquement
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * 🔗 Relation : un utilisateur a plusieurs projets
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /**
     * 🔗 Relation : un utilisateur a plusieurs compétences
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
