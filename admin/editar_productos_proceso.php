<?php include ("db.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DetallesMH - Productos</title>
        <link rel="icon" type="image/x-icon" href="../admin/img/regalo.ico">
       
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
     
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
       
        <link href="css/estilo.css" rel="stylesheet" />    </head>
        <link href="css/styles.css" rel="stylesheet" />    </head>

    <body id="page-top">
    
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="login.php"> Logout ADMIN</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Clientes.php">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="IngresarVenta.php">Ingresar Venta</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Inventario.php">Inventario</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Compras.php">Compras</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Ventas.php">Ventas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Proveedores.php">Proveedores</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Detalles MH</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Globos, Arreglos, Chocolates y más!</h2>
                </div>
            </div>
        </header>
        <?php
   
   $id_producto = $_GET['id_producto'];
   $codigo = $_POST['codigo'];
   $nombre = $_POST['nombre'];
   $precio = $_POST['precio'];
   $stock = $_POST['stock'];
   $imagen = $_POST['imagen'];
   
 
   $query = "UPDATE productos set codigo = '$codigo', nombre = '$nombre', precio = '$precio', stock = '$stock', imagen = '$imagen'
    
   WHERE id_producto=$id_producto";
    mysqli_query($conn, $query);

 
 ?>

<div class="alert alert-dark" role="alert">
   Producto Actualizado
</div>

<form action="Productos.php" method="post" >
  <center>
<input type="submit" class="btn btn-primary js-scroll-trigger"name="volver" value="Volver">
</center>
</form>
</div>
            </div>
        </header>
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © DetallesMH 2021</div></footer>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
