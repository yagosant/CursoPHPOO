<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP OO</title>
</head>
<body>
    <?php
    //codigo PHP
   require_once 'Caneta.php';
   

   $c1 = new Caneta;
   $c1 -> cor = "Azul";
   $c1 -> ponta = 0.5;
   $c1 -> tampada = false;
   



    ?>
</body>
</html>