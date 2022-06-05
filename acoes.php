<?php

function home(){
    include("./view/home.php");
}

function login(){
    include("./view/login.php");
}


function listar(){
    $contatos = file('dados/dados.csv');
    include("./view/listar.php");

}


function cadastro(){
    if($_POST){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];

        $arquivo = fopen('dados/dados.csv','a+');
        fwrite ($arquivo, "{$nome};{$email};{$tel}".PHP_EOL);
        fclose ($arquivo);
       
    }
  
    include("./view/cadastro.php");

}


function excluir () {
    $id = $_GET['id'];    
    $contatos = file('dados/dados.csv');
    unset($contatos[$id]);
    unlink('dados/dados.csv');
    $arquivo = fopen('dados/dados.csv', 'a+');
    foreach ($contatos as $cadaContato) {
        fwrite($arquivo, $cadaContato);
    };
    fclose($arquivo);
  
};

function editar () {
    $id = $_GET['id'];    
    $contatos = file('dados/dados.csv');
    
    if ($_POST) {
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];

        unlink('dados/dados.csv');
        $contatos[$id] = "{$name};{$email};{$tel}".PHP_EOL;

        $arquivo = fopen('dados/dados.csv', 'a+');
        foreach ($contatos as $contato) {
            fwrite($arquivo, $contato);
        };
        fclose($arquivo);

        
    };

    $dados = explode(';', $contatos[$id]);
    include 'view/editar.php';
  
};