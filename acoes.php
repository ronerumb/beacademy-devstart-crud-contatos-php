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
