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

if (isset($_POST['btn-edit2'])):
    $horariosaida = clear($_POST['horariosaida']);
    $preco = clear($_POST['preco']);
    $statos = clear($_POST['statos']);
    $id2 = clear($_POST['id2']);

    $sql = "UPDATE saida SET horariosaida = '$horariosaida', preco = '$preco', statos = '$statos' WHERE id2 = '$id2'";
    
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    else:
        header('Location: ../index.php');
    endif;
endif;