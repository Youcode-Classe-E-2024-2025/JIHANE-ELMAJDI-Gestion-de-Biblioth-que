<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un livre - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-pink-600 mb-5">Ajouter un livre</h2>
        <form action="{{ route('books.store') }}" method="POST" class="bg-white rounded-lg shadow-md p-5">
            @csrf
            @include('books._form')
            <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-600">Enregistrer</button>
        </form>
    </div>
</body>
</html>
