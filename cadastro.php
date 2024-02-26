<?php

require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  
  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Usuário cadastrado com sucesso.');</script>.";
  } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
  }
}
?>

<html lang="en">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="card.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="cadastro.css">
    
</head>
<body>
  
  <form method="post">
    <h2 style="text-align: center; color: black;">Cadastro</h2> 
      <div>
          <label for="nome" style="color: black;">Nome:</label>
          <input type="text" id="nome" name="nome" required >
      </div>
      <div>
          <label for="email" style="color: black;">Email:</label>
          <input type="email" id="email" name="email" required>
      </div>
      <div>
          <label for="senha" style="color: black;">Senha:</label>
          <input type="password" id="senha" name="senha" required>
      </div>
      <div>
          <input type="submit" value="Cadastrar">
      </div>
  </form>

  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body></html>