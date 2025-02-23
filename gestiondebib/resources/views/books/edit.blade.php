<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-pink-600 mb-5">Modifier un livre</h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST" class="bg-white rounded-lg shadow-md p-5">
            @csrf
            @method('PUT')
            @include('books._form')
            <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-600">Enregistrer les modifications</button>
        </form>
    </div>
</body>
</html>
