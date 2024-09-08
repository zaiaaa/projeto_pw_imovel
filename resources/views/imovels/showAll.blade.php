<!-- recursos/views/produtos/index.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Imóveis</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>endereço</th>
                <th>descrição</th>
                <th>proprietário</th>
                <th>Foto</th>
                <th>Data de cadastro</th>
                <th>Excluir</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($imovels as $imovel)
                <tr>
                    <td>{{ $imovel->id }}</td>
                    <td>{{ $imovel->endereco }}</td>
                    <td>{{ $imovel->descricao }}</td>
                    <td>{{ $imovel->proprietario }}</td>
                    <td>{{ $imovel->foto }}</td>
                    <td>{{ $imovel->created_at }}</td>
                    <button></button>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>