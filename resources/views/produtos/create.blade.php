<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome" id="">
        <br />
        <label for="">Custo</label> <br />
        <input type="text" name="custo" id="">
        <br />

        <label for="">Preço</label> <br />
        <input type="text" name="preco" id="">
        <br />

        <label for="">Quantidade</label> <br />
        <input type="text" name="quantidade" id="">
        <br />

        <button>Salvar</button>
    </form>
</body>
</html>