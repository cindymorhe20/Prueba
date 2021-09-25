<?php

include ("conexion.php");



if (isset($_POST['guardar_productos'])){
     $nombre = $_POST['nombre'];
     $codigo = $_POST['codigo'];
     $precio = $_POST['precio'];
     $stock = $_POST['stock'];
   
    
     $query = "INSERT INTO  productos(nombre, codigo, precio, stock) 
    VALUES ('$nombre', '$codigo', '$precio', '$stock')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Producto Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: Productos.php");
}

?>