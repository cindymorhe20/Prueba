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
   if(isset($_GET['id_compra'])){
    $id_compra= $_GET['id_compra'];
    $query = "SELECT * FROM compras WHERE id_compra=$id_compra";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $factura_numero= $row['factura_numero'];
        $nombre= $row['nombre'];
        $fecha= $row['fecha'];
        $cantidad_articulos= $row['cantidad_articulos'];
        $total_compra= $row['total_compra'];
        $imagen_factura= $row['imagen_factura'];
        $nit= $row['nit'];   
    }
}

?>
      <form action="../admin/editar_compras_proceso.php?id_compra=<?php echo $_GET['id_compra']; ?>" method="POST">
        
      <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4"><i class="fas fa-gifts"></i>Editar Compra</h1>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <?php if (isset($_SESSION['message'])){ ?>
                                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show"
                                    role="alert">
                                    <?= $_SESSION['message'] ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php session_unset();} ?> -->
                                <div class="card card-body">
                                    <form action="../admin/guardar_compras.php" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-8 order-md-1">
                                            <h4 class="mb-3">Compra</h4>
                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-gift"></i>
                                                        <label for="factura_numero">Número de Factura</label>
                                                        <input type="text" REQUIRED name="factura_numero" class="form-control"
                                                            placeholder="" autofocus>
                                                        <div class="invalid-feedback">
                                                            Se requiere un número válido.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-barcode"></i>
                                                        <label for="nombre">Nombre Proveedor</label>
                                                        <input type="text" REQUIRED name="nombre" class="form-control"
                                                            placeholder="" autofocus>
                                                        <div class="invalid-feedback">
                                                            Se requiere un nombre válido.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-barcode"></i>
                                                        <label for="nit">Número de NIT</label>
                                                        <input type="text" REQUIRED name="nit" class="form-control"
                                                            placeholder="" autofocus>
                                                        <div class="invalid-feedback">
                                                            Se requiere un número válido.
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <i class="fas fa-coins"></i>
                                                    <label for="fecha" class="control-label">Fecha de la Factura</label>
                                                    <input type="text" REQUIRED name="fecha" class="form-control"
                                                        placeholder="" autofocus>
                                                </div>

                                                <div class="form-group">
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                                    <label for="cantidad_articulos" class="control-label">Cantidad de Artículos</label>
                                                    <input type="text" REQUIRED name="cantidad_articulos" class="form-control"
                                                        placeholder="" autofocus>
                                                </div>
                                                <div class="form-group">
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                                    <label for="total_compra" class="control-label">Total de la Compra</label>
                                                    <input type="text" REQUIRED name="total_compra" class="form-control"
                                                        placeholder="" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <i class="far fa-image"></i>
                                                        <label>Imagen</label>
                                                        <br></br>
                                                        <input type="file" 
                                                         name="imagen_factura"  REQUIRED  >
                                                        </div><br/>

                                       
                                            <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModal"><i class="far fa-save"></i>
                                                Guardar
                                              </button>
                                              
                                              <!-- Modal -->
                                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>AVISO</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Desea guardar la compra?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-dark btn-block" name="guardar_compras"
                                            value="Guardar">
                                                      <button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><i class="fas fa-arrow-left"></i>Regresar</button>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                    </form>
                                </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
        </section>
       
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © DetallesMH 2021</div></footer>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
