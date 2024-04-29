<form action="" method="post">
    <label for="buscar">Insira o id:</label>
    <input type="text" name="buscar">
    <input type="submit" value="Buscar">
</form>

<?php
require_once "ProfissionalDAO.php";
if(isset($_POST['buscar'])){
    $resultado = ProfisionalDAO::buscar($_POST['buscar']);
    echo "
        <ul>
            <li>Nome: {$resultado->getNome()}</li>
            <li>Email: {$resultado->getEmail()}</li>
            <li>Endereco: {$resultado->getEndereco()}</li>
            <li>Profissão: {$resultado->getProfissao()}</li>
            <li>Genero: {$resultado->getGenero()}</li>
            <li>Interesse: {$resultado->getInteresse()}</li>
            <li>Recado: {$resultado->getRecado()}</li>
            <li>Receber Promocao: {$resultado->isPromo()}</li>
            <li>Senha: {$resultado->getSenha()}</li>
        </ul>
    ";
}