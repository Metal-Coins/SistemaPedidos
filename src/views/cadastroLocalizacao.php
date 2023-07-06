<?php
include('../../database/conn.php');
session_start();

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
    <link rel="stylesheet" href="../styles/cadastroLocation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <title>Localização </title>
</head>

<body>
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

            <li class="item-menu ativo">
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
        </ul>
    </nav>


     
    
    <div class="form">
        <h1>Cadastre seu Endereço</h1>
        <form action="../controllers/localizacaocontroller/localizacaoController.php" method="post"> 
            
            <div>
                <div>
                <label for="textCep">Cep</label>
                    <input id="txtCep" type="text" name="cep" >
                </div>
            </div>

            <div>
                <div>
                <label for="textRua">Rua</label>
                    <input id="textRua" type="text" name="rua" >
            </div>

            <div>
                <div>
                <label for="textNumero">Numero</label>                    
                    <input id="txtNumero" type="text" name="numero" >
                </div>
            </div>

            <div>
                <div>
                <label for="txtBairro">Bairro</label>
                    <input id="textBairro" type="text" name="bairro" >
                </div>
            </div>

            <div>
                <div>
                <label for="txtEstado">Estado</label>                    
                    <input id="textEstado" type="text" name="estado" >
                </div>
            </div>       
            <button type="">Cadastrar</button> 
        </form>
    </div>

    <script src="../js/menu.js" type="text/javascript"></script>
    <script src="../js/noRefresh.js" type="text/javascript"></script>
    <script src="../js/endereco.js" type="text/javascript"></script>
</body>
</html>


  