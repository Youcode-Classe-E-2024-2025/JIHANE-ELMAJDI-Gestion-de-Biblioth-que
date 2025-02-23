<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres Empruntés - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-pink-600 mb-5">Livres Empruntés</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($borrowings as $borrowing)
                <div class="bg-white rounded-lg shadow-md p-5">
                    <h3 class="text-xl font-bold text-pink-600">{{ $borrowing->book->title }}</h3>
                    <p class="text-gray-600">Auteur: {{ $borrowing->book->author }}</p>
                    <p class="text-gray-600">Emprunté le: {{ $borrowing->borrow_date }}</p>
                    <p class="text-gray-600">Retour prévu le: {{ $borrowing->return_date }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
