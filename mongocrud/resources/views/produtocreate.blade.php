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
        <h2 class="addtitle">Adicionar Produto</h2>
    </a>
    @if($validate ?? '')
        <h5 class="error">{{$validate}}</h5>
    @endif
    <div  class="formadd">
        <form action="/create" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeInput">Nome</label>
                <input type="text" name="nome" class="form-control" id="nomeInput" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="descricaoInput">Descricao</label>
                <textarea class="form-control" name="descricao" id="descricaoInput" placeholder="blablabla" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="valorInput">Valor</label>
                <input type="number" class="form-control" name="valor" id="valorInput" placeholder="Valor">
            </div>
            <button type="submit" class="btn btn-success btn-lg">Adicionar Produto</button>
        </form>
    </div>

</body>
</html>