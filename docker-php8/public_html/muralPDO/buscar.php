<form action="" method="post">
    <input type="text" name="buscar" id="buscar">
    <input type="submit" value="Buscar">
</form>

<?php

if (isset($_POST["buscar"])):
    $id = $_POST["buscar"];
    $sql = "SELECT id, nome, email, cidade, texto FROM tads.recados WHERE id=?;";

    $stmt = $con->prepare($sql);
    $stmt->bind_param('i',$id);
    
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FECTCH_PROPS_LATE, "RecadoDAO");

    if ($stmt->execute()):
        $recado = $stmt->fetch(); 
        var_dump($recado);     
    endif;

endif;