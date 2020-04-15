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
    <a href="/">
        <h2 class="addtitle">Atualizar Produto</h2>
    </a>
    @if($validate ?? '')
        <h5 class="error">{{$validate}}</h5>
    @endif
    @if($produto ?? '')
    <div  class="formadd">
        <form action="/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$produto->id}}">
            <div class="form-group">
                <label for="nomeInput">Nome</label>
                <input type="text" name="nome" class="form-control" id="nomeInput" value="{{$produto->nome}}">
            </div>
            <div class="form-group">
                <label for="descricaoInput">Descricao</label>
                <textarea class="form-control" name="descricao" id="descricaoInput" rows="3">{{$produto->descricao}}</textarea>
            </div>
            <div class="form-group">
                <label for="valorInput">Valor</label>
                <input type="number" class="form-control" name="valor" id="valorInput" value="{{$produto->valor}}">
            </div>
            <button type="submit" class="btn btn-success btn-lg">Atualizar Produto</button>
        </form>
    </div>
    @endif

</body>
</html>