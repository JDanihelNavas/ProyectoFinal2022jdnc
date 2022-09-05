<?php
include('conexion.php');
if (isset($_POST['enviar'])) {
    $aa=$_POST['nombre'];
    $bb=$_POST['apellido'];
    $cc=$_POST['correo'];
    $dd=$_POST['telefono'];
    $de=$_POST['mensaje'];
    $query="INSERT INTO usuarios(nombre, apellido, telefono, correo, mensaje) VALUES ('$aa','$bb', '$cc', '$dd')";
$resultado=mysqli_query($conectar, $query);
if ($resultado) {
    echo '<script lenguage="javascript">';
    echo 'alert("DATO INGRESADO EXITOSAMENSTE")
    window.location = "Contactenos.php";
    </script>';
    }
    if (!$resultado) {
        die('Error al guardar los datos');
    }
}
?>


