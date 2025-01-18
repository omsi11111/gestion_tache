<?php

namespace App\Http\Controllers;

use App\Models\Task; // Import du modèle Task
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all(); // Récupérer toutes les tâches
        return view('dashboard', compact('tasks')); // Retourner la vue du dashboard
    }

    public function create() {
        return view('create'); // Retourner la vue pour créer une tâche
    }

    public function store(Request $request) {
        // Validation des données
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
        ]);

        // Créer une nouvelle tâche
        Task::create($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('tasks.index')->with('success', 'Tâche ajoutée avec succès.');
    }

    public function edit(Task $task) {
        return view('edit', compact('task')); // Retourner la vue pour modifier une tâche
    }

    public function update(Request $request, Task $task) {
        // Validation des données
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
        ]);

        // Mettre à jour la tâche
        $task->update($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('tasks.index')->with('success', 'Tâche mise à jour avec succès.');
    }

    public function destroy(Task $task) {
        // Supprimer la tâche
        $task->delete();

        // Rediriger avec un message de succès
        return redirect()->route('tasks.index')->with('success', 'Tâche supprimée avec succès.');
    }
}
