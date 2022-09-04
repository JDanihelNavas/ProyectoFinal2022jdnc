<?php
  include("cn.php");
  $mensajes = "SELECT * FROM mensajes";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Mensajes</title>
</head>
<body>
    <h1>Mensajes de Clientes:</h1>
    <div class="container">
  <a href="productos.php" class="btn1"> Productos/Servicios </a>
  <a href="Tiendas.php" class="btn2">Tiendas</a>
  <a href="Contactenos.php" class="btn3" >Contactenos</a>
</div>

<div class="container-table">
  <div class="table__header">Nombre</div>
  <div class="table__header">Apellidos</div>
  <div class="table__header">Correo Electronico</div>
  <div class="table__header">Telefono</div>
  <div class="table__header">Mensaje</div>
  <?php $resultado = mysqli_query($conexion, $mensajes);
  while($row=mysqli_fetch_assoc($resultado)) { ?>
  <div class="table__item"><?php echo $row["Nombre"];?></div>
  <div class="table__item"><?php echo $row["Apellido"];?></div>
  <div class="table__item"><?php echo $row["Correo Electronico"];?></div>
  <div class="table__item"><?php echo $row["Telefono"];?></div>
  <div class="table__item"><?php echo $row["Mensaje:"];?></div>  
<?php } mysqli_free_result($resultado); ?>
</div>

</body>
</html>