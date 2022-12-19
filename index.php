<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Msx Test</title>
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="nav-container">
    <div class="nav-tittle-logo-container">
      <a class="home-link" href="?page=home">
        <img src="./assets/msx-contents.png" alt="Logo-Msx">
      </a>
      <h1>Msx News Test</h1>
    </div>
  </nav>
  <?php

  include("config.php");
  switch (@$_REQUEST["page"]) {
    case "novo":
      include("nova-noticia.php");
      break;
    case "home":
      include("listar-noticias.php");
      break;
    case "salvar":
      include("salvar-noticias.php");
      break;
    case "editar":
      include("editar-noticias.php");
      break;
    default:
      include("listar-noticias.php");
  }
  ?>
</body>

</html>