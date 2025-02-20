<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-pink-600 text-center">Inscription</h2>
        <form action="{{ route('register') }}" method="POST" class="mt-4">
            @csrf
            <label class="block text-gray-600">Nom</label>
            <input type="text" name="name" class="w-full p-2 border rounded-md mt-1 focus:ring-2 focus:ring-pink-400">

            <label class="block text-gray-600 mt-3">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded-md mt-1 focus:ring-2 focus:ring-pink-400">

            <label class="block text-gray-600 mt-3">Mot de passe</label>
            <input type="password" name="password" class="w-full p-2 border rounded-md mt-1 focus:ring-2 focus:ring-pink-400">

            <label class="block text-gray-600 mt-3">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="w-full p-2 border rounded-md mt-1 focus:ring-2 focus:ring-pink-400">

            <button type="submit" class="bg-pink-500 text-white w-full mt-4 p-2 rounded-lg shadow-md hover:bg-pink-600">S'inscrire</button>
        </form>

        <p class="text-gray-500 mt-4 text-center">Déjà inscrit ? <a href="{{ route('login') }}" class="text-pink-500 font-bold">Se connecter</a></p>
    </div>
</body>
</html>
