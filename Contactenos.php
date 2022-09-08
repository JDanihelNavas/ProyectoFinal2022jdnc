<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactenos</title>
    <link rel="stylesheet" href="contactenos.css">
      <link rel="stylesheet" href="botones.css">
      <link rel="stylesheet" href="incolor2.css">
      <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<br>
  
        <a href="productos.php" class="btn1"> Productos/Servicios </a>
        <a href="Tiendas.php" class="btn2">Tiendas</a>
        <a href="mensajes.php" class="btn3" >Mensajes</a>
  
        <div id="wrapper" class="container">              
                 <center>
<br><br>
                    <h1>Contactenos</h1><hr>
                    <form class="w3-container" action="guardar.php" method="post">
        <p>
            <label>Nombres</label>
            <input class="w3-input" type="text" name="a">
        </p>
        <p>
            <label>Teléfono/Celular</label>
            <input class="w3-input" type="text" name="b">
        </p>
        <p>
            <label>Correo Electrónico</label>
            <input class="w3-input" type="text" name="c">
        </p>
        <label>Mensaje</label>
        <input class="w3-input" type="text" name="d"></p>
        <input type="submit" value="Enviar Mensaje" name="e">
    </form>
                 </center>
              </div>
    <br><br>
      <center><a href="index.php"><button id="salir" style="background-color:red;">Cerrar Sesion</button></a></center>
            <table class="table table-hover">
        <tr class="table-dark">
              <th scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PBX 4785-0205</font></font></th>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carne: 2021-40289</font></font></td>
              <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre: Josue Danihel Navas Cruz</font></font></td>
            </tr>
          </tbody>
        </table>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>