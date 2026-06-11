<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cafofo 351</title>
  <link rel="icon" href="imagens/divulga/logosemfundo.png">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #121212;">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">
        <img src="imagens/divulga/novalogo2.png" alt="Cafofo351">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quem">Quem Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Loja
            </a>
            <ul class="dropdown-menu" style="background-color: #121212;">
              <li><a class="dropdown-item" href="#">Canecas</a></li>
              <li><a class="dropdown-item" href="#">Pelucias</a></li>
              <li><a class="dropdown-item" href="#">Decoração</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Todas as categorias</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <main>
    <?php
    if (isset($_GET["param"])) {
      $p = explode("/", $_GET["param"]);
    }

    $page = $p[0] ?? "home";

    $pagina = "paginas/{$page}.php";

    // verificar se o arquivo existe
    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }
    ?>
  </main>

  <footer class="footer" style="background-color: #121212;">

    <div class="redes-sociais">
      <a href="https://www.instagram.com/cafofo351" target="_blank">
        <i class="fa-brands fa-instagram icone-social"></i>
      </a>

      <a href="https://www.facebook.com/suapagina" target="_blank">
        <i class="fa-brands fa-facebook icone-social"></i>
      </a>

      <a href="https://www.instagram.com/brunoaavt/" target="_blank">
        <i class="fa-solid fa-computer icone-social"></i>
      </a>
    </div>

  </footer>
</body>

</html>