<?php include ("../admin/db.php");

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
        <link href="css/style.css" rel="stylesheet" />    </head>
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
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4"><i class="fas fa-gifts"></i> Compras</h1>
                    <hr>
                    <div class="col-md-12">
                        <table style="width: 100%;" class="table table-stripedd">
                            <thead class="thead-dark">
                                <tr>
                                <th>Número de Factura </th>   
                                <th>Nombre Proveedor</th>
                                <th>Número de NIT</th>
                                    <th>Fecha</th>
                                    <th>Cantidad de Artículos</th>
                                    <th>Total de Compra</th>
                                    <th>Imagen de la Factura</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                       $query = "SELECT * FROM compras";
                       $result = mysqli_query($conn, $query);
                       
                       while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                <td><?php echo $row['factura_numero'] ?></td>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['nit'] ?></td>
                                    <td><?php echo $row['fecha'] ?></td>
                                    <td><?php echo $row['cantidad-articulos'] ?></td>
                                    <td><?php echo $row['total-compra'] ?></td>
                                    <td><img height="50px"src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                                    
                                  
                                        <a href="editar_compras.php.php?id_compra=<?php echo $row['id_compra']?>" class="btn btn-dark">
                                        <i class="fas fa-edit"></i>

                                        </a>
                                        
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></i>
                                               
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
                                                        ¿Está seguro que quiere eliminar la compra?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a href="eliminar_compras.php?id=<?php echo $row['id_compra']?>" class="btn btn-danger btn-block">ELIMINAR<i class="fas fa-trash"></i></i>
                                        
                                        </a>
                                                      <button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><i class="fas fa-arrow-left"></i>Regresar</button>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
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
