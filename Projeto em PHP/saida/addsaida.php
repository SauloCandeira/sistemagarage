<?php
//Header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Registrar Saida</h3>
        <form action="createsaida.php" method="post">
        
            <div class="input-field col s12">
                <input type="time" name="horariosaida" id="horariosaida">
                <label for="horariosaida">Horario Saida</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="preco" id="preco">
                <label for="preco">Preço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="statos" id="statos">
                <label for="statos">Status</label>
            </div>
            <button type="submit" name="btn-register2" class="btn">Registrar Saida</button>
            <a href="../index.php" class="btn green">Lista de Veiculos</a>
        </form>
    </div>
</div>

<?php
//Footer
include_once '../includes/footer.php';
?>
