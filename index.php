<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World PHP</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>
    <?php
    echo "Olá, mundo! 🔥";
    $name = "Leonardo";
    ?>
  </h1>
  <p>
    <?php
    if ($name > 0) {
      echo "Meu nome é <strong>{$name}</strong>! 🔥";
    } else {
      echo 'Deu ruim?';
    }
    ?>
  </p>
  <p>
    <?php echo 'testando a assinatura do git 7' ?>
  </p>
</body>

</html>
