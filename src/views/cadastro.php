<?php
include('../../database/conn.php')
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/centralize.css">
    <link rel="stylesheet" href="../styles/Lvalidation.css">
    <link rel="stylesheet" href="../styles/cadastro.css">
    <link rel="shortcut icon" href="../images/Hamburguer.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/GoogleFonts/GoogleFonts.css">
    <title>Cadastro</title>
</head>

<body>
<img id="backCadastro" src="../images/imglogin.png" alt="">
    <div class="container">
    <img class="LogoC" src="../images/LogoTCC.png" alt="">
        <h1 class="center">Realizar Cadastro</h1>
        <h3 class="center">Informe um login válido</h3>

        <div class="form-control">
            <form method="post" action="../controllers/user/userController.php">
                <label for="nome" title="Adicione seu nome">Nome </label>
                <input  type="text" id="nome" name="nome">
                
                <!-- <i class="img-success"><img src="../images/success-icon.svg" alt=""></i>
                <i class="img-error"><img src="../images/error-icon.svg" alt=""></i>
                <small id="msg-error">Error Message</small>
                <i class="img-alert"><img src="../images/alert-icon.svg" alt=""></i> -->

                <label  for="email" title="Adicione seu email">Email </label>
                <input type="email" id="email" name="email">
                <!-- <i class="img-success"><img src="../images/success-icon.svg" alt=""></i>
                <i class="img-error"><img src="../images/error-icon.svg" alt=""></i>
                <small id="msg-error">Error Message</small>
                <i class="img-alert"><img src="../images/alert-icon.svg" alt=""></i>
                <small id="msg-alert">Login não Encontrado</small> -->

                <label for="Telefone" title="Adicione seu telefone">Telefone </label>
                <input type="tel" id="Telefone" name="telefone">
                <!-- <i class="img-success"><img src="../images/success-icon.svg" alt=""></i>
                <i class="img-error"><img src="../images/error-icon.svg" alt=""></i>
                <small id="msg-error">Error Message</small> -->

                <label  for="Endereco" title="Adicione seu endereco">Endereço </label>
                <input type="text" id="Endereco" name="endereco">
                <i class="img-success"><img src="../images/success-icon.svg" alt=""></i>
                <i class="img-error"><img src="../images/error-icon.svg" alt=""></i>
                <small id="msg-error">Error Message</small>

                <label for="password" title="Crie sua senha">Senha </label>
                <input type="password" id="password" name="password" />
            
                <label for="confirmPassword" title="Confirme a sua senha">Confirmar Senha </label>
                <input type="password" id="confirmPassword" name="password" />
   
                <button type="submit" onclick="" name="createUser">CADASTRAR</button>

                <p class="center">Já possui Login? <a href="login.php" style="color:#a29df3;">Entrar</a></p>

            </form>
        </div>
    </div>

    <script src="../js/Lvalidation.js"></script>
    <script src="../js/confirmUser.js"></script>

</body>

</html>