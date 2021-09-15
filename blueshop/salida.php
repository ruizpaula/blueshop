 <?php
include("conexion_bd.php");
$salida = "SELECT factura_salida.no_factura, factura_salida.fecha, factura_salida.cliente, factura_salida.cantidad, producto.nombre_pro FROM producto INNER JOIN factura_salida ON factura_salida.producto = producto.codigo_pro";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>BlueShop</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >BlueShop</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Buscar"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form> 
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                Dashboard
              </div>
            </li>
            <li>
              <a href="index.html" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-house"></i></span>
                <span>Inicio</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                Gestiones
              </div>
            </li>
            <li>
              <a href="inventario.php" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-card-checklist"></i></span>
                <span>Inventario</span>
              </a>
            </li>
            <li>
              <a href="entrada.php" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-truck"></i></span>
                <span>Entradas</span>
              </a>
            </li>
            <li>
              <a href="salida.php" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-bag"></i></span>
                <span>Salidas</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Configuraciones
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-person"></i></span>
                <span>Mi perfil</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-people"></i></span>
                <span>Gestion usarios</span>
              </a>
            </li>
              <a
                class="nav-link px-3 active"
                data-bs-toggle="collapse"
                href="#layouts">
                <span class="me-2"><i class="bi bi-palette"></i></span>
                <span>Personalizar</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      
                      <span>Colores</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-3">
                      
                      <span>Fuente</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-3">
                      
                      <span>Tamaño</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-arrow-right-square"></i></span>
                <span>Cerrar sesion</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Registro de salidas</h4>
          </div>
        </div>
        
        <!--Tabla-->
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Registrar salida
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Venta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"  >
                        <form method="post" >
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No.Factura</label>
                                <input type="text" class="form-control" name="no_factura" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Fecha de creacion</label>
                                <input type="text" class="form-control" placeholder="aaaa/mm/dd" name="fecha">
                            </div>v
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cliente</label>
                                <input type="text" class="form-control" name="cliente" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Producto</label>
                                <select name="producto" class="form-select">
                                    <option value="1">Selecciona</option> 
                                    <option value="144">Sueter</option>
                                    <option value="133">Camisa</option>
                                    <option value="155">Vestido</option>
                                    <option value="166">Blusa</option>
                                </select>
                            </div>
                            <!--<div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" placeholder="$$$">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cantidad Pagada</label>
                                <input type="text" class="form-control" name="pagada" placeholder="$$$">
                            </div>-->
                            <input type="submit" value="Agregar" name="agregar" class="btn btn-primary">
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                    </div>
                <!--/Button add-->
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>No. Factura</th>
                        <th>Fecha de creacion</th>
                        <th>Cliente</th>
                        <th>Producto</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <?php 
                    $consulta = mysqli_query($conn, $salida);
                    while($row = mysqli_fetch_assoc($consulta)){
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $row['no_factura'];?></td>
                        <td><?php echo $row['fecha'];?></td>
                        <td><?php echo $row['cliente'];?></td>
                        <td><?php echo $row['nombre_pro'];?></td>
                        <td>
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-pencil-square"></i></button>
                        
                        </td>
                      </tr>
                      
                    </tbody>
                    <?php  
                    } mysqli_free_result($consulta);
                    ?>
                  </table>
                  <?php
                        include("agregar_salida.php");

                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Graficos-->
      </div>
      
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
