<?php

require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];
  
  $sql = "INSERT INTO suporte (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
  
  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Mensagem enviada com sucesso.');</script>.";
  } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
  }
};
?>
<html lang="en" data-bs-theme="dark">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Suporte</title>
  <link rel="stylesheet" type="text/css" href="card.css">
  <link rel="" href="homepage.css"> 
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <header data-bs-theme="dark">
    <div class="collapse text-bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 offset-md-1 py-4">
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="Homepage.html" class="navbar-brand d-flex align-items-center">
          <img src="Logo.png" width="75" height="75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></img>
        </a>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container">
            <a href="Homepage.html" id="inicio">
              <button type="button" class="btn btn-primary"> <h7>Início</h7> </button></a>
      </div>
    </div>
  </div>
  </header>

      
<body>
  
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-6 text-center">
      <h2 id="formulario" class="mb-4">Formulário de Suporte</h2>
      <form method="post">
        <div class="form-group" >
          <label for="nome">Nome:</label>
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu Nome">
        </div>
        <div class="form-group" id="gaga">
          <label for="email">E-mail:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="seu.email@example.com">
        </div>
        <div class="form-group" id="gaga">
          <label for="mensagem">Mensagem:</label>
          <textarea class="form-control" id="mensagem" rows="4" name="mensagem" placeholder="Digite sua mensagem aqui"></textarea>
        </div>
        <button type="submit" name="submit" id="gaga"class="btn btn-primary" onclick="animateButton()">Enviar</button>
      </form>
    </div>
  </div>
</div>

<script>
  function animateButton() {
    document.querySelector('button').classList.add('animated');
    
    setTimeout(() => {
      document.querySelector('button').classList.remove('animated');
    }, 300);
  }
</script>
</body>



<footer class="text-body-secondary py-5">
  <div class="container">
    <div class="col-sm-8 col-md-7 py-4">
      <h4> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
      </svg> Contato</h4>
      
      (12) 996762054
    </div>
    
      
    
    <div class="col-sm-8 col-md-7 py-4">
        <h4>Sobre nós</h4>
        <p class="text-body-secondary">Somos um grupo de estudantes que uniu sua paixão por carros antigos para criar um site inovador. Combinando habilidades variadas, desde histórias felizes até tristes, eles buscam proporcionar uma experiência única aos fãs de carros antigos.</p>
    </div>
</div>
</footer>
      
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>