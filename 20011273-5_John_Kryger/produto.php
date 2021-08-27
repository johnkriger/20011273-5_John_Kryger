<?php
    include ("produtos.php");
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        return 0;
    }
    foreach ($produto as $value) {
        if ($value["id"] == $id) {
        ?>
            <p><?=$value["imagem"];?></p>
            <p><?=$value["nome"];?></p>
            <p><?=$value["descricao"];?></p>
        <?php
        } else {
            //
        }
    }
    
?>