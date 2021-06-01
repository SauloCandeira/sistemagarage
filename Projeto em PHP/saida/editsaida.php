<?php
//Header
include_once '../includes/header.php';
//Connection
include_once '../php_action/db_connect.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM saida WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
endif;

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Alterar Dados</h3>
        <form action="updatesaida.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo" value="<?php echo $data['modelo'] ?>">
                <label for="modelo">Modelo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="placa" id="placa" value="<?php echo $data['placa'] ?>">
                <label for="placa">Placa</label>
            </div>
            <div class="input-field col s12">
                <input type="time" name="horarioentrada" id="horarioentrada" value="<?php echo $data['horarioentrada'] ?>">
                <label for="horarioentrada">Entrada</label>
            </div>
            <button type="submit" name="btn-edit" class="btn">Alterar Dados</button>
            <a href="../index.php" class="btn green">Lista de Veiculos</a>
        </form>
    </div>
</div>

<?php
//Footer
include_once '../includes/footer.php';
?>
