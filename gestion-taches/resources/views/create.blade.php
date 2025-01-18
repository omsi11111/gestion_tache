<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Tâche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }
        .banner {
            background: url('https://source.unsplash.com/1200x400/?task,work') no-repeat center center;
            background-size: cover;
            height: 200px;
            position: relative;
        }
        .banner h1 {
            color: white;
            position: absolute;
            bottom: 20px;
            left: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .form-container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Banner Section -->
    <div class="banner">
        <h1>Gestion des Tâches</h1>
    </div>

    <!-- Form Section -->
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="mb-4 text-center"><i class="fa fa-plus-circle"></i> Ajouter une Nouvelle Tâche</h2>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><i class="fa fa-heading"></i> Titre</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Entrez le titre de la tâche" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><i class="fa fa-file-alt"></i> Description</label>
                    <textarea id="description" name="description" class="form-control" rows="4" placeholder="Décrivez la tâche"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success me-2"><i class="fa fa-check"></i> Ajouter</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Retour</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
