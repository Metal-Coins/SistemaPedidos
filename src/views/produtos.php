<?php
include('../../database/conn.php');
include('../controllers/user/protected.php');

$readUser = $conn->prepare('SELECT * FROM produtos');
$readUser->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/RealizarPedido.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/GoogleFonts/GoogleFonts.css">
    <link rel="shortcut icon" href="../images/Hamburguer.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/content.css">
    <link rel="stylesheet" href="../styles/ListaProduto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/adicionarCarrinho.scss">
    <script src="../js/JQuery.js"></script>
    <title>Produtos</title>
</head>

<body>

    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>
        <ul>
            <li class="item-menu ativo">
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
            <li class="item-menu">
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
        <div>
            <h1 id="Title">Faça aqui o seu Pedido</h1>
        </div>

        <h3 class="Sub-prod">Escolha seu Alimento</h3>

        <div>
            <?php
            foreach ($readUser as $linha) {
                ?>
                <div class="Prod1">
                    <img class="imgProd product-image"
                        src="../controllers/products/<?= strip_tags($linha['path_imagem']) ?>" />
                    <p>
                    <h2 id="titleProd" class="product-title">
                        <?= strip_tags($linha['nome']) ?>
                    </h2>
                    </p>
                    <p>
                    <h4 id="descProd">
                        <?= strip_tags($linha['descricao']) ?>
                    </h4>
                    </p>
                    <p>
                    <div id="product-price"><b> R$: </b>
                        <?= strip_tags($linha['preco']) ?>
                    </div>
                    </p>
                    <button onclick="clicar(
                        '<?= strip_tags($linha['id']) ?>' , 
                        '<?= strip_tags($linha['nome']) ?>' , 
                        '<?= strip_tags($linha['descricao']) ?>' , 
                        '<?= strip_tags($linha['preco']) ?>' , 
                        '<?= strip_tags($linha['path_imagem']) ?>' 
                       )">
                        <img id="imgAdd" src="../images/adicionar-produto.png" alt="">
                    </button>
                </div>
                <?php
            }
            ?>
        </div>
    </div>


    <script src="../js/menu.js" type="text/javascript"></script>
    <script src="../js/validateNumber.js" type="text/javascript"></script>
    <script src="../js/cartAjax.js"></script>
    <script src="../js/JQuery.js"></script>
    <script src="../js/confirmlogout.js"></script>
    <script src="../js/confirmCart.js"></script>



</body>

</html>