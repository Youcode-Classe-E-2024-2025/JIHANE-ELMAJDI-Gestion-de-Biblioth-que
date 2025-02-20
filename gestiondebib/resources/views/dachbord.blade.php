<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800 flex flex-col items-center justify-center h-screen">
    <h1 class="text-5xl font-extrabold text-pink-600 mb-6">Bienvenue à MaktabatCandy</h1>
    <div class="space-x-6">
        <a href="{{ route('login') }}" class="px-6 py-3 text-white bg-pink-500 hover:bg-pink-700 rounded-lg shadow-lg transition duration-300">Connexion</a>
        <a href="{{ route('register') }}" class="px-6 py-3 text-white bg-pink-500 hover:bg-pink-700 rounded-lg shadow-lg transition duration-300">Inscription</a>
    </div>
</body>
</html>
