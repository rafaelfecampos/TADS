<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>Nome</td>
            <td>
                <?php if($_REQUEST["nome"] === ""):?>
                    Vazio
                <?php else:?>
                    <?=ucwords($_REQUEST["nome"])?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?php if($_REQUEST["email"] === ""):?>
                    Vazio
                <?php else:?>
                    <?=strtolower($_REQUEST["email"])?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td>
                <?php if($_REQUEST["endereco"] === ""):?>
                    Vazio
                <?php else:?>
                    <?=ucwords($_REQUEST["endereco"])?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Profissão</td>
            <td>
                <?php if($_REQUEST["profissao"] === ""):?>
                    Vazio
                <?php else:?>
                    <?=$_REQUEST["profissao"]?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Gênero</td>
            <?php if($_REQUEST["genero"] === ""):?>
                    <td>Vazio</td>
                <?php else:?>
                    <?php if($_REQUEST["genero"] == "outro"):?>
                        <td><?=$_REQUEST["outro"]?></td>
                    <?php else:?>
                        <td><?=$_REQUEST["genero"]?></td>
                    <?php endif?>
                <?php endif;?>
        </tr>
        <tr>
            <td>Área de interesse</td>
            <td>
                <?php if(empty($_REQUEST["interesse"]) ):?>
                    Vazio
                <?php else:?>
                    <?php foreach($_REQUEST["interesse"] as $interesse):?>
                        <?=$interesse?><br>
                    <?php endforeach;?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Fale conosco</td>
            <td>
                <?php if($_REQUEST["sac"] === ""):?>
                    Vazio
                <?php else:?>
                    <?=$_REQUEST["sac"]?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Receber promoções</td>
            <td>
                <?php if(empty($_REQUEST["promocao"])):?>
                    Vazio
                <?php else:?>
                    <?=$_POST["promocao"]?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Senha</td>
            <td>
                <?php if($_REQUEST["senha"] === ""):?>
                    Vazio
                <?php else:?>
                    <?php if(strlen($_REQUEST["senha"])< 6):?>
                        É recomendado uma senha com mais de 6 caracteres!
                    <?php else: ?>
                        <?=$_REQUEST["senha"]?>
                    <?php endif;?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <td>Confirmar senha</td>
            <td>
                <?php if($_REQUEST["senha2"] === ""):?>
                    Vazio
                <?php else:?>
                    <?php if($_REQUEST["senha2"] == $_REQUEST["senha"]):?>
                        Senhas compatíveis!
                    <?php else: ?>
                        Senhas incompatíveis!
                    <?php endif; ?>
                <?php endif;?>
            </td>
        </tr>
    </table>
</body>
</html>