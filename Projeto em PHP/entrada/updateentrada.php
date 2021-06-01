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

if (isset($_POST['btn-edit'])):
    $modelo = clear($_POST['modelo']);
    $placa = clear($_POST['placa']);
    $horarioentrada = clear($_POST['horarioentrada']);
    $id = clear($_POST['id']);

    $sql = "UPDATE entrada SET modelo = '$modelo', placa = '$placa', horarioentrada = '$horarioentrada' WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    else:
        header('Location: ../index.php');
    endif;
endif;