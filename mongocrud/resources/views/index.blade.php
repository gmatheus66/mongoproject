<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1 class="title">Produtos</h1>

    <a href="/create" class="add btn btn-success">Adicionar Produto</a>
    @if($msg = Session::get('msg'))
        <h4 class="msg" >{{$msg}}</h4>
    @endif
    @if(sizeof($produto) > 0)
        @foreach($produto as $prod)
        <div class="cd card">
            <div class="card-header">
               Nome - {{$prod->nome}}
            </div>
            <div class="card-body">
                <p class="card-text">Descriçao - {{$prod->descricao}}</p>
                <h5 class="card-title">Valor - {{$prod->valor}}</h5>
                <div class="btnaction">
                    <a href="/{{$prod->id}}" class="btn btn-warning ">Edit Mulher</a>
                    <a href="/delete/{{$prod->id}}" class="btn btn-danger btnact">Apagar</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h2 class="prodnull">Nenhum Produto Cadastrado</h2>
    @endif

</body>
</html>