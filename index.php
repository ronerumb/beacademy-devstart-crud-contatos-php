<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php $url = $_SERVER["REQUEST_URI"];
include ("./acoes.php");

include("./view/menu.php");


if($url === '/'){

  home();
}

if($url === '/login'){

   login();
}

if($url === '/listar'){

    listar();
 }
 if($url === '/cadastro'){

    cadastro();
 }

?>
    
</body>
</html>

