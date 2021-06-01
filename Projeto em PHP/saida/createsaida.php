<?php
    //Connection
    require_once '../php_action/db_connect.php';

    //Function against XSS
    function clear($input) {
        global $connect;
        $var = mysqli_escape_string($connect, $input);
        $var = htmlspecialchars($var);
        return $var;
    }

    if (isset($_POST['btn-register2'])):
        $horariosaida = clear($_POST['horariosaida']);
        $preco = clear($_POST['preco']);
        $statos = clear($_POST['statos']);


        $sql = "INSERT INTO saida (horariosaida, preco, statos) VALUES ('$horariosaida', '$preco', '$statos')";
        if(mysqli_query($connect, $sql)):
            header('Location: ../index.php');
        else:
            header('Location: ../index.php');
        endif;
    endif;