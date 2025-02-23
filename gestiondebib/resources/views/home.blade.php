<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100">
    <nav class="bg-pink-500 text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">MaktabatCandy</h1>
        <div class="flex items-center gap-4">
            <a href="{{ route('profile') }}" class="relative w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-lg">
                <span class="text-pink-500 font-bold">{{ substr(auth()->user()->name, 0, 1) }}</span>
            </a>
            <a href="{{ route('books.index') }}" class="bg-white text-pink-500 px-4 py-2 rounded-lg shadow-md hover:bg-pink-200 transition">Livres</a>
            <a href="{{ route('borrowings.index', auth()->user()->id) }}" class="bg-white text-pink-500 px-4 py-2 rounded-lg shadow-md hover:bg-pink-200 transition">Emprunts</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-white text-pink-500 px-4 py-2 rounded-lg shadow-md hover:bg-pink-200 transition">Déconnexion</button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto mt-10 text-center">
        <h2 class="text-3xl font-bold text-pink-600">Bienvenue, {{ auth()->user()->name }} !</h2>
        <p class="text-gray-600 mt-2">Profitez de la bibliothèque MaktabatCandy 📚</p>
    </div>
</body>
</html>
