<?php
 include("conexion.php");
 $mensajes = "SELECT * FROM mensajes";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pdf.css">
  <link rel="stylesheet" href="incolor.css">
  <link rel="stylesheet" href="buttons.css">
  <link rel="icon" href="images/CATi.ico">
  
  <title>Mensajes</title>
</head>
<body>
   <table width="100%">
<tr>
  <td colspan="4">
    <section class="a">
      <form action="productos.php" method="post">
        <input type="submit" value="Productos">
      </form>
    </section>
  </td>
  <td colspan="4">
    <section class="b">
      <form action="Tiendas.php" method="post">
        <input type="submit" value="Tiendas">
      </form>
    </section>
  </td>
  <td colspan="4">
    <section class="c">
      <form action="mensajes.php" method="post">
        <input type="submit" value="Contactenos">
      </form>
    </section>
  </td>
  </td>
</tr>
</table>
  
    <br><br><br><br>
    <div class="container-table">
    <div class="table__title">Mensajes Usuarios</div>
    <div class="table__header">Nombre</div>
    <div class="table__header">Telefono</div>
    <div class="table__header">Correo</div>
    <div class="table__header">Mensaje</div>
     <div class="table__header">Eliminar</div>
    <?php $resultado = mysqli_query($conectar, $mensajes);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
    <div class="table__item"><?php echo $row["nombre"];?></div>
    <div class="table__item"><?php echo $row["tel"];?></div>
    <div class="table__item"><?php echo $row["correo"];?></div>
    <div class="table__item"><?php echo $row["mensaje"];?></div>
   <div class="table__item"> <a href="eliminar.php?id=<?php echo $row['id']?>"><img src="images/elimi.png" width="40%"></a></div>
   
    <?php } ?>
  </div>
  <a href="fpd.php"><button id="pdf"><img src="images/pdf.png" width="40px"></button></a>
  

</body>
</html>