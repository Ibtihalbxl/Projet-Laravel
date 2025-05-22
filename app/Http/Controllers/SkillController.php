<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SkillController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        $skills = Auth::user()->skills;
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Auth::user()->skills()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('skills.index')->with('success', 'Compétence ajoutée !');
    }

    public function destroy(Skill $skill)
    {
        $this->authorize('delete', $skill); // facultatif
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Compétence supprimée !');
    }
}
