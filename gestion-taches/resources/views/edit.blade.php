<!-- resources/views/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0"><i class="fa fa-edit"></i> Modifier la tâche</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Titre -->
                    <div class="mb-3">
                        <label for="title" class="form-label"><i class="fa fa-heading"></i> Titre</label>
                        <input type="text" name="title" id="title" class="form-control" 
                               value="{{ old('title', $task->title) }}" placeholder="Entrez le titre de la tâche" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label"><i class="fa fa-file-alt"></i> Description</label>
                        <textarea name="description" id="description" class="form-control" 
                                  rows="5" placeholder="Décrivez la tâche">{{ old('description', $task->description) }}</textarea>
                    </div>

                    <!-- Boutons -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Mettre à jour
                        </button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                            <i class="fa fa-arrow-left"></i> Retour
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
