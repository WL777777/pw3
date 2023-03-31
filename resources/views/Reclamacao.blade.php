<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamacao</title>    
</head>
<body>

    <form action="/reclamacao" method="post">        
        {{csrf_field()}}        
        <input type="text" name="pc" placeholder="pc"/>
        <input type="text" name="idLab" placeholder="idLab"/>
        <input type="text" name="titulo" placeholder="titulo" />
        <input type="text" name="descricao" placeholder="descricao" />
        <input type="text" name="dtCriacao" placeholder="data de criacao" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($reclamacao as $c)        
        <p>
        {{$c->pc}}
        {{$c->idLab}}
        {{$c->titulo}}
        {{$c->descricao}}
        {{$c->dtCriacao}}
        <a href="/reclamacao/excluir/{{$c->idRec}}"> Excluir </a>
        </p>
    @endforeach
    
</body>
</html>