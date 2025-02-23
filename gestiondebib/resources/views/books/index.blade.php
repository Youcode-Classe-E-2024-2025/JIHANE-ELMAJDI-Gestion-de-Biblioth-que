<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-pink-600 mb-5">Liste des livres</h2>
        <a href="{{ route('books.create') }}" class="bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-600 mb-5 inline-block">Ajouter un livre</a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($books as $book)
                <div class="bg-white rounded-lg shadow-md p-5">
                    <h3 class="text-xl font-bold text-pink-600">{{ $book->title }}</h3>
                    <p class="text-gray-600">Auteur: {{ $book->author }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="text-pink-500 hover:text-pink-700">Voir détails</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
