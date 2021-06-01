<?php
    //Header
    include_once 'includes/header.php';
    //Connection
    require_once 'php_action/db_connect.php';
?>

<div class="row">
    <div class="col s12 m8 push-m2">
        <h3 class="light">ENTRADA:</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Modelo:</th>
                    <th>Placa:</th>
                    <th>Horario Entrada:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Getting information from database
                $sql = "SELECT * FROM entrada";
                $result = mysqli_query($connect, $sql);

                //Check if any data has been returned
                if (mysqli_num_rows($result) > 0):
                    while($data = mysqli_fetch_array($result)):
                    ?>
                    <tr>
                        <!-- DATABASE ENTRADA -->
                        <td><?php echo $data['modelo'] ?></td>
                        <td><?php echo $data['placa'] ?></td>
                        <td><?php echo $data['horarioentrada'] ?></td>
                        
                        <!-- Buttons edit and delete -->
                        <td><a href="saida/addsaida.php?id=<?php echo $data['id'] ?>" class="btn-floating green"><i class="material-icons">done</i></a></td>
                        <td><a href="entrada/editentrada.php?id=<?php echo $data['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $data['id'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $data['id'] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Hey!</h4>
                                <p>Are you sure you want to delete this vehicle?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="entrada/deleteentrada.php" method="post">
                                    <!-- Buttons inside modal -->
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                    <button type="submit" name="btn-delete" class="btn red">Delete</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                                </form>
                            </div>
                        </div>

                    </tr>
                    <?php endwhile;
                        else:?>
                        <tr>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                        </tr>
                    <?php
                        endif;
                    ?>
            </tbody>
        </table>
        <br>
        <a href="entrada/addentrada.php" class="btn"> Registrar Entrada</a>
    </div>
</div>

<div class="row">
    <div class="col s12 m8 push-m2">
        <h3 class="light">SAIDA:</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Modelo:</th>
                    <th>Placa:</th>
                    <th>Horario Entrada:</th>
                    <th>Horario Saida:</th>
                    <th>Preço:</th>
                    <th>Status:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Getting information from database
                $sql = "SELECT * FROM saida, entrada";
                $result = mysqli_query($connect, $sql);

                //Check if any data has been returned
                if (mysqli_num_rows($result) > 0):
                    while($data = mysqli_fetch_array($result)):
                    ?>
                    <tr>

                        <!-- DATABASE ENTRADA -->
                        <td><?php echo $data['modelo'] ?></td>
                        <td><?php echo $data['placa'] ?></td>
                        <td><?php echo $data['horarioentrada'] ?></td>

                        <!-- DATABASE SAIDA -->
                        <td><?php echo $data['horariosaida'] ?></td>
                        <td><?php echo $data['preco'] ?></td>
                        <td><?php echo $data['statos'] ?></td>

                        <!-- Buttons edit and delete -->
                        <td><a href="saida/editsaida.php?id=<?php echo $data['id2'] ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $data['id2'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                        

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $data['id2'] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Hey!</h4>
                                <p>Are you sure you want to delete this vehicle?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="saida/deletesaida.php" method="post">
                                    <!-- Buttons inside modal -->
                                    <input type="hidden" name="id2" value="<?php echo $data['id2'] ?>">
                                    <button type="submit" name="btn-delete2" class="btn red">Delete</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                                </form>
                            </div>
                        </div>
                        
                        
                    </tr>
                    <?php endwhile;
                        else:?>
                        <tr>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                        </tr>
                    <?php
                        endif;
                    ?>
            </tbody>
        </table>
        <br>
        <a href="index.php" class="btn green">Relatorios</a>
    </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>


