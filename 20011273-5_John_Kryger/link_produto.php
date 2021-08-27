<?php
    include ("produtos.php");
    foreach ($produto as $value) {      //parte responsável por imprimir nomes na tela
    ?>
      <p><a href="index.php?pagina=produto.php&id=<?=$value["id"];?>"><?=$value["nome"];?><?=$value["valor"];?></a></p>
    <?php
    }