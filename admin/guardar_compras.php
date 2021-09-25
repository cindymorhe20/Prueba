<?php

include ("db.php");



if (isset($_POST['guardar_compras'])){
     $factura_numero= $_POST['factura_numero'];
     $nombre = $_POST['nombre'];
     $fecha = $_POST['fecha'];
     $cantidad_articulos = $_POST['cantidad_articulos'];
     $total_compra = $_POST['total_compra'];
     $imagen_factura = $_POST['imagen_factura'];
     $nit = $_POST['nit'];
    
     $query = "INSERT INTO  compras(factura_numero, nombre, fecha, cantidad_articulos, total_compra, imagen_factura, nit) 
    VALUES ('$factura_numero', '$nombre', '$fecha', '$cantidad_articulos','$total_compra','$imagen_factura','$nit')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Compra Guardada';
      $_SESSION['message_type'] = 'info';

      header ("Location: Compras.php");
}

?>