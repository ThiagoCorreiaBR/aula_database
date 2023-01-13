<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$product->name}}</h1>
    <h3>R${{$product->price}},00</h3>
    <p>{{$product->description}}</p>
    <a href='/edit/{{$product->id}}'>Editar</a>

    <form action="/destroy/{{$product->id}}" method="POST">
        @csrf
        <button type="submit">Deletar</button>
    </form>

</body>
</html>