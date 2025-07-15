<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Le vamos a decir al navegador que el diseño que vamos a realizar va a 
    ser responsive o adaptable-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysVentas</title>
    <!--Añadimos la libreria de Boostrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!--Añadimo s la liberoa de font aweson-->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!--Añadimos la libreria del tema de estilos AminLTE-->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!--Añadimos libreria de AdminLTE-->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="stylesheet" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
</head>

<body class="hold-transtion skin-green-light sidebar-mini">
    <!--Div que contien toda la estructura del body-->
    <div class="wrapper">
        <!--Aqui va el header-->
        <header class="main-header">
            <!--Logo-->
            <a href="#" class="logo">
                <!--Mini logo para sidebar mini 50x50 pixel-->
                <span class="logo-mini"><b>Sys</b>Ventas</span>
                <!--logo para un dispotivo normal y dispositivos moviles-->
                <span class="logo-lg"><b>SysVentas</b></span>
            </a><!--Fin del  logo-->
            <!--Aqui va el header del Navbar: los estilos se pueden 
            encontrar en header.less-->
            <nav class="navbar navbar-static-top" role="navigation">
                <!--Botón de la hamburguesa del navbar-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>

                <!--Navbar menú derecho-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!--Cuenta de Usuario: los
                        estilos lo puedes encontrar in dropdowm.less-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdowm">
                                <!--Cargamos la imagen del usuario-->
                                <img src="../public/img/ia.jpg" alt="Imagen Usuario" class="user-image">
                                <!--Nombre del usuario-->
                                <span class="hidden-xs">Elvis Pachacama</span>

                            </a>
                            <!--Desplegable del usuario-->
                            <ul class="dropdown-menu">
                                <!--Imagen del usuario-->
                                <li class="user-header">
                                    <img src="../public/img/ia.jpg" alt="Imagen Usuario" class="img-circle">
                                    <p>Elvis Pachacama</p>
                                </li>
                                <!--menú footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav><!--fin del navbar-->
        </header> <!--Fin del header-->

        <!--menu izquierdo en columna , contiene un logo y el sidebar-->
        <aside class="main-sidebar">
            <section class="sidebar">
                <!--Ponemos cada uno de los menús-->
                <ul class="sidebar-menu">
                    <li class="header">SYSVENTAS</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span>Configuración</span>
                        </a>
                    </li>

                    <!--lista escritorio-->
                    <li>
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Escritorio</span>
                        </a>
                    </li>
                    <!--lista alamacén-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Almacén</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="articulo.php">
                                    <i class="fa fa-circle-o"></i>Artículos
                                </a></li>
                            <li><a href="categoria.php">
                                    <i class="fa fa-circle-o"></i>Categorías
                                </a></li>

                        </ul>
                    </li><!--fin de lista de almacén-->
                    <!--lista Persona-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Ventas</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="venta.php"><i class="fa fa-circle-o"></i>Ventas</a></li>
                            <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
                        </ul>
                    </li><!--fin lista Persona-->
                    <!--Lista Acceso-->
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-folder"></i>
                            <span>Acceso</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                            <li><a href="permiso.php"><i class="fa fa-circle-o"></i>Permisos</a></li>
                        </ul>
                    </li>
                </ul>
            </section>

        </aside><!--Fin del sidebar -->
