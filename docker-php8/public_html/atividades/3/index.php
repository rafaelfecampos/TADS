<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="table.php" method="post">
        Nome: <input type="text" name="nome" ><br>
        Email: <input type="email" name="email"><br>
        Endereco: <input type="text" name="endereco"><br>
        Profissão: <select name="profissao" >
            <option value=""></option>
            <option value="Engenheiro de Software">Engenheiro de Software</option>
            <option value="Analista de Segurança de Informação">Analista de Segurança de Informação</option>
            <option value="Analista de Sistemas">Analista de Sistemas</option>
            <option value="Administrador de Sistemas">Administrador de Sistemas</option>
            <option value="Administrados de banco de dados (DBA)">Administrados de banco de dados (DBA)</option>
            <option value="Gestor de tecnologias de informção">Gestor de tecnologias de informção</option>
            <option value="Arquiteto de redes">Arquiteto de redes</option>
            <option value="Desenvolvedor">Desenvolvedor</option>
        </select><br>
        Gênero: <select name="genero" >
            <option value=""></option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            <option value="Prefiro não informar">Prefiro não informar</option>
            <option value="outro">Outro</option>
        </select>
        Se outro, qual?<input type="text" name="outro"><br>

        Área de interesse: <br>
        <input type="checkbox" name="interesse[]" value="Banco de dados"> Banco de dados <br>
        <input type="checkbox" name="interesse[]" value="Engenharia de software"> Engenharia de software <br>
        <input type="checkbox" name="interesse[]" value="Redes de computadores"> Redes de computadores <br>
        <input type="checkbox" name="interesse[]" value="Desenvolvimento de jogos"> Desenvolvimento de jogos <br>
        <input type="checkbox" name="interesse[]" value="Programção back-end"> Programção back-end <br>
        <input type="checkbox" name="interesse[]" value="Programação front-end"> Programação front-end <br>
        <input type="checkbox" name="interesse[]" value="Mineiração de dados"> Programação front-end <br>

        Fale conosco <input type="text" name="sac"><br>
        Deseja reeceber nossas promoções?
        Sim <input type="radio" name="promocao" value="sim">
        Não <input type="radio" name="promocao" value="nao"><br>
        Senha: <input type="password" name="senha"><br>
        Confirmação de senha: <input type="password" name="senha2"><br>
        <input type="submit" value="Confirmar">



    </form>
</body>
</html>