<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-pink-600 mb-5">{{ $book->title }}</h2>
        <div class="bg-white rounded-lg shadow-md p-5">
            <p class="text-gray-600">Auteur: {{ $book->author }}</p>
            <p class="text-gray-600">Description: {{ $book->description }}</p>
            <p class="text-gray-600">Date de publication: {{ $book->publication_date }}</p>
            <a href="{{ route('books.index') }}" class="bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-600 mt-5 inline-block">Retour à la liste</a>
            <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 mt-5 inline-block">Modifier</a>

            @if(is_null($book->borrowings()->whereNull('return_date')->where('user_id', auth()->user()->id)->first()))
                <form action="{{ route('books.borrow', $book->id) }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600 mt-5">Emprunter</button>
                </form>
            @else
                <form action="{{ route('books.return', $book->id) }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-yellow-600 mt-5">Retourner</button>
                </form>
            @endif

            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 mt-5">Supprimer</button>
            </form>
        </div>
    </div>
</body>
</html>
