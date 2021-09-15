<?php
include("conexion_bd.php");
$id = $_GET["id"];
$entrada = "SELECT * FROM factura_entrada WHERE no_factura ='".$id."'";
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
              <a href="perfil.php" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-person"></i></span>
                <span>Mi perfil</span>
              </a>
            </li>
            <li>
              <a href="usuarios.php" class="nav-link px-3 active">
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
              <a href="login.php" class="nav-link px-3 active">
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
            <h4>Entradas</h4>
          </div>
        </div>
        <!--Formulario entrada-->
        <div class="mb-3">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="bi bi-pen"></i></span> Editar Registro
                </div>
                <div class="card-body">
                  <div class="card-responsive">
                  <table
                    id="example"
                    class="table table-striped "
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>No. Factura</th>
                        <th>Fecha de creacion </th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Proveedor</th>
                        <th>Monto</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <?php 
                    $consulta = mysqli_query($conn, $entrada);
                    //while($row = mysqli_fetch_assoc($resultado)){ 
                    $row = mysqli_fetch_assoc($consulta);
                    ?>
                    <form action="procesar_actualizar.php" method="post">
                        <tbody>
                            <tr>
                                <td><input name="no_factura" size ="5" type="text" value="<?php echo $row['no_factura'];?>"></td>
                                <td><input name="fecha" size ="10" type="text" value="<?php echo $row['fecha'];?>"></td>
                                <td><input name="producto" size ="5" type="text" value="<?php echo $row['producto'];?>"></td>
                                <td><input name="cantidad" size ="5" type="text" value="<?php echo $row['cantidad'];?>"></td>
                                <td><input name="proveedor" size ="5" type="text" value="<?php echo $row['p_rut'];?>"></td>
                                <td><input name="monto" size ="8" type="text" value="<?php echo $row['total'];?>"></td>
                                <td><input type="submit" class="container__submit container__submit--actualizar" value="Actualizar"></td>
                            </tr>
                        <tbody>
                    </form>

                    <?php  
                        mysqli_free_result($consulta);
                    ?>
        </table>
                  </div>
                </div>
              </div>
            </div>
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
