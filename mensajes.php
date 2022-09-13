<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mensajes.css">
    <link rel="stylesheet" href="incolor.css">
     <link rel="stylesheet" href="buttons.css">
    <link rel="icon" href="images/CATi.ico">
    <script src="login2.js"></script>
    <title>Iniciar Sesion</title>
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
<div class="container"> 
    
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
            
            <div class="row">                
                <div class="iconmelon">
                  <br><br><br><h1 align="center" style="color:white;">INICIAR SESION</h1>
                </div>
            </div>
        
            <div class="container">
    <div class="main">
      <img src="images/LOGO.jpg">
      <form id="form_id" method="POST" name="myform">
        <label>Usuario</label>
        <input type="text" name="usuar" id="usuar" placeholder="Ingrese Su Usuario">
        <label>Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
        <input type="button" value="Entrar" id="sumit" onclick="validate()">
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
        
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <center><a href="index.php"><button id="salir" style="background-color:red;">Cerrar Sesion</button></a></center>
  <table class="table table-hover">
  <tr class="table-dark">
        <th scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PBX 4785-0205</font></font></th>
             <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Direccion: 9av A 9-08 Boulevard Los Proceres z.21</font></font></td>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carne: 2021-40289</font></font></td>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre: Josue Danihel Navas Cruz</font></font></td>
      </tr>
    </tbody>
  </table>
   
</body>
</html>