<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <style>

body {
    margin: 0;
    padding: 0;
    height: 100vh; 
    display: flex;
    justify-content: center; 
    align-items: center; 
    background-color: #f4f4f9; 
}

.login-container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #007bff;
}

.input-group {
    margin-bottom: 25px; 
}

input {
    width: 100%;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    box-sizing: border-box;
    background-color: #ffffff;
    color: #333333;
    transition: border-color 0.3s ease;
}

input:focus {
    border-color: #66ccff; 
    outline: none;
}

.btn-submit {
    width: 100%;
    padding: 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: #0056b3;
}

.register-link {
    text-align: center;
    margin-top: 15px;
}

.register-link a {
    color: #007bff;
    font-size: 16px;
}

.register-link a:hover {
    text-decoration: underline;
    color: #0056b3;
}

     </style>
</head>
<body>
   
<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Se connecter</h2>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit" class="btn-submit">Se connecter</button>
        <p class="register-link">Pas encore de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
    </form>
</div>

 
</body>
</html>