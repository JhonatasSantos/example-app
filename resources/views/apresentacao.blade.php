<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>Nome</th>
        <th>Idade</th>
        </tr>
    
    <h1>Olá Mundo!</h1>
    @foreach($objetos as $objeto)
    <tr>
       <td>Meu nome é: {{ $objeto['nome']}}</td>
       <td>E tenho: {{ $objeto['idade'] }}</td>
       
    </tr>
    @endforeach
    </table>
</body>
</html>