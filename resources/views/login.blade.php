<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action='/signin' method="POST">
        @csrf
        <input name="email" type="email" placeholder="E-mail">
        <input name="password" type="password" placeholder="senha">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>