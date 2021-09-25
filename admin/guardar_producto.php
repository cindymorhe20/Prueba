<?php

include ("conexion.php");


if (isset($_POST['guardar_producto'])){
     $nombre= $_POST['nombre'];
     $codigo = $_POST['codigo'];
     $precio= $_POST['precio'];
     $stock= $_POST['stock'];
     $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

     $query = "INSERT INTO  productos(nombre, codigo , precio, stock, imagen) 
      Values ('$nombre', '$codigo', '$precio', '$stock', '$imagen')";
     $result = mysqli_query ($conn, $query);
     if ($result){
         echo("Query Failed");
     }

      $_SESSION['message'] = 'Producto Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../admin/crearproductos.php");
    }
    
?>