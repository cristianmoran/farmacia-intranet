<?php

// se incluye el header para todas las paginas expecto INVENTARIO > PRODUCTOS e INVENTARIO > CATEGORIAS
$titulo = "Mi perfil";
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
include "$_SERVER[DOCUMENT_ROOT]/pages/header.php";
?>
<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-pills"></i></div>
                <div class="sidebar-brand-text mx-3"><span class="fs-5">Intranet</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" id="dashboard"><a class="nav-link" href="../public/index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item" id="perfil"><a class="nav-link active" href="perfil.php"><i class="fas fa-user"></i><span>Mi Perfil</span></a></li>
                <li class="nav-item" id="inventario">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-th-large"></i>&nbsp;<span>Inventario</span></a>
                        <div class="collapse" id="collapse-2">
                            <div class="bg-white border rounded py-2 collapse-inner"><a class="collapse-item" href="productos.php">Productos</a><a class="collapse-item" href="categorias.php">Categorías</a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="reportes"><a class="nav-link" href="ventas.php"><i class="fas fa-tasks"></i><span>Reporte de ventas</span></a></li>
                <li class="nav-item" id="calendario"><a class="nav-link" href="calendario.php"><i class="far fa-calendar"></i><span>Calendario</span></a></li>
                <li class="nav-item" id="docs"></li>
                <li class="nav-item" id="empleados"><a class="nav-link" href="empleados.php"><i class="fas fa-user"></i><span>Empleados</span></a></li>
                <li class="nav-item" id="clientes"><a class="nav-link" href="clientes.php"><i class="fas fa-user"></i><span>&nbsp;Clientes</span></a></li>
                <li class="nav-item" id="proveedores"><a class="nav-link" href="proveedores.php"><i class="fas fa-truck"></i><span>&nbsp;Proveedores</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle invisible nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">2+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">notificaciones</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500"><span style="color: rgb(52, 53, 62);">Lorem ipsum dolor</span></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500"><span style="color: rgb(52, 53, 62);">Lorem ipsum dolor</span></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="notificaciones.php">Mostrar todo</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Usuario</span><i class="fas fa-user"></i></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="perfil.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Perfil</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="login.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar Sesión</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <h2 class="fw-bold text-dark mb-4">Mi Perfil</h2>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card shadow mb-3">
                            <div class="card-header text-center d-flex justify-content-between align-items-center py-3">
                                <p class="text-primary m-0 fw-bold w-100">Administrador</p>
                            </div>
                            <div class="card-body text-center"><img class="rounded-circle mb-3 mt-4" src="../assets/img/avatars/avatar3.jpeg" width="160" height="160">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Cambiar foto</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Configuración de Usuario</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Nombre de usuario</strong></label><input class="form-control" type="text" id="username" placeholder="usuario.369" name="username"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="email"><strong>Email</strong></label><input class="form-control" type="email" id="email" placeholder="usuario@gmail.com" name="email"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Nombres</strong></label><input class="form-control" type="text" id="first_name" placeholder="Luis" name="first_name"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="last_name"><strong>Apellidos</strong></label><input class="form-control" type="text" id="last_name" placeholder="Victorio" name="last_name"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Guardar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Configuración de contacto</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3"><label class="form-label" for="address"><strong>Dirección</strong></label><input class="form-control" type="text" id="address" placeholder="Calle 123" name="direccion"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="city"><strong>Ciudad</strong></label><input class="form-control" type="text" id="city" placeholder="Ciudad X" name="ciudad"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="country"><strong>País</strong></label><input class="form-control" type="text" id="country" placeholder="Perú" name="pais"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Guardar</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer text-center">
            <div class="container my-auto">
                <ul class="list-inline">
                    <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
                <p class="mb-0">Copyright © Farmacia</p>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>

<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/chartjs/chart.min.js"></script>
<script src="../assets/chartjs/bs-init.js"></script>
<script src="../public/js/addCalendario.js"></script>
<script src="../assets/fullCalendar/index.global.js"></script>
<script src="../assets/fullCalendar/index.global.min.js"></script>
<script src="../public/js/theme.js"></script>
</body>

</html>