<?php
include('config.php');

$sqlCliente   = ("SELECT * FROM clientes ORDER BY id DESC ");
$queryCliente = mysqli_query($con, $sqlCliente);
$cantidad     = mysqli_num_rows($queryCliente);
?>


<div class="col-md-12 p-2">
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Cédula <span style="font-size:12px;">(Rut)</span></th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Celular</th>
          </tr>
        </thead>
        <tbody>
          <?php
              while ($dataCliente = mysqli_fetch_array($queryCliente)) { ?>
          <tr>
            <td><?php echo $dataCliente['cedula']; ?></td>
            <td><?php echo $dataCliente['nombre']; ?></td>
            <td><?php echo $dataCliente['correo']; ?></td>
            <td><?php echo $dataCliente['celular']; ?></td>
          </tr>
        </tbody>
        <?php } ?>

    </table>
</div>
</div>