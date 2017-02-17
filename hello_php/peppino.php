<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Hello Php</title>
  </head>

  <body>
    <h1>Operazioni</h1>
    <?php
    $num = $_POST["numero"];
    $num2 = $_POST["numero2"];

    $somma = $num + $num2;
    $prodotto = $num * $num2;
    $differenza = $num - $num2;
    $divisione = $num / $num2;
    $resto = $num % $num2;
    ?>
      <p>Il prodotto tra <?php echo $num; ?> e <?php echo $num2; ?> è <?php echo $prodotto; ?></p>
      <p>La somma tra <?php echo $num; ?> e <?php echo $num2; ?> è <?php echo $somma; ?></p>
      <p>La differenza tra <?php echo $num; ?> e <?php echo $num2; ?> è <?php echo $differenza; ?></p>
      <p>La divisione tra <?php echo $num; ?> e <?php echo $num2?> è <?php echo $divisione; ?></p>
      <p>Il resto tra <?php echo $num; ?> e <?php echo $num2; ?> è <?php echo $resto?></p>

    <p>Torna a <a href="index.php">index</a></p>
  </body>
</html>
