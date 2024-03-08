<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php?id=<?$_POST["userId"]?>" method="GET">
        <input type="text" name="nome"> 
        <input type="radio" name="estCivil" value="Solteiro"> Solteiro
        <input type="radio" name="estCivil" value="Casado"> Casado <br>
        
        <select name="selEstado">
            <option value="Rio de Janeiro">RJ</option>
            <option value="Minas Gerais">MG</option>
            <option value="São Paulo">SP</option>
            <option value="Rio Grande do Sul">RS</option>
            <option value="Bahia">BA</option>
        </select>
        
        <select name="selMes">
            <option value="Janeiro">1</option>
            <option value="Fevereiro">2</option>
            <option value="Março">3</option>
            <option value="Abril">4</option>
            <option value="Maio">5</option>
            <option value="Junho">6</option>
            <option value="Julho">7</option>
            <option value="Agosto">8</option>
            <option value="Setembro">9</option>
            <option value="Outubro">10</option>
            <option value="Novembro">11</option>
            <option value="Dezembro">12</option>
        </select><br>
        <input type="checkbox" name="extras[]" value="Garagem">Garagem<br>
        <input type="checkbox" name="extras[]" value="Piscina">Piscina<br>
        <input type="checkbox" name="extras[]" value="Jardim">Jardim<br>
        <input type="hidden" name="token" value="123456">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>