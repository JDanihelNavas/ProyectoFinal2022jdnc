<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio De Sesion</title>
  <script src="https://kit.fontawesome.com/05f5e822e2.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="diseño.css">
  <script src="login.js"></script>
</head>
<body>
  <br>
    <h1 align="center">INICIAR SESION</h1>
    
  <div class="container">
    <div class="main">
      <img src="images/LOGO.jpg">
      <form id="form_id" method="POST" name="myform">
        <label>Usuario</label>
        <input type="text" name="usuar" id="usuar" placeholder="Ingrese Su Usuario">
        <label>Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
        <input type="button" value="Login" id="sumit" onclick="validate()">
      </form>
    </div>
  </div>

  

</body>
</html>
