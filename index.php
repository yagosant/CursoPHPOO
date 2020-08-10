<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP OO</title>
</head>
<body>
<pre>
    <?php
    //codigo PHP
   require_once 'Caneta.php';

   $c1 = new Caneta;
   $c1 -> cor = "Vermelho";
   $c1 -> modelo = "BIC";

  
    print_r($c1);


    ?>
    </pre>
</body>
</html>