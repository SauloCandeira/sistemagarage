<?php
//Connection
include_once '../php_action/db_connect.php';

//Function against XSS
function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-delete2'])):
    $id2 = clear($_POST['id2']);

    $sql = "DELETE FROM saida WHERE id2 = '$id2'";
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    else:
        header('Location: ../index.php');
    endif;
endif;