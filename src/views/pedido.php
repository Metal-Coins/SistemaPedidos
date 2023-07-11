<?php
include('../controllers/user/protected.php');
include('../../database/conn.php');

// $sql = $conn->prepare("SELECT  * as dia FROM  pedidos");
$sql = $conn->prepare("SELECT  *,  DATE_FORMAT(dia, '%d/%m/%Y') FROM pedidos WHERE id_cliente = :id_user");

$sql->execute(array(':id_user'=> $_SESSION['id']));
$rowTable = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/content.css">
    <link rel="stylesheet" href="../styles/GoogleFonts/GoogleFonts.css">
    <link rel="shortcut icon" href="../images/Hamburguer.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Pedidos</title>
</head>

<body>
<noscript><div align="center" style="background: black; color: yellow;"><br><br><h2>Para melhor experiência no nosso site precisamos do javascript <br><br> habilite o JavaScript em seu navegador!</h2><br><br><br></div><hr></noscript>
    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>
        <ul>
            <li class="item-menu">
                <a href="produtos">
                    <span class="icon"><i class="bi bi-bag-fill"></i></span>
                    <span class="txt-link">Produtos</span>
                </a>
                </div>
            </li>
            <li class="item-menu">
                <a href="localizacao">
                    <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <span class="txt-link">Localização</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="carrinho">
                    <span class="icon"><i class="bi bi-cart4"></i></span>
                    <span class="txt-link">Carrinho</span>
                </a>
            </li>
            <li class="item-menu ativo">
                <a href="pedido">
                    <span class="icon"><i class="bi bi-clipboard2-fill"></i></span>
                    <span class="txt-link">Seus Pedidos</span>
                </a>
                </div>
            </li>
            <li class="item-menu">
                <a id="logout">
                    <span class="icon"><i class="bi bi-door-closed-fill"></i></span>
                    <span class="txt-link">Sair</span>
                </a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="content">
        <h1>Seus Pedidos</h1>



        <?php


        ?>


        <?php
        foreach ($rowTable as $pedidos) {
            echo '<div class="card" >';
            //titulo
            echo "<p class='card-title'> Pedido N° " . $pedidos['id'] . "</p>";
            //informações
            echo '<div class="card-body">';
            echo "<p>Produto: " . $pedidos['valor_total'] . "</p>
            <p>".$pedidos['dia']."</p>
            <p>".$pedidos['hora']."</p>";
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            //botões
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    
    <script src="../js/menu.js" type="text/javascript"></script>
    <script src="../js/confirmlogout.js"></script>
</body>

</html>