<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar produtos</h1>
    <form action='/update/{{$product->id}}' method="POST">
        @csrf
        <input name="name" value="{{$product->nome}}">
        <input name="description" value="{{$product->description}}">
        <input name="price" value="{{$product->price}}" type="number" step="any">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>