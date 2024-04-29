<?php
require_once "ProfissionalDAO.php";

require_once "Profissional.php";

$pro = new Profissional();

if(isset($_GET['alterar'])):
    $id = $_GET['alterar'];
    $pro = ProfisionalDAO::buscar($id);
//    ProfisionalDAO::alterar($id,$pro);
endif;
?>


<form action="<?= ($pro->getId()) ? "?Atualizar={$pro->getId()}" : "" ?>" method="post">
    <table>
        <tr>
            <td><label for="nome">Nome:</label></td>
            <td><input type="text" name="nome" id="nome" placeholder="Seu nome" value="<?= $pro->getNome()??''?>"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email" placeholder="seu.email@email.com"
                       value="<?= $pro->getEmail()??''?>"></td>
        </tr>
        <tr>
            <td><label for="endereco">Endereço:</label></td>
            <td><input type="text" name="endereco" id="endereco" placeholder="Seu endereço"
                       value="<?= $pro->getEndereco()??''?>"></td>
        </tr>
        <tr>
            <td><label for="profissao">Qual sua profissão? </label></td>
            <td>
                <select name="profissao" id="profissao">
                    <option value="<?= ($pro->getProfissao())?>" >
                        <?= $pro->getProfissao() ?? "Selecione a profissão" ?></option>
                    <option value="Engenheiro de Software">Engenheiro de Software</option>
                    <option value="Analista de Segunrança de Informação">Analista de Segunrança de Informação</option>
                    <option value="Analista de Sistemas">Analista de Sistemas</option>
                    <option value="Administrador de Sistemas">Administrador de Sistemas</option>
                    <option value="Administrador de banco de dados (DBA)">Administrador de banco de dados (DBA)</option>
                    <option value="Gestor de texnologias da informação">Gestor de texnologias da informação</option>
                    <option value="Arquiteto de redes">Arquiteto de redes</option>
                    <option value="Desenvolvedor">Desenvolvedor</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="genero">Qual seu gênero? </label></td>
            <td>
                <select name="genero" id="genero">
                    <option value="<?= $pro->getGenero()??''?>" >
                        <?=$pro->getGenero()??"Selecione o genero"?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Nao informado">Prefiro não informar</option>
                    <option value=''>Outro</option>
                </select>
                <label for="Outro">Se outro, Qual?</label>
                <input type="text" name="Outro" id="outro">
            </td>
        </tr>
        <tr>
            <td id='texto-alinhado'><label for="interesse[]">Selecione suas <br> áreas de interesse: </label></td>
            <td>
            <input type="checkbox" name="interesse[]" class="interesse" value="Banco de Dados"
                        <?php $pro->isChecked("Banco de Dados"); ?>> Banco de Dados
            <input type="checkbox" name="interesse[]" class="interesse" value="Engenharia de Software"
                        <?php $pro->isChecked("Engenharia de Software") ?>> Engenharia de Software
            <input type="checkbox" name="interesse[]" class="interesse" value="Redes de Computadores"
                        <?php $pro->isChecked("Redes de Computadores"); ?>> Redes de Computadores
            <input type="checkbox" name="interesse[]" class="interesse" value="Desenvolvimento de jogos"
                        <?php $pro->isChecked("Desenvolvimento de jogos"); ?>> Desenvolvimento de jogos <br>
            <input type="checkbox" name="interesse[]" class="interesse" value="Programação back-end"
                        <?php $pro->isChecked("Programação back-end"); ?>> Programação back-end
            <input type="checkbox" name="interesse[]" class="interesse" value="Programação front-end"
                        <?php $pro->isChecked("Programação front-end"); ?>> Programação front-end
            <input type="checkbox" name="interesse[]" class="interesse" value="Mineração de Dados"
                        <?php $pro->isChecked("Mineração de Dados"); ?>> Mineração de Dados

            </td>
        </tr>
        <tr>
            <td><label for="faleConoso">Fale conosco: </label></td>
            <td><textarea type="text" name="faleConosco" id="faleConosco" cols='50' rows='5'
                          value="<?= $pro->getRecado()??''?>"><?= $pro->getRecado()??''?></textarea></td>
        </tr>
        <tr>
            <td><label for="promo">Receber nossas promoções </label></td>
            <td><input type="checkbox" name="promo" id="promo" <?= ($pro->getPromo() == 1)?"checked":''?>></td>
        </tr>
        <tr>
            <td><label for="senha">Senha:</label></td>
            <td><input type="password" name="senha" id="senha"
                        placeholder="<?= ($pro->getSenha())?"Insira novamente":"Sua senha" ?>"></td>
        </tr>
        <tr>
            <td><label for="senhaConfirma">Confirme sua senha: </label></td>
            <td><input type="password" name="senhaConfirma" id="senhaConfirma" placeholder="Digite sua senha novamente"></td>
        </tr>
        <tr>
            <td><input type="submit" value="<?= ($pro->getId())?"Atualizar":"Cadastrar"?>" name="enviar"></td>
            <td></td>
        </tr>
    </table>
</form>

<?php

    if(isset($_POST['enviar'])){
        if($_POST['senha']==$_POST['senhaConfirma']) {
            $pro->setId($_GET['Atualizar']);
            $pro->setNome($_POST['nome']);
            $pro->setEmail($_POST['email']);
            $pro->setEndereco($_POST['endereco']);
            $pro->setProfissao($_POST['profissao']);

            if($_POST['genero']!=''){
                $pro->setGenero($_POST['genero']);
            }else{
                $pro->setGenero($_POST['Outro']);
            }

            $pro->setInteresse($_POST["interesse"]);
            $pro->setRecado($_POST['faleConosco']);
            $pro->setPromo($_POST["promo"]);
            $pro->setSenha($_POST['senha']);
            if($_POST['enviar'] == 'Cadastrar'){
                ProfisionalDAO::criar($pro);
            }else if($_POST['enviar'] == 'Atualizar'){
                ProfisionalDAO::alterar($pro->getId(), $pro);
//                var_dump($pro);
            }
        }else{
            echo "<p>senha diferente</p>";
        }
    }