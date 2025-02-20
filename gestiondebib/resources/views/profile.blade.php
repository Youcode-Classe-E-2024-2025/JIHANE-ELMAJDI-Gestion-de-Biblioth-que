<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - MaktabatCandy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 min-h-screen flex flex-col items-center justify-center">

  
    <div class="bg-white p-6 rounded-2xl shadow-lg text-center w-80">
     
        <div class="w-20 h-20 mx-auto bg-pink-500 text-white flex items-center justify-center rounded-full text-3xl font-bold border-4 border-white shadow-md">
            {{ substr(auth()->user()->name, 0, 1) }}
        </div>
        
        <h2 class="text-2xl font-bold text-pink-600 mt-3">{{ auth()->user()->name }}</h2>
        <p class="text-gray-600">{{ auth()->user()->email }}</p>

        <div class="mt-5 flex flex-col gap-3">
            <a href="{{ route('home') }}" class="bg-pink-500 text-white px-4 py-2 rounded-full font-bold shadow-md hover:bg-pink-600 transition duration-300">
                Retour
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-full font-bold shadow-md hover:bg-gray-700 transition duration-300">
                    Déconnexion
                </button>
            </form>
        </div>
    </div>

</body>
</html>
