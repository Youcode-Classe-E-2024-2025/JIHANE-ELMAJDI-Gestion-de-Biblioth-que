<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg w-96">
    <h2 class="text-2xl font-bold mb-5 text-center text-pink-600">Créer un compte</h2>

    @if(session('success'))
        <p class="text-green-500 text-center">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Nom" class="w-full p-2 mb-3 border rounded-lg border-pink-400 focus:ring-pink-500" required>
        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-3 border rounded-lg border-pink-400 focus:ring-pink-500" required>
        <input type="password" name="password" placeholder="Mot de passe" class="w-full p-2 mb-3 border rounded-lg border-pink-400 focus:ring-pink-500" required>
        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" class="w-full p-2 mb-3 border rounded-lg border-pink-400 focus:ring-pink-500" required>
        <button type="submit" class="w-full bg-pink-500 text-white p-2 rounded-lg hover:bg-pink-600">
            S'inscrire
        </button>
    </form>

    <p class="mt-4 text-center">Déjà un compte ? <a href="{{ route('login') }}" class="text-pink-500">Se connecter</a></p>
</div>

</body>
</html>
