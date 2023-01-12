<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar produto</h1>
    <form action='/store' method="POST">
        @csrf
        <input name='name' placeholder='Nome'>
        <input name='description' placeholder="Descrição">
        <input name="price" placeholder="Preço" type="number">
        <button type="submit">enviar</button>
    </form>

</body>
</html>