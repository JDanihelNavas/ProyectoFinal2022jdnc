<?php
include ("conexion.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM mensajes WHERE id = $id ";
    $resul = mysqli_query($conectar, $query);
    if(!$resul){
        die ("No se pudo eliminar");
    }
    header("location:mensajespdf.php");
}
?>