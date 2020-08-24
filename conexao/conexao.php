<?php
    //passo 1 - abrir a conexao
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";

    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    //passo 2 - testar a conexão
    if ( mysqli_connect_errno() ){
        die("Conexao falhou: " . mysqli_connect_errno());
    }
        
?>