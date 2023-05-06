<?php
include('../../../database/conn.php');

//variavel global que pega os dados de todos os campos 
$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//se o botao de name create User for acionado
if (isset($user['createUser'])) {
    createUser($user);
} 

function createUser($user)
{
    global $conn;

    $query = "SELECT * FROM usuarios WHERE email='" . $user['email'] . "'";
    $checkingUser = $conn->prepare($query);
    $checkingUser->execute();
    $result = $checkingUser->rowCount();

    if ($result > 0) {
        echo ("<script>
          alert('E-mail já cadastrado! ');
          window.location.href='../../views/cadastro.php';
          </script>");
    } else if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        echo ("<script>
         alert('EMAIL INVÁLIDO!');
         window.location.href='../../views/cadastro.php';
        </script>");
    } else {
        $options = [
            'cost' => 10
        ];
        $hashedPass = password_hash($user['password'], PASSWORD_DEFAULT, $options);
        $date = date('Y-m-d H:i:s');
        $queryUser =
            "INSERT INTO usuarios (nome, email, telefone, endereco, senha)
             VALUES ('{$user['nome']}', '{$user['email']}', '{$user['telefone']}', '{$user['endereco']}', '{$hashedPass}');";

        $signedUser = $conn->prepare($queryUser);
        $signed = $signedUser->execute();

        if ($signed == true) {
            echo "<script>
             alert('Cadastro Realizado com SUCESSO , Faça seu Login para entrar! ');
              window.location.href='../../views/login.php';
            </script>";
        } else {
            echo "<script>
            alert('ERRO  em enviar o cadastro com a conexao do banco , USUÁRIO NÂO CADASTRADO!!  ');
            window.location.href='../../views/cadastro.php';
          </script>";
        }
    }
}


?>