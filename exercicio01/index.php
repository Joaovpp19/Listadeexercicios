<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Votação</title>
</head>
<body>
    <h1>Sistema de Votação</h1>
    <h2>Qual das cores abaixo você prefere?</h2>
    <form method="post" action="votação.php">
        <label for="opcao1">Vermelho</label>
        <input type="radio" name="opcao" value="Vermelho" id="opcao1" /><br>
        <label for="opcao2">Azul</label>
        <input type="radio" name="opcao" value="Azul" id="opcao2" /> <br>
        <label for="opcao3">Verde</label>
        <input type="radio" name="opcao" value="Verde" id="opcao3" /> <br>
        <br>

        <input type="submit" name="votar" value="Votar" />
        <br>
        
    </form>