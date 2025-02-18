<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nom">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe">
    <button type="submit">S'inscrire</button>
</form>
