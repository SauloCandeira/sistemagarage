<?php
//Header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Veiculo</h3>
        <form action="createentrada.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="placa" id="placa">
                <label for="placa">Placa</label>
            </div>
            <div class="input-field col s12">
                <input type="time" name="horarioentrada" id="horarioentrada">
                <label for="horarioentrada">Entrada</label>
            </div>
            <button type="submit" name="btn-register" class="btn">Registrar Entrada</button>
            <a href="index.php" class="btn green">Lista de Veiculos</a>
        </form>
    </div>
</div>

<?php
//Footer
include_once '../includes/footer.php';
?>
