<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('alterar_imovel', ['id' => $imovel->id]) }}" method="POST">
        @csrf
        <label for="">Endereço</label> <br />
        <input type="text" name="endereco" id=""  value="{{$imovel->endereco}}">
        <br />
        <label for="">Descrição</label> <br />
        <input type="text" name="descricao" id=""  value="{{$imovel->descricao}}">
        <br />

        <label for="">Nome do proprietário</label> <br />
        <input type="text" name="proprietario" id="" value="{{$imovel->proprietario}}">
        <br />

        <label for="">Foto</label> <br />
        <input type="file" name="foto" id="" value="{{$imovel->foto}}">
        <br />

        <button>Salvar</button>
    </form>
</body>
</html>