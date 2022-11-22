<?php

    $BD = new mysqli('localhost','root','','appware');

    if($BD->connect_errno){
        echo "<p>Erro de conexão ao banco de dados. <br>
        $BD->errno --> $BD->connect_error</p>";
        die();

    }

    $BD->query("SET NAMES 'utf8'");
    $BD->query("SET character_set_connection=utf8");
    $BD->query("SET character_set_client=utf8");
    $BD->query("SET character_set_results=utf8");
    
?>