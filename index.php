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

<?php 
$url = explode('?', $_SERVER['REQUEST_URI']);
include ("./acoes.php");

?>

<div class="container p-2 m-2">
<?php 

include("./view/menu.php");
?>
</div>


<?php 

if($url[0] === '/'){

  home();
  
}

elseif($url[0] === '/login'){

   login();
}

elseif($url[0] === '/listar'){

    listar();
 }
 elseif($url[0] === '/cadastro'){

    cadastro();
 }

 elseif($url[0] === '/excluir'){

    excluir();
 }

 
 elseif($url[0] === '/editar'){

   editar();
}
else{
 naoexiste();
}

?>
    
</body>
</html>

