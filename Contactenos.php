<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="mensajespdf.css">
    <link rel="stylesheet" href="contactenos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


        <div id="wrapper" class="container">
        <a href="productos.php" class="btn1"> Productos/Servicios </a>
        <a href="Tiendas.php" class="btn2">Tiendas</a>
        <a href="mensajes.php" class="btn3" >Mensajes</a>
  
                
                 <center>
<br>
                    <h1>Contactenos</h1><hr>
                        <form  method="POST" name="form-work" action="guardar.php">
                    
                                <fieldset>
                                
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Nombre</label>
                                      <input name="nombre" class="form-control" placeholder="Tu nombre" type="text">
                                      </div>
                                    </div>
                          
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Apellido</label>
                                        <input name="apellido" class="form-control" placeholder="Tu apellido" type="text">
                                      </div>
                                    </div>
                          
                                    
                          
                                    
                          
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">Email</label>
                                        <input name="email" class="form-control" placeholder="email" type="text">
                                      </div>
                                    </div>
                          
                                   
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="number">Numero de Celular</label>
                                        <input name="telefono" class="form-control" placeholder="Numero de Celular" type="text">
                                      </div>
                                    </div>
                          
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="mesage">Mensaje</label>
                                        <input name="mensaje" class="form-control" placeholder="Mensaje" type="text">
                                      </div>
                                    </div>
                          
                                  
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" name="enviar" class="btn btn-primary btn-lg btn-block info">Enviar</button>
                                      </div>
                                    </div>
                                    
                                    
                                    
                                </fieldset> 
                              </form>
                 </center>
              </div>
    




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>