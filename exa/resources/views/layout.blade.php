<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
<body>
<div id="app">
<header class="h-15vh bg-emerald-500 flex flex-row justify-between">
    <h1>Victor Naudin Examen de Laravel</h1>
    @guest
    <div>
        <form action="login" method="POST">
            @method('post')
            @csrf
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Password">
        </form>
        <a href="register">Registrase</a>
    </div>
    @endguest
    @auth
        Conectado como {{auth()->user()->name}}
        <form action="logout" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
    @endauth

</header>
<nav class="h-10vh bg-emerald-500 flex flex-row justify-start">
    <a  class="w-1/12 bg-gray-800 text-white" href="{{route("alumnos.index")}}">Alumnos</a>



</nav>
</div>
<main>
 @yield("contenido")
</main>
<footer>
    @copyright pero copia lo que quieras...
</footer>
</body>
</html>
