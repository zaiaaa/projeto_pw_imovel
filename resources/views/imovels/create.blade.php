<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imóvel</title>
</head>
<body>
    <form action="{{ route('registrar_imovel') }}" method="POST">
        @csrf
        <label for="">Endereço</label> <br />
        <input type="text" name="endereco" id="">
        <br />
        <label for="">Descrição</label> <br />
        <textarea type="text" name="descricao" id=""></textarea>
        <br />

        <label for="">Nome do Proprietário</label> <br />
        <input type="text" name="proprietario" id="">
        <br />

        <label for="">Foto do imóvel</label> <br />
        <input type="file" name="foto" id="">
        <br />

        <button>Salvar</button>
    </form>
</body>
</html>