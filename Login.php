<?php

require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
  
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    
    // Executa a consulta
    $result = $conn->query($sql);
    
    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Credenciais válidas, redireciona para a página home
        header("Location: homepage.html");
        exit();
    } else {
        // Credenciais inválidas, redireciona para a página de login com uma mensagem de erro
        header("Location: homepage.html?erro=1");
        exit();
    }
} else {
    // Se o formulário não foi submetido corretamente, redireciona de volta para a página de login
    header("Location: login.php");
    exit();
}

// Fecha a conexão com o banco de dados
$conn->close()

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin" onsubmit="return validateEmail()">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email"onblur="validacaoEmail" name= "email" placeholder="Digite seu e-mail" autofocus="true" required>
            <label for="password">Senha</label>
            <input type="password" name= "senha" placeholder="Digite sua senha" />
            <a href="esqueci.html">Esqueci minha senha</a>
            <input href="index.html" type="submit" value="Acessar" class="btn-readmore"> 
        </form>
    </div>
</body>
</html>