<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Site</title>
</head>
<body>
  <header>
    <h1>Meu Site</h1>
    <hr>
  </header>

  <?php
    $this->renderView($viewName, $modelData);
  ?>

  <footer>
    <hr>
    <h2>Direitos Reservados</h2>
  </footer>
</body>
</html>