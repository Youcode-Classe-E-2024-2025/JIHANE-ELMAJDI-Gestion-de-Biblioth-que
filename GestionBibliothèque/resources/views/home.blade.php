<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 flex flex-col items-center justify-center h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center">
    <h2 class="text-2xl font-bold mb-5 text-pink-600">Bienvenue</h2>
    <p class="mb-4 text-gray-600">Tu es connecté avec succès 🎉</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full bg-red-500 text-white p-2 rounded-lg hover:bg-red-600">
            Déconnexion
        </button>
    </form>
</div>

</body>
</html>
