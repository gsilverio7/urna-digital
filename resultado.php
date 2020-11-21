
<html>

<head>
    <title>Eleições</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/images/urna.png">
    <script src="script.js"></script>
</head>
<body>
    <h1>Eleições 2020 - Volta Redonda</h1>
    <h2>Prefeito</h2>

  <div class="link-box">
    <a href="index.php">Clique aqui para voltar para a urna.</a>
  </div>  

  <h2 class="title02">Apuração</h2>

  <div class="grid">

  <?php 
    include 'apuracao.php';
  ?>

  </div>

</body>
</html>