<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Doce Sabor</title>
    <style>
        .menu{
            width: 100%; float: left; background-color: #d3d3d3; padding: 18px 8 px;
        }
        .menu li a{
            margin-right: 25px;
        }
        .menu li a:hover{
            color: #fff;
        }
        footer{
            color: red;
        };

    </style>
</head>
<body>
    <header>
    <img src="./imagens/logo.jpg"
    width= "75px">
        <nav class= "menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?pagina=link_produto.php">Produtos</a></li>
                <li><a href="index.php?pagina=quem_somos.php">Quem somos</a></li>
                <li><a href="index.php?pagina=contato.php">Contato e localização</a></li>
            </ul>
        </nav>
    </header>
   
    <main>
    <?php
        if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
            $pagina = $_GET["pagina"];      //local onde define qual pagina será mostrada
            include ($pagina);
		}

        ?>

   
    </main>
    <footer>
        John Emerson Lopes Kryger teste 
        Login: 20011273-5
        Curso: Superior de Tecnologia em Sistemas Para Internet
    </footer>
    </body>
</html>
